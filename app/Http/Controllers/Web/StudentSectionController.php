<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\CertificateDocument;
use App\Models\Course;
use App\Models\CourseCategory;
use App\Models\Degree;
use App\Models\DegreeCertificate;
use App\Models\Document;
use App\Models\OnlineCertificate;
use Yajra\DataTables\Facades\DataTables;
use App\Models\Session;
use App\Models\UrgentMode;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Carbon\Carbon;
use PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class StudentSectionController extends Controller
{
    public function onlineCertificate()
    {
        $degree_certificate = DegreeCertificate::all();
        $sessions = Session::all();
        $course_category = CourseCategory::all();
        $urgent_mode = UrgentMode::first();
        $degree = Degree::all();
        return view('web.application-online-certificate', compact('degree_certificate', 'sessions', 'course_category', 'urgent_mode', 'degree'));
    }

    public function certificateStore(Request $request)
    {
        $request->validate([
            'reg_no' => 'required',
            'roll_no' => 'required',
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'gender' => 'required',
            'document' => 'required',
            'adhar_number' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric|digits:10',
            'certificate' => 'required',
            'course' => 'required',
            'change_type' => 'required',
            'college' => 'required',
            'session' => 'required',
            'passing_year' => 'required',
            'recive_degree' => 'required',
            'recive_mode' => 'required',
            'course_category_id' => 'required',
            'document_id' => 'nullable|array',
            'document_file.*' => 'nullable|file',
        ]);
        // dd($request->document_id[2]);

        $certificateStore = new OnlineCertificate();
        $prefix = "N-";
        $certificateStore->request_id = $prefix . mt_rand(10000, 99999);

        $certificateStore->reg_no = $request->reg_no;
        $certificateStore->roll_no = $request->roll_no;
        $certificateStore->name = $request->name;
        $certificateStore->hindi_name = $request->hindi_name;
        $certificateStore->father_name = $request->father_name;
        $certificateStore->mother_name = $request->mother_name;
        $certificateStore->adhar_number = $request->adhar_number;
        $certificateStore->apaar_id = $request->apaar_id;
        if ($request->hasFile('document')) {
            $document = $request->file('document');
            $document_name = $document->getClientOriginalName();
            $document->move(public_path('uploads/certificates'), $document_name);
            $certificateStore->document = $document_name;
        }
        $certificateStore->gender = $request->gender;
        $certificateStore->email = $request->email;
        $certificateStore->number = $request->number;
        $certificateStore->certificate = $request->certificate;
        $certificateStore->course_category_id = $request->course_category_id;
        $certificateStore->course = $request->course;
        $certificateStore->change_type = $request->change_type;
        $certificateStore->college = $request->college;
        $certificateStore->session = $request->session;
        $certificateStore->passing_year = $request->passing_year;
        $certificateStore->recive_degree = $request->recive_degree;
        $certificateStore->recive_mode = $request->recive_mode;
        $certificateStore->address = $request->address;
        $certificateStore->urgent_mode = $request->urgent_mode ? 1 : 0;
        $certificateStore->save();

        // Only process documents if document_id array exists and is not empty
        if ($request->has('document_id') && is_array($request->document_id) && count($request->document_id) > 0) {
            $count = count($request->document_id);
            for ($i = 0; $i < $count; $i++) {
                $documents = new CertificateDocument();
                $documents->certificate_id = $certificateStore->id;
                $documents->document_id = $request->document_id[$i];
                if ($request->hasFile("document_file.$i")) {
                    $document = $request->file('document_file')[$i];
                    $document_name = $document->getClientOriginalName(); // Add a unique prefix
                    $document->move(public_path('uploads/certificate_documents'), $document_name);
                    $documents->documents = $document_name;
                }
                $documents->save();
            }
        }

        $encryptedId = Crypt::encrypt($certificateStore->id);

        return redirect('/payment/' . $encryptedId);
    }
    public function translateName(Request $request)
    {
        // Validate that the 'name' field is provided
        $request->validate([
            'name' => 'required|string',
        ]);

        // Translate the English name to Hindi
        $translator = new GoogleTranslate();
        $translatedName = $translator->setSource('en')->setTarget('hi')->translate($request->name);

        // Return the translated Hindi name as a JSON response
        return response()->json(['hindi_name' => $translatedName]);
    }
    public function certificateView()
    {
        return view('admin.web.application-certificate.index');
    }
    public function getCertificatesData(Request $request)
    {
        try {
            $query = OnlineCertificate::with('getPayment')
                ->join('degrees', 'online_certificates.certificate', '=', 'degrees.id')
                ->select('online_certificates.*', 'degrees.name as degree_name');

            // Date filter
            if ($request->filled('from_date') && $request->filled('to_date')) {
                $from = Carbon::createFromFormat('Y-m-d', $request->from_date)->startOfDay();
                $to   = Carbon::createFromFormat('Y-m-d', $request->to_date)->endOfDay();
                $query->whereBetween('online_certificates.created_at', [$from, $to]);
            }

            // Payment filter
            if ($request->filled('payment_type')) {
                $query->where('online_certificates.payment', $request->payment_type);
            }

            // Urgent mode filter
            if ($request->filled('urgent_mode')) {
                $query->where('online_certificates.urgent_mode', $request->urgent_mode);
            }

            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->addColumn(
                    'urgent_mode_status',
                    function($row) {
                        if ($row->urgent_mode == 1) {
                            return '<span class="badge bg-warning">Urgent</span>';
                        } else {
                            return '<span class="badge bg-secondary">Normal</span>';
                        }
                    }
                )
                ->addColumn(
                    'created_at_formatted',
                    fn($row) =>
                    $row->created_at ? $row->created_at->format('d/m/Y') : ''
                )
                ->addColumn(
                    'payment_status',
                    fn($row) =>
                    $row->payment === 'completed'
                        ? '<span class="badge bg-success">Completed</span>'
                        : '<span class="badge bg-danger">Pending</span>'
                )
                ->addColumn(
                    'transaction_number',
                    fn($row) =>
                    optional($row->getPayment)->transaction_number ?? 'N/A'
                )
                ->addColumn(
                    'transaction_date',
                    fn($row) =>
                    optional($row->getPayment)->transation_date ?? 'N/A'
                )
                ->addColumn(
                    'payment_method',
                    fn($row) =>
                    optional($row->getPayment)->method ?? 'N/A'
                )
                ->addColumn(
                    'certificate_status_text',
                    fn($row) =>
                    $row->certificate_status == 0 ? 'Pending' : 'Issued'
                )
                ->addColumn('action', function ($row) {
                    $editUrl = route('admin.certificateEdit', $row->id);
                    $deleteUrl = route('admin.applicationDelete', $row->id);

                    return '
                    <a href="' . $editUrl . '" class="btn btn-primary btn-sm">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-url="' . $deleteUrl . '">Delete</button>
                ';
                })
                ->rawColumns(['payment_status', 'urgent_mode_status', 'action'])
                ->make(true);
        } catch (\Exception $e) {
            \Log::error('DataTables error: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());
            
            return response()->json([
                'error' => 'An error occurred while processing the request: ' . $e->getMessage()
            ], 500);
        }
    }

    public function certificateEdit($id)
    {
        $certificate = OnlineCertificate::find($id);
        $certificate_document = CertificateDocument::where('certificate_id', $id)->get();
        return view('admin.web.application-certificate.edit', compact('certificate', 'certificate_document'));
    }
    public function certificateUpdate(Request $request)
    {
        $update = OnlineCertificate::find($request->id);
        $update->certificate_status = $request->certificate_status;
        $update->save();
        toastr()->success('Certificate Updated Successfully');
        return redirect()->route('admin.certificateView');
    }

    public function applicationDelete($id)
    {
        $deleteCertificate = OnlineCertificate::find($id);
        if ($deleteCertificate) {
            $deleteCertificate->delete();
            toastr()->success('Deleted Successfully.');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    public function checkMobileNumber(Request $request)
    {
        $certificates = OnlineCertificate::where('reg_no', $request->reg_no)
            ->with('getPayment')
            ->get();

        return response()->json([
            'success' => true,
            'certificates' => $certificates
        ]);
    }

    public function checkCertificate(Request $request)
    {
        $request->validate([
            'reg_no' => 'required',
        ]);

        $certificate = OnlineCertificate::where('reg_no', $request->reg_no)->first();

        if ($certificate) {
            if ($certificate->payment === 'completed') {
                // return redirect()->route('certificate.download', ['reg_no' => $request->reg_no]);
            } else {
                toastr()->info('Please complete the payment first.');
                return redirect()->back();
            }
        } else {
            toastr()->error('Invalid Registration Number.');
            return redirect()->back();
        }
    }
    public function download($reg_no)
    {
        $certificate = OnlineCertificate::where('reg_no', $reg_no)->get();
        // dd($certificate);

        if ($certificate->isEmpty()) {
            return back()->with('error', 'No certificates found for this registration number.');
        }

        $pdfPath = public_path('uploads/certificates/' . $certificate->file);

        if (!file_exists($pdfPath)) {
            return back()->with('error', 'Certificate PDF not found.');
        }

        return response()->file($pdfPath, [
            'Content-Disposition' => 'inline; filename="' . $certificate->file . '"',
        ]);
    }

    public function getPayment(Request $request)
    {
        $query = OnlineCertificate::with('getPayment');
        if ($request->filled('payment_type')) {
            $query->where('payment', $request->payment_type);
        }
        $get_payment = $query->get();
        return response()->json($get_payment);
    }

    public function viewCertificate($reg_no)
    {
        $certificate = OnlineCertificate::where('reg_no', $reg_no)->firstOrFail();
        $degree_certificate = DegreeCertificate::all();
        $degree = DegreeCertificate::where('degree', $certificate->certificate)->first();

        return view('web.view-online-certificate', compact('certificate', 'degree_certificate', 'degree'));
    }

    public function checkReceipt(Request $request)
    {
        $request->validate([
            'reg_no' => 'required',
        ]);
        $receipt = OnlineCertificate::where('reg_no', $request->reg_no)->first();
        if ($receipt) {
            return redirect()->route('generateReceipt', ['reg_no' => $request->reg_no]);
        } else {
            toastr()->error('Invalid Registration Number.');
            return redirect()->back();
        }
    }

    public function generateReceipt($id)
    {
        $receipt = OnlineCertificate::find($id);
        if (!$receipt) {
            abort(404, 'Receipt not found');
        }

        $payment = $receipt->getPayment;
        $data = [
            'name' => $receipt->name,
            'request_id' => $receipt->request_id,
            'reg_no' => $receipt->reg_no,
            'gender' => $receipt->gender,
            'email' => $receipt->email,
            'number' => $receipt->number,
            'college' => $receipt->college,
            'session' => $receipt->session,
            'payment' => $receipt->payment,
            'roll_no' => $receipt->roll_no,
            'father_name' => $receipt->father_name,
            'change_type' => $receipt->change_type,
            'certificate' => $receipt->certificate,
            'course' => $receipt->course,
            'created_at' => Carbon::parse($receipt->created_at)->format('jS F Y'),
            'method' => $payment ? $payment->method : 'N/A',
            'transaction_number' => $payment ? $payment->transaction_number : 'N/A',
            'amount' => $payment ? $payment->amount : 'N/A',
            'currency' => $payment ? $payment->currency : '',
        ];

        $pdf = FacadePdf::loadView('web.receipt', $data);

        return $pdf->download('payment_receipt.pdf');
    }


    public function filterCertificates(Request $request)
    {
        $fromDate = $request->from_date;
        $toDate = $request->to_date;

        $certificates = OnlineCertificate::with('getPayment')
            ->whereBetween('created_at', [$fromDate, $toDate])
            ->get();
        return response()->json(['certificates' => $certificates]);
    }

    public function getDocument(Request $request)
    {
        $get_document = DegreeCertificate::where('degree', $request->certificate)->where('change_type', $request->certificateType)->first();
        if (isset($get_document)) {
            $doc = json_decode($get_document->document_id);
        } else {
            $doc = null;
        }
        return response()->json($doc);
    }
    public function getDocumentName(Request $request)
    {
        // dd($request->id);
        $get_name = Document::where('id', $request->id)->first();
        return response()->json($get_name);
    }

    public function getCertificate(Request $request)
    {
        $get_certificate = DegreeCertificate::where('change_type', $request->certificateType)->get();
        return response()->json($get_certificate);
    }

    public function getcourse(Request $request)
    {
        $get_course = Course::where('couse_category_id', $request->course_category)->get();
        return response()->json($get_course);
    }
    public function getsession(Request $request)
    {
        $get_session = Session::where('course', $request->course)->get();
        return response()->json($get_session);
    }
    public function getDegreesByUrgent(Request $request)
    {
        $urgent = $request->urgent;

        $degrees = DegreeCertificate::query()
            ->when($urgent == 1, function ($q) {
                $q->where('status', 1);
            })
            ->pluck('name', 'id');

        return response()->json([
            'degrees' => $degrees->map(function ($name, $id) {
                return ['id' => $id, 'name' => $name];
            })->values()
        ]);
    }

    public function getDegreePrice(Request $request)
    {
        // Find degree certificate by degree_id and change_type
        $degreeCertificate = DegreeCertificate::where('degree_id', $request->degree_id)
                                              ->where('change_type', $request->change_type)
                                              ->first();
        
        return response()->json([
            'price' => $degreeCertificate ? $degreeCertificate->price : 0
        ]);
    }
    public function filterDegrees(Request $request)
    {
        $changeType = $request->query('change_type');
        $urgentMode = $request->query('urgent_mode'); // 1 if checked

        $query = DegreeCertificate::query();

        if ($changeType) {
            $query->where('change_type', $changeType);
        }

        if ($urgentMode) {
            $query->where('status', 1);
        }

        // Get degree IDs that match
        $degreeIds = $query->pluck('degree_id')->unique();

        // Fetch degree names
        $degrees = Degree::whereIn('id', $degreeIds)
                         ->get(['id', 'name']);

        return response()->json($degrees);
    }
   
}
