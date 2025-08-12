@extends('admin.layout.index')

@section('title')
    Application For Online Certificate
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Certificate</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.certificateUpdate') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $certificate->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" value="{{ $certificate->name }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Roll No.</label>
                        <input type="text" class="form-control" value="{{ $certificate->roll_no }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Registration No.</label>
                        <input type="text" class="form-control" value="{{ $certificate->reg_no }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Father Name</label>
                        <input type="text" class="form-control" value="{{ $certificate->father_name }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Apaar ID</label>
                        <input type="text" class="form-control" value="{{ $certificate->apaar_id }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="management" class="form-label">
                            Document <span class="text-danger">(Aadhaar Card, Passport, PAN Card) </span>
                        </label>
                        <br>
                        <a href="{{ asset('uploads/certificates/' . $certificate->document) }}" target="blank"
                            class="">
                            <i class="fas fa-file-alt fa-3x" style="color: #ff0000; margin-left: 15px;"></i>
                        </a>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="regulating" class="form-label">Request No.</label>
                        <input type="text" class="form-control" value="{{ $certificate->request_id }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Request for</label>
                        <input type="text" class="form-control" value="{{ $certificate->change_type }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Course Category</label>
                        <input type="text" class="form-control" value="{{ $certificate->getCourseCategory->name }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Course</label>
                        <input type="text" class="form-control" value="{{ $certificate->course }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Session</label>
                        <input type="text" class="form-control" value="{{ $certificate->session }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Applied Certificate</label>
                        <input type="text" class="form-control" value="{{ $certificate->certificate }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Date of Applied</label>
                        <input type="text" class="form-control" value="{{ $certificate->recive_degree }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="District" class="form-label">Payment Status</label>
                        <br>
                        @if ($certificate->payment == 'completed')
                            <span class="badge bg-success">Completed</span>
                        @else
                            <span class="badge bg-danger">Pending</span>
                        @endif
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Address" class="form-label">Transaction Number</label>
                        <input type="text" class="form-control"
                            value="{{ optional($certificate->getPayment)->transaction_number ?? 'N/A' }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Transation Date</label>
                        <input type="email" class="form-control"
                            value="{{ optional($certificate->getPayment)->transation_date ?? 'N/A' }}" disabled>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Incharge" class="form-label">Payment Method</label>
                        <input type="text" class="form-control"
                            value="{{ optional($certificate->getPayment)->method ?? 'N/A' }}" disabled>
                    </div>
                    @foreach ($certificate_document as $data)
                        <div class="col-lg-6 mb-3">
                            <label for="management" class="form-label">
                                Request for <span class="text-danger">(Documents) </span>
                            </label>
                            <br>
                            <a href="{{ asset('uploads/certificate_documents/' . $data->documents) }}" target="blank"
                                class="">
                                <i class="fas fa-file-alt fa-3x" style="color: #ff0000; margin-left: 15px;"></i>
                            </a>
                        </div>
                    @endforeach
                    <div class="col-lg-6 mb-3">
                        <label class="form-label d-block">Certificate Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="certificate_status" value="0"
                                {{ $certificate->certificate_status == 0 ? 'checked' : '' }}>
                            <label class="form-check-label" for="pending">Pending</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="certificate_status" value="1"
                                {{ $certificate->certificate_status == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="issued">Issued</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
