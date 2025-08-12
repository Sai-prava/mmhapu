@include('prospect.dashboard.partials.registration')
@include('prospect.dashboard.partials.basic_information')
@include('prospect.dashboard.partials.academic_qualification_update')
@include('prospect.dashboard.partials.documents_uploaded_update')
@if(!Auth::user()->studentPaymentLastest())
<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('prospect.process_payment')}}" class="btn btn-primary text-right">Make Payment</a>
    </div>
</div>
<br>
@endif
<p><strong>Payment History </strong></p>

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
            <td>{{ Auth::user()->studentPaymentLastest()?Auth::user()->studentPaymentLastest()->razorpay_order_id:'' }}</td>
            <td>{{ Auth::user()->studentPaymentLastest()?Auth::user()->studentPaymentLastest()->razorpay_payment_id:'' }}</td>
            <td>{{Auth::user()->studentProfile ? Auth::user()->studentProfile->amount : @Auth::user()->entrance_fee->exam_fee}}</td>
        </tr>
    </tbody>
</table>
{{-- @if(!Auth::user()->centerMapping())
<br>
<div class="row">
    <div class="col-md-12 text-right">
        <a href="{{route('prospect.center_mapping.index')}}" class="btn btn-primary text-right">Add Center Mapping</a>
    </div>
</div>
@endif --}}
{{-- <br>
<p><strong>Center Mapping </strong></p>
<table class="table table-sm table-bordered">
    <thead>
        <tr>
            <th>Center</th>
            <th>Entrance Fee</th>
            <th>Exam Date</th>
            <th>Exam Time</th>
        </tr>
    </thead>
    <tbody >
   
        <tr>
            <td>{{ Auth::user()->centerMapping() ? Auth::user()->centerMapping()->center_id:'' }}</td>
            <td>{{ Auth::user()->centerMapping() && Auth::user()->centerMapping()->entrance_fee && Auth::user()->centerMapping()->entrance_fee->course ? Auth::user()->centerMapping()->entrance_fee->course->title :'' }}</td>
            <td>{{Auth::user()->centerMapping() ? Auth::user()->centerMapping()->exam_date : ''}}</td>
            <td>{{Auth::user()->centerMapping() ? Auth::user()->centerMapping()->exam_time : ''}}</td>
        </tr>
    </tbody>
</table> --}}