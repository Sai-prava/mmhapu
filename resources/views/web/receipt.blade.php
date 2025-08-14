<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status of Document Request</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 15px;
        }

        table {
            border: 1px solid #000;
            width: 100%;
            /* border-collapse: collapse; */
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
            vertical-align: top;
        }

        .header {
            text-align: center;
            margin-bottom: 10px;
        }

        .note {
            font-size: 14px;
            margin-top: 10px;
        }

        .download-btn {
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
        }

        button {
            background-color: #007BFF;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
        
        .urgent-mode {
            background-color: #fff3cd !important;
            color: #856404 !important;
            font-weight: bold !important;
        }
        
        .amount-highlight {
            background-color: #d4edda !important;
            color: #155724 !important;
            font-weight: bold !important;
        }
    </style>
</head>

<body>
    <div id="content">
        <table>
            <tr>
                <th colspan="4" style="text-align: center; background-color: #f2f2f2; font-size: 18px;">
                    Status of Document Request<br>
                    <span style="font-size: 14px; font-weight: normal;">as on {{ $created_at }}</span>
                </th>
            </tr>
            <tr>
                <th>Requester ID / Name:</th>
                <td>{{ $request_id }} / {{ $name }}</td>
                <th>Registration No:</th>
                <td>{{ $reg_no }}</td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td>{{ $gender }}</td>
                <th>Email:</th>
                <td>{{ $email }}</td>
            </tr>
            <tr>
                <th>Mobile:</th>
                <td>{{ $number }}</td>
                <th>Request For:</th>
                <td>{{ $certificate }}</td>
            </tr>
            <tr>
                <th>Request Type:</th>
                <td class="{{ $request_type == 'Urgent Mode' ? 'urgent-mode' : '' }}">{{ $request_type }}</td>
                <th>Dept/College:</th>
                <td>{{ $college }}</td>
            </tr>
            <tr>
                <th>Course:</th>
                <td> {{ $course }} </td>
                <th>Session:</th>
                <td>{{ $session }}</td>
            </tr>
            <tr>
                <th>Application Status:</th>
                <td>Submit</td>
                <th>Base Amount:</th>
                <td>{{ $amount }} {{ $currency }}</td>
            </tr>
            <tr>
                <th>Urgent Fee:</th>
                <td class="{{ $urgent_fee > 0 ? 'urgent-mode' : '' }}">{{ $urgent_fee > 0 ? $urgent_fee . ' ' . $currency : 'N/A' }}</td>
                <th>Total Amount:</th>
                <td class="amount-highlight">{{ $total_amount }} {{ $currency }}</td>
            </tr>
            <tr>
                <th>Transaction ID:</th>
                <td>{{ $transaction_number }}</td>
                <th>Payment Status:</th>
                <td>{{ $payment }}</td>
            </tr>
            <tr>
                <th>Payment Method:</th>
                <td>{{ $method }}</td>
                <th>Document (If ready by Univ):</th>
                <td style="height: 30px;"></td>
            </tr>
            <tr>
                <th>Note:</th>
                <td colspan="3" style="font-size: 10px; color:red;">
                    1. Please bring original valid ID (AADHAR/DL/Voter ID) Card at the time of Receiving of Certificate.
                </td>
            </tr>
        </table>
    </div>

</body>

</html>