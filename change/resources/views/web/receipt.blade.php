<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            width: 700px;
            margin: 30px auto;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .header img {
            max-width: 80px;
            height: auto;
        }

        .header h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
            flex: 1;
            text-align: center;
        }

        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .details-table th,
        .details-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .details-table th {
            background-color: #f8f8f8;
            font-weight: bold;
        }

        .footer {
            text-align: center;
            font-size: 12px;
            margin-top: 20px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <table>
                <tr>
                    <th><img src="{{ public_path('uploads/logo/logo1.png') }}" alt="Logo"></th>
                    <td>
                        <h2>Online Certificate Receipt</h2>
                    </td>
                </tr>
            </table>
        </div>

        <table class="details-table">
            <tr>
                <th>Name</th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th>Roll Number</th>
                <td>{{ $roll_no }}</td>
            </tr>
            <tr>
                <th>Father's Name</th>
                <td>{{ $father_name }}</td>
            </tr>
            <tr>
                <th>Request For</th>
                <td>{{ $certificate }}</td>
            </tr>
            <tr>
                <th>Application Date</th>
                <td>{{ $created_at }}</td>
            </tr>
            <tr>
                <th>Payment Mode</th>
                <td>{{ $method }}</td>
            </tr>
            <tr>
                <th>Payment Status</th>
                <td>PAID</td>
            </tr>
            <tr>
                <th>Payment Amount</th>
                <td>{{ $amount }}</td>
            </tr>
        </table>

        <div class="footer">
            <p style="color: red; font-weight: bold;">Please bring this receipt along with original ID proof to collect your certificate from the university.</p>
        </div>
    </div>
</body>

</html>
