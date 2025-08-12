<table class="table table-sm table-bordered">
    <thead>
        <tr>
            <th>Order ID</th>
            <th>Payment ID</th>
            <th>Fees</th>
        </tr>
    </thead>
    <tbody >
   
        <tr>
            <td>{{$prospect->studentPaymentLastest()?@$prospect->studentPaymentLastest()->razorpay_order_id:'' }}</td>
            <td>{{$prospect->studentPaymentLastest()?@$prospect->studentPaymentLastest()->razorpay_payment_id:'' }}</td>
            <td>{{$prospect->studentProfile ?$prospect->studentProfile->amount :  @$prospect->entrance_fee->exam_fee}}</td>
        </tr>
    </tbody>
</table>