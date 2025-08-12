@extends('admin.layout.index')

@section('title')
    B.Ed
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add B.Ed</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.bed.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="File No." class="form-label">File No.</label>
                        <input type="text" class="form-control" name="file_no" placeholder="Enter File No."
                            value="{{ old('file_no') }}">
                        @error('file_no')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Name of B.Ed Colleges" class="form-label">Name of B.Ed Colleges<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" name="college_name"
                            placeholder="Enter Name of B.Ed Colleges" value="{{ old('college_name') }}">
                        @error('college_name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="management" class="form-label">Management<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="management" placeholder="Enter Management"
                            value="{{ old('management') }}">
                        @error('management')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Affiliting" class="form-label">Affiliting Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="affiliting" placeholder="Enter Affiliting Body"
                            value="{{ old('affiliting') }}">
                        @error('affiliting')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Course Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" placeholder="Enter Intake"
                            value="{{ old('intake') }}">
                        @error('intake')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="district" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" placeholder="Enter District"
                            value="{{ old('district') }}">
                        @error('district')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="address" class="form-label">Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="address" placeholder="Enter Address"
                            value="{{ old('address') }}">
                        @error('address')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email"
                            value="{{ old('email') }}">
                        @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control" name="website" placeholder="Enter Website"
                            value="{{ old('website') }}">
                        @error('website')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="director" class="form-label">Director/Princepal</label>
                        <input type="text" class="form-control" name="director"
                            placeholder="Enter Director/Princepal" value="{{ old('director') }}">
                        @error('director')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" name="contact" placeholder="Enter Contact"
                            value="{{ old('contact') }}">
                        @error('contact')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" placeholder="Enter Code"
                            value="{{ old('code') }}">
                        @error('code')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="AICTE" class="form-label">AICTE</label>
                        <input type="file" class="form-control" name="resume" placeholder="Enter AICTE"
                            accept=".pdf" value="{{ old('resume') }}">
                        @error('resume')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
