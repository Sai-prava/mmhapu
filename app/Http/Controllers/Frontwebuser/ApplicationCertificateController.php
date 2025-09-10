<?php

namespace App\Http\Controllers\Frontwebuser;

use App\Exports\CertificatesExport;
use App\Exports\CertificatesExportOld;
use App\Http\Controllers\Controller;
use App\Models\CertificateDocument;
use App\Models\OnlineCertificate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use Maatwebsite\Excel\Facades\Excel;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ApplicationCertificateController extends Controller
{
    public function certificateView()
    {
        return view('frontwebuser.application_certificate.index');
    }
    public function getCertificatesData(Request $request)
    {
        try {
            $query = OnlineCertificate::with(['getPayment', 'degree'])->whereRaw("certificate REGEXP '^[0-9]+$'");

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

            // Certificate status filter
            if ($request->filled('certificate_status')) {
                $query->where('online_certificates.certificate_status', $request->certificate_status);
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
                    function ($row) {
                        switch ($row->certificate_status) {
                            case 0:
                                return '<span class="badge bg-warning">Pending</span>';
                            case 1:
                                return '<span class="badge bg-success">Issued</span>';
                            case 2:
                                return '<span class="badge bg-info">Ready</span>';
                            default:
                                return '<span class="badge bg-secondary">Unknown</span>';
                        }
                    }
                )
                ->addColumn('action', function ($row) {
                    $editUrl = route('frontwebuser.certificateEdit', $row->id);
                    $deleteUrl = route('frontwebuser.applicationDelete', $row->id);

                    return '
                    <a href="' . $editUrl . '" class="btn btn-primary btn-sm">Edit</a>
                    <button type="button" class="btn btn-danger btn-sm delete-btn" data-url="' . $deleteUrl . '">Delete</button>
                ';
                })
                ->rawColumns(['payment_status', 'urgent_mode_status', 'certificate_status_text', 'action'])
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
    public function oldCertificateView()
    {
        return view('frontwebuser.application_certificate.old_index');
    }

    public function oldGetCertificatesData(Request $request)
    {
        try {
            $query = OnlineCertificate::with(['getPayment', 'degree'])
                ->whereRaw("NOT (certificate REGEXP '^[0-9]+$')"); // only old string certificates

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

            // Certificate status filter
            if ($request->filled('certificate_status')) {
                $query->where('online_certificates.certificate_status', $request->certificate_status);
            }

            return DataTables::eloquent($query)
                ->addIndexColumn()
                ->addColumn('certificate', fn($row) => $row->certificate ?? 'N/A')
                ->addColumn('urgent_mode_status', function ($row) {
                    return $row->urgent_mode == 1
                        ? '<span class="badge bg-warning">Urgent</span>'
                        : '<span class="badge bg-secondary">Normal</span>';
                })
                ->addColumn('created_at_formatted', fn($row) => $row->created_at ? $row->created_at->format('d/m/Y') : '')
                ->addColumn(
                    'payment_status',
                    fn($row) =>
                    $row->payment === 'completed'
                        ? '<span class="badge bg-success">Completed</span>'
                        : '<span class="badge bg-danger">Pending</span>'
                )
                ->addColumn('transaction_number', fn($row) => optional($row->getPayment)->transaction_number ?? 'N/A')
                ->addColumn('transaction_date', fn($row) => optional($row->getPayment)->transation_date ?? 'N/A')
                ->addColumn('payment_method', fn($row) => optional($row->getPayment)->method ?? 'N/A')
                ->addColumn('certificate_status_text', function ($row) {
                    switch ($row->certificate_status) {
                        case 0:
                            return '<span class="badge bg-warning">Pending</span>';
                        case 1:
                            return '<span class="badge bg-success">Issued</span>';
                        case 2:
                            return '<span class="badge bg-info">Ready</span>';
                        default:
                            return '<span class="badge bg-secondary">Unknown</span>';
                    }
                })
                ->addColumn('action', function ($row) {
                    $editUrl = route('frontwebuser.certificateEdit', $row->id);
                    $deleteUrl = route('frontwebuser.applicationDelete', $row->id);

                    return '
                        <a href="' . $editUrl . '" class="btn btn-primary btn-sm">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm delete-btn" data-url="' . $deleteUrl . '">Delete</button>
                    ';
                })
                ->rawColumns(['payment_status', 'urgent_mode_status', 'certificate_status_text', 'action'])
                ->make(true);
        } catch (\Exception $e) {
            \Log::error('DataTables error: ' . $e->getMessage());
            \Log::error('Stack trace: ' . $e->getTraceAsString());

            return response()->json([
                'error' => 'An error occurred while processing the request: ' . $e->getMessage()
            ], 500);
        }
    }

    public function exportCertificates(Request $request, $format = 'csv')
    {
        $query = OnlineCertificate::with(['getPayment', 'degree'])
            ->whereRaw("certificate REGEXP '^[0-9]+$'");

        if ($request->filled('from_date') && $request->filled('to_date')) {
            $from = \Carbon\Carbon::createFromFormat('Y-m-d', $request->from_date)->startOfDay();
            $to   = \Carbon\Carbon::createFromFormat('Y-m-d', $request->to_date)->endOfDay();
            $query->whereBetween('online_certificates.created_at', [$from, $to]);
        }
        if ($request->filled('payment_type')) {
            $query->where('online_certificates.payment', $request->payment_type);
        }
        if ($request->filled('urgent_mode')) {
            $query->where('online_certificates.urgent_mode', $request->urgent_mode);
        }
        if ($request->filled('certificate_status')) {
            $query->where('online_certificates.certificate_status', $request->certificate_status);
        }

        $certificates = $query->get();

        if ($format === 'csv') {
            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="certificates.csv"',
            ];
            $callback = function () use ($certificates) {
                $out = fopen('php://output', 'w');
                fputcsv($out, [
                    'Name',
                    'Request No',
                    'Request For',
                    'Applied Certificate',
                    'Payment Status',
                    'Urgent Mode',
                    'Certificate Status',
                    'Registration No',
                    'Roll No',
                    'Course',
                    'Session',
                    'Date of Application',
                    'Transaction Number',
                    'Transaction Date',
                    'Payment Method'
                ]);
                foreach ($certificates as $row) {
                    fputcsv($out, [
                        $row->name,
                        $row->request_id,
                        $row->change_type,
                        optional($row->degree)->name,
                        $row->payment === 'completed' ? 'Completed' : 'Pending',
                        $row->urgent_mode ? 'Urgent' : 'Normal',
                        match ($row->certificate_status) {
                            0 => 'Pending',
                            1 => 'Issued',
                            2 => 'Ready',
                            default => 'Unknown'
                        },
                        $row->reg_no,
                        $row->roll_no,
                        $row->course,
                        $row->session,
                        optional($row->created_at)?->format('d/m/Y'),
                        optional($row->getPayment)->transaction_number,
                        optional($row->getPayment)->transation_date,
                        optional($row->getPayment)->method,
                    ]);
                }
                fclose($out);
            };
            return response()->stream($callback, 200, $headers);
        }

        if ($format === 'excel') {
            return Excel::download(new CertificatesExport($certificates), 'certificates.xlsx');
        }

        if ($format === 'pdf') {
            $html = view('admin.web.application-certificate.export_table', compact('certificates'))->render();
            $pdf = FacadePdf::loadHTML($html)->setPaper('a4', 'landscape');
            return $pdf->download('certificates.pdf');
        }

        if ($format === 'print') {
            $html = view('admin.web.application-certificate.export_table', compact('certificates'))->render();
            return response($html);
        }

        abort(400, 'Invalid format');
    }

    public function exportOldCertificates(Request $request, $format = 'csv')
    {
        $query = OnlineCertificate::with(['getPayment'])
            ->whereRaw("NOT (certificate REGEXP '^[0-9]+$')");

        if ($request->filled('from_date') && $request->filled('to_date')) {
            $from = \Carbon\Carbon::createFromFormat('Y-m-d', $request->from_date)->startOfDay();
            $to   = \Carbon\Carbon::createFromFormat('Y-m-d', $request->to_date)->endOfDay();
            $query->whereBetween('online_certificates.created_at', [$from, $to]);
        }
        if ($request->filled('payment_type')) {
            $query->where('online_certificates.payment', $request->payment_type);
        }
        if ($request->filled('urgent_mode')) {
            $query->where('online_certificates.urgent_mode', $request->urgent_mode);
        }
        if ($request->filled('certificate_status')) {
            $query->where('online_certificates.certificate_status', $request->certificate_status);
        }

        $certificates = $query->get();

        if ($format === 'csv') {
            $headers = [
                'Content-Type' => 'text/csv',
                'Content-Disposition' => 'attachment; filename="old_certificates.csv"',
            ];
            $callback = function () use ($certificates) {
                $out = fopen('php://output', 'w');
                fputcsv($out, [
                    'Name',
                    'Request No',
                    'Request For',
                    'Certificate',
                    'Payment Status',
                    'Urgent Mode',
                    'Certificate Status',
                    'Registration No',
                    'Roll No',
                    'Course',
                    'Session',
                    'Date of Application',
                    'Transaction Number',
                    'Transaction Date',
                    'Payment Method'
                ]);
                foreach ($certificates as $row) {
                    fputcsv($out, [
                        $row->name,
                        $row->request_id,
                        $row->change_type,
                        $row->certificate,
                        $row->payment === 'completed' ? 'Completed' : 'Pending',
                        $row->urgent_mode ? 'Urgent' : 'Normal',
                        match ($row->certificate_status) {
                            0 => 'Pending',
                            1 => 'Issued',
                            2 => 'Ready',
                            default => 'Unknown'
                        },
                        $row->reg_no,
                        $row->roll_no,
                        $row->course,
                        $row->session,
                        optional($row->created_at)?->format('d/m/Y'),
                        optional($row->getPayment)->transaction_number,
                        optional($row->getPayment)->transation_date,
                        optional($row->getPayment)->method,
                    ]);
                }
                fclose($out);
            };
            return response()->stream($callback, 200, $headers);
        }

        if ($format === 'excel') {
            return Excel::download(new CertificatesExportOld($certificates), 'old_certificates.xlsx');
        }

        if ($format === 'pdf') {
            try {
                if ($certificates->isEmpty()) {
                    return response()->json(['error' => 'No certificates found for PDF export'], 404);
                }

                $html = view('admin.web.application-certificate.export_table_v2', compact('certificates'))->render();

                if (!$html) {
                    \Log::error('Export PDF: Rendered HTML is empty');
                    return response()->json(['error' => 'Failed to render HTML for PDF'], 500);
                }

                $pdf = FacadePdf::loadHTML($html)
                    ->setPaper('a4', 'landscape')
                    ->setOptions([
                        'isRemoteEnabled' => true,
                        'isHtml5ParserEnabled' => true,
                        'defaultFont' => 'DejaVu Sans',
                        'isPhpEnabled' => true,
                    ]);

                return $pdf->download('old_certificates.pdf');
            } catch (\Throwable $e) {
                \Log::error('Export PDF failed: ' . $e->getMessage(), ['trace' => $e->getTraceAsString()]);
                return response()->json(['error' => 'PDF generation failed'], 500);
            }
        }

        if ($format === 'print') {
            $html = view('admin.web.application-certificate.export_table_v2', compact('certificates'))->render();
            return response($html);
        }

        abort(400, 'Invalid format');
    }
}
