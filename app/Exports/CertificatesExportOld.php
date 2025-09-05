<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CertificatesExportOld implements FromCollection, WithHeadings
{
    private Collection $rows;

    public function __construct(Collection $rows)
    {
        $this->rows = $rows;
    }

    public function collection(): Collection
    {
        return $this->rows->map(function ($row) {
            return [
                'Name' => $row->name,
                'Request No' => $row->request_id,
                'Request For' => $row->change_type,
                'Applied Certificate' => $row->certificate,
                'Payment Status' => $row->payment === 'completed' ? 'Completed' : 'Pending',
                'Urgent Mode' => $row->urgent_mode ? 'Urgent' : 'Normal',
                'Certificate Status' => match($row->certificate_status) { 0 => 'Pending', 1 => 'Issued', 2 => 'Ready', default => 'Unknown' },
                'Registration No' => $row->reg_no,
                'Roll No' => $row->roll_no,
                'Course' => $row->course,
                'Session' => $row->session,
                'Date of Application' => optional($row->created_at)?->format('d/m/Y'),
                'Transaction Number' => optional($row->getPayment)->transaction_number,
                'Transaction Date' => optional($row->getPayment)->transation_date,
                'Payment Method' => optional($row->getPayment)->method,
            ];
        });
    }

    public function headings(): array
    {
        return [
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
            'Payment Method',
        ];
    }
}


