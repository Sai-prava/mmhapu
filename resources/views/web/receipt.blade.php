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
                <th>Dept/College:</th>
                <td>{{ $college }}</td>
                <th>Course:</th>
                <td> {{ $course }} </td>
            </tr>
            <tr>
                <th>Session:</th>
                <td>{{ $session }}</td>
                <th>Application Status:</th>
                <td>Submit</td>
            </tr>
            <tr>
                <th>Transaction ID / Amount:</th>
                <td>{{ $transaction_number }} / {{ $amount }} {{ $currency }}</td>
                <th>Payment Status:</th>
                <td>{{ $payment }}</td>
            </tr>
            <tr>
                <th style="width: 25%;">Document (If ready by Univ):</th>
                <td colspan="3" style="height: 30px;"></td>
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