<table border="1" cellpadding="4" cellspacing="0">
    <thead>
        <tr>
            <th>Name</th>
            <th>Request No</th>
            <th>Request For</th>
            <th>Applied Certificate</th>
            <th>Payment Status</th>
            <th>Urgent Mode</th>
            <th>Certificate Status</th>
            <th>Registration No</th>
            <th>Roll No</th>
            <th>Course</th>
            <th>Session</th>
            <th>Date of Application</th>
            <th>Transaction Number</th>
            <th>Transaction Date</th>
            <th>Payment Method</th>
        </tr>
    </thead>
    <tbody>
        @foreach($certificates as $row)
            <tr>
                <td>{{ $row->name }}</td>
                <td>{{ $row->request_id }}</td>
                <td>{{ $row->change_type }}</td>
                <td>{{ $row->certificate }}</td>
                <td>{{ $row->payment === 'completed' ? 'Completed' : 'Pending' }}</td>
                <td>{{ $row->urgent_mode ? 'Urgent' : 'Normal' }}</td>
                <td>
                    @php
                        $status = 'Unknown';
                        if ($row->certificate_status === 0) $status = 'Pending';
                        elseif ($row->certificate_status === 1) $status = 'Issued';
                        elseif ($row->certificate_status === 2) $status = 'Ready';
                    @endphp
                    {{ $status }}
                </td>
                <td>{{ $row->reg_no }}</td>
                <td>{{ $row->roll_no }}</td>
                <td>{{ $row->course }}</td>
                <td>{{ $row->session }}</td>
                <td>{{ optional($row->created_at)?->format('d/m/Y') }}</td>
                <td>{{ optional($row->getPayment)->transaction_number }}</td>
                <td>{{ optional($row->getPayment)->transation_date }}</td>
                <td>{{ optional($row->getPayment)->method }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


