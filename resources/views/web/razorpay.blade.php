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
                                    <img src="https://mmhapu.ac.in/web/images/logo.jpeg" class="img-fluid"
                                        alt="Logo" style="max-width: 100px;">
                                </div>

                                <!-- Razorpay Payment Button -->
                                <!-- Price Breakdown Display -->
                                <div class="price-breakdown mb-3">
                                    <div class="row">
                                        <div class="col-md-8 mx-auto">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6 class="card-title text-center mb-3">Payment Details</h6>

                                                    <!-- Degree Information -->
                                                    <div class="text-center mb-3">
                                                        <strong>Degree: {{ $degree->name ?? 'N/A' }}</strong>
                                                    </div>

                                                    <!-- Price Breakdown -->
                                                    <div class="d-flex justify-content-between mb-2">
                                                        <span>Base Price:</span>
                                                        <span>₹{{ number_format($basePrice, 2) }}</span>
                                                    </div>
                                                    @if ($urgentFee > 0)
                                                        <div class="d-flex justify-content-between mb-2">
                                                            <span>Urgent Processing Fee:</span>
                                                            <span>₹{{ number_format($urgentFee, 2) }}</span>
                                                        </div>
                                                    @endif
                                                    <hr>
                                                    <div class="d-flex justify-content-between fw-bold fs-5">
                                                        <span>Total Amount:</span>
                                                        <span>₹{{ number_format($totalPrice, 2) }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <form class="razorpay-container" action="{{ route('razorpay.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="certificate_id" value="{{ $ID }}">
                                    <input type="hidden" name="order_id" value="{{ @$order->id }}">
                                    <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_live_undbzXL0KAgXPc"
                                        data-amount="{{ $totalPrice * 100 }}" data-currency="INR" data-order_id="{{ @$order->id }}"
                                        data-buttontext="Pay ₹{{ number_format($totalPrice, 2) }} Now" data-name="REGISTRAR, MMHAPU"
                                        data-description="Payment" data-image="https://mmhapu.ac.in/web/images/logo.jpeg" data-prefill.name="John Doe"
                                        data-prefill.email="john@example.com" data-theme.color="#F37254"></script>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- JavaScript for Price Calculations -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Get the pricing data from PHP variables
            const basePrice = {{ $basePrice }};
            const urgentFee = {{ $urgentFee }};
            const totalPrice = {{ $totalPrice }};
            const degreeName = "{{ $degree->name ?? 'N/A' }}";

            // Function to update price display
            function updatePriceDisplay() {
                const basePriceElement = document.querySelector(
                    '.price-breakdown .card-body .d-flex:first-child span:last-child');
                const urgentFeeElement = document.querySelector(
                    '.price-breakdown .card-body .d-flex:nth-child(2) span:last-child');
                const totalPriceElement = document.querySelector(
                    '.price-breakdown .card-body .d-flex:last-child span:last-child');

                if (basePriceElement) basePriceElement.textContent = '₹' + basePrice.toFixed(2);
                if (urgentFeeElement) urgentFeeElement.textContent = '₹' + urgentFee.toFixed(2);
                if (totalPriceElement) totalPriceElement.textContent = '₹' + totalPrice.toFixed(2);
            }

            // Initialize price display
            updatePriceDisplay();

            // Log pricing information for debugging
            console.log('Payment Details:', {
                degree: degreeName,
                basePrice: basePrice,
                urgentFee: urgentFee,
                totalPrice: totalPrice
            });
        });
    </script>
</body>

</html>
