<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    function openRazorPayment(data) {
        var options = {
            "key": data.key_id, // Enter the Key ID generated from the Dashboard
            "amount": data.amount, // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
            "currency": "INR",
            "name": data.merchant_name, //your business name
            "description": "Test Transaction",
            "image": "{{asset('uploads/logo/logo.png')}}",
            "order_id": data.order_id, //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
            "callback_url": "{{route('razor.callback')}}",
            "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information especially their phone number
                "name": data.name, //your customer's name
                "email": data.email,
                "contact": data.phone //Provide the customer's phone number for better conversion rates 
            },
            "notes": {
                "address": "Admin Profile Changes"
            },
            "theme": {
                "color": "#3399cc"
            }
        };
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>