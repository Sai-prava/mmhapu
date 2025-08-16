<?php

namespace App\Http\Controllers\Frontwebuser;

use App\Http\Controllers\Controller;
use App\Models\CertificateDocument;
use App\Models\OnlineCertificate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class ApplicationCertificateController extends Controller
{
    public function certificateView()
    {
        return view('frontwebuser.application_certificate.index');
    }
    public function getCertificatesData(Request $request)
    {
        try {
            $query = OnlineCertificate::with(['getPayment', 'degree']);

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
                    'degree_name',
                    fn($row) => optional($row->degree)->name ?? 'N/A'
                )
                ->addColumn(
                    'urgent_mode_status',
                    function ($row) {
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
                    $editUrl = route('frontwebuser.certificateEdit', $row->id);
                    $deleteUrl = route('frontwebuser.applicationDelete', $row->id);

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
        return view('frontwebuser.application_certificate.edit', compact('certificate', 'certificate_document'));
    }
    public function certificateUpdate(Request $request)
    {
        $update = OnlineCertificate::find($request->id);
        $update->certificate_status = $request->certificate_status;
        $update->urgent_mode = $request->urgent_mode;
        $update->save();
        toastr()->success('Certificate Updated Successfully');
        return redirect()->route('frontwebuser.certificateView');
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
}
