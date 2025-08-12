<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\DegreeCertificate;
use App\Models\OnlineCertificate;
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
        return view('web.application-online-certificate', compact('degree_certificate'));
    }
    public function certificateStore(Request $request)
    {
        $request->validate([
            'reg_no' => 'required',
            'roll_no' => 'required|unique:online_certificates,roll_no',
            'name' => 'required',
            'father_name' => 'required',
            'mother_name' => 'required',
            'adhar_number' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'number' => 'required|numeric|unique:online_certificates,number',
            'certificate' => 'required',
            'college' => 'required',
            'session' => 'required',
            'passing_year' => 'required',
            'recive_degree' => 'required',
            'recive_mode' => 'required',
        ]);
        $certificateStore = new OnlineCertificate();

        $certificateStore->request_id = mt_rand(10000, 99999);

        $certificateStore->reg_no = $request->reg_no;
        $certificateStore->roll_no = $request->roll_no;
        $certificateStore->name = $request->name;
        $certificateStore->hindi_name = $request->hindi_name;
        $certificateStore->father_name = $request->father_name;
        $certificateStore->mother_name = $request->mother_name;
        $certificateStore->adhar_number = $request->adhar_number;
        $certificateStore->apaar_id = $request->apaar_id;
        if($request->hasFile('document')){
            $document = $request->file('document');
            $document_name = $document->getClientOriginalName();
            $document->move(public_path('uploads/certificates'), $document_name);
            $certificateStore->document = $document_name;
        }
        $certificateStore->gender = $request->gender;
        $certificateStore->email = $request->email;
        $certificateStore->number = $request->number;
        $certificateStore->certificate = $request->certificate;
        $certificateStore->college = $request->college;
        $certificateStore->session = $request->session;
        $certificateStore->passing_year = $request->passing_year;
        $certificateStore->recive_degree = $request->recive_degree;
        $certificateStore->recive_mode = $request->recive_mode;
        $certificateStore->address = $request->address;
        $certificateStore->save();

        $encryptedId = Crypt::encrypt($certificateStore->id);

        return redirect('/payment/' . $encryptedId);
    }
    public function certificateView()
    {
        $certificates = OnlineCertificate::all();
        return view('admin.web.application-certificate.index', compact('certificates'));
    }
    public function certificateEdit($id)
    {
        $certificate = OnlineCertificate::find($id);
        return view('admin.web.application-certificate.edit', compact('certificate'));
    }
    public function certificateUpdate(Request $request)
    {
        $update = OnlineCertificate::find($request->id);
        $update->certificate_status = $request->certificate_status;
        // if ($request->hasFile('file')) {
        //     if ($update->file &&  file_exists(public_path('uploads/certificates/' . $update->file))) {
        //         unlink(public_path('uploads/certificates/' . $update->file));
        //     }
        //     $file = $request->file('file');
        //     $filename = time() . '.' . $file->getClientOriginalName();
        //     $file->move(public_path('uploads/certificates'), $filename);
        //     $update->file = $filename;
        //     $update->certificate_status = 1;
        // }
        $update->save();
        toastr()->success('Certificate Updated Successfully');
        return redirect()->route('admin.certificateView');
    }

    public function applicationDelete($id){
        $deleteCertificate = OnlineCertificate::find($id);
        if($deleteCertificate){
            $deleteCertificate->delete();
            toastr()->success('Deleted Successfully.');
            return redirect()->back();
        }
        toastr()->error('Something wents wrong.');
        return redirect()->back();
    }

    public function checkMobileNumber(Request $request)
    {
        $request->validate([
            'rollno' => 'required',
        ]);

        $certificate = OnlineCertificate::where('roll_no', $request->rollno)->first();

        if ($certificate) {
            if ($certificate->payment === 'completed') {
                toastr()->info('Payment is already completed.');
                return redirect()->back();
            } else {
                return redirect()->route('viewCertificate', ['roll_no' => $request->rollno]);
            }
        } else {
            toastr()->error('This Roll No. is not registered.');
            return redirect()->back();
        }
    }
    public function checkCertificate(Request $request)
    {
        $request->validate([
            'rollno' => 'required',
        ]);

        $certificate = OnlineCertificate::where('roll_no', $request->rollno)->first();

        if ($certificate) {
            if ($certificate->payment === 'completed') {
                return redirect()->route('certificate.download', ['rollno' => $request->rollno]);
            } else {
                toastr()->info('Please complete the payment first.');
                return redirect()->back();
            }
        } else {
            toastr()->error('Invalid roll number.');
            return redirect()->back();
        }
    }
    public function download($rollno)
    {
        $certificate = OnlineCertificate::where('roll_no', $rollno)->firstOrFail();

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

    public function viewCertificate($roll_no)
    {
        $certificate = OnlineCertificate::where('roll_no', $roll_no)->firstOrFail();
        $degree_certificate = DegreeCertificate::all();
        $degree = DegreeCertificate::where('degree', $certificate->certificate)->first();

        return view('web.view-online-certificate', compact('certificate', 'degree_certificate', 'degree'));
    }

    public function checkReceipt(Request $request)
    {
        $request->validate([
            'rollno' => 'required',
        ]);
        $receipt = OnlineCertificate::where('roll_no', $request->rollno)->first();
        if ($receipt) {
            if ($receipt->payment === 'completed') {
                return redirect()->route('generateReceipt', ['rollno' => $request->rollno]);
            } else {
                toastr()->info('Please complete the payment first.');
                return redirect()->back();
            }
        } else {
            toastr()->error('Invalid roll number.');
            return redirect()->back();
        }
    }

    public function generateReceipt($rollno)
    {
        $receipt = OnlineCertificate::where('roll_no', $rollno)->first();
        $data = [
            'name' => $receipt->name,
            'roll_no' => $receipt->roll_no,
            'father_name' => $receipt->father_name,
            'certificate' => $receipt->certificate,
            'created_at' => Carbon::parse($receipt->created_at)->format('jS F Y'),
            'method' => $receipt->getPayment->method,
            // 'payment_status' => $receipt->getPayment->payment_status,
            'amount' => $receipt->getPayment->amount,
        ];

        $pdf = FacadePdf::loadView('web.receipt', $data);

        return $pdf->download('payment_receipt.pdf');
    }
}