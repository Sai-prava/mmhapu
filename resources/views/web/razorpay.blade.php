<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MMHAPU, Bihar</title>

    <!-- External CSS & JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
        }

        .payment-container {
            margin-top: 50px;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #343a40;
            color: white;
            font-size: 1.5rem;
            text-align: center;
        }

        .razorpay-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        /* Custom Styling for the Razorpay Button */
        .razorpay-payment-button {
            background-color: #F37254 !important;
            color: white !important;
            border: none !important;
            font-size: 1.2rem;
            padding: 15px 30px;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .razorpay-payment-button:hover {
            background-color: #d35445 !important;
            transform: scale(1.05);
        }
    </style>
</head>

<body>
    <div id="app">
        <main class="py-5">
            <div class="container payment-container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <!-- Displaying Error or Success Message -->
                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Error!</strong> {{ $message }}
                            </div>
                        @endif
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <strong>Success!</strong> {{ $message }}
                            </div>
                        @endif

                        <!-- Payment Card -->
                        <div class="card">
                            <div class="card-header">
                                Proceed for Payment
                            </div>
                            <div class="card-body">
                                <div class="text-center mb-4">
                                    <img src="https://mmhapu.ac.in/web/images/logo.jpeg"
                                        class="img-fluid" alt="Logo" style="max-width: 100px;">
                                </div>

                                <!-- Razorpay Payment Button -->
                                <form class="razorpay-container" action="{{ route('razorpay.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="certificate_id" value="{{ $ID }}">
                                    <input type="hidden" name="order_id" value="{{@$order->id}}">
                                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_live_undbzXL0KAgXPc" data-amount="{{ $degreeCertificate->price *100 }}"
                                        data-currency="INR" data-order_id="{{@$order->id}}" data-buttontext="Pay {{ $degreeCertificate->price }} Now" data-name="REGISTRAR, MMHAPU" data-description="Payment"
                                        data-image="https://mmhapu.ac.in/web/images/logo.jpeg" data-prefill.name="John Doe"
                                        data-prefill.email="john@example.com" data-theme.color="#F37254"></script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>