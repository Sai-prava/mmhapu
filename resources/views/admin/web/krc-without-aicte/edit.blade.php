@extends('admin.layout.index')

@section('title')
    KRC Without AICTE Recognition
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit KRC Without AICTE Recognition</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.krcWithoutAicte.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $WithoutAicteEdit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="file_no" class="form-label">File No.</label>
                        <input type="text" class="form-control" name="file_no" value="{{ $WithoutAicteEdit->file_no }}" >
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name of the KRCN<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $WithoutAicteEdit->name }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="management" class="form-label">Managment<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="management" value="{{ $WithoutAicteEdit->management }}"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="affiliating" class="form-label">Affiliting Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="affiliating" value="{{ $WithoutAicteEdit->affiliating }}"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course_name" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="course_name" value="{{ $WithoutAicteEdit->course_name }}"
                            required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" value="{{ $WithoutAicteEdit->intake }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Session" class="form-label">Session</label>
                        <input type="text" class="form-control" name="session" value="{{ $WithoutAicteEdit->session }}" >
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="district" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" value="{{ $WithoutAicteEdit->district }}" required>
                    </div>

                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $WithoutAicteEdit->email }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="incharge" class="form-label">Incharge of KRCN</label>
                        <input type="text" class="form-control" name="incharge" value="{{ $WithoutAicteEdit->incharge }}"
                            >
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" name="contact" value="{{ $WithoutAicteEdit->contact }}" >
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" value="{{ $WithoutAicteEdit->code }}" required>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="address" class="form-label">Address<span style="color: red">*</span></label>
                        <textarea name="address" cols="30" rows="4" class="form-control">{{ $WithoutAicteEdit->address }}</textarea>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
