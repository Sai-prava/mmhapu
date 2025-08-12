@extends('admin.layout.index')

@section('title')
    B.Ed
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit B.Ed</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.bed.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $bedEdit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="File No." class="form-label">File No.</label>
                        <input type="text" class="form-control" name="file_no" value="{{ $bedEdit->file_no }}">
                        <!-- @error('file_no')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror -->
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Name of B.Ed Colleges" class="form-label">Name of B.Ed Colleges<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" name="college_name" value="{{ $bedEdit->college_name }}">
                        @error('college_name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="management" class="form-label">Management<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="management" value="{{ $bedEdit->management }}">
                        @error('management')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Affiliting" class="form-label">Affiliting Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="affiliting" value="{{ $bedEdit->affiliting }}">
                        @error('affiliting')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $bedEdit->name }}">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="intake" class="form-label">Intake<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="intake" value="{{ $bedEdit->intake }}">
                        @error('intake')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="district" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" value="{{ $bedEdit->district }}">
                        @error('district')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="address" class="form-label">Address<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="address" value="{{ $bedEdit->address }}">
                        @error('address')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" value="{{ $bedEdit->email }}">
                        <!-- @error('email')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror -->
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="website" class="form-label">Website</label>
                        <input type="text" class="form-control" name="website"value="{{ $bedEdit->website }}">
                        <!-- @error('website')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror -->
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="director" class="form-label">Director/Princepal</label>
                        <input type="text" class="form-control" name="director" value="{{ $bedEdit->director }}">
                        @error('director')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact</label>
                        <input type="number" class="form-control" name="contact" value="{{ $bedEdit->contact }}">
                        @error('contact')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" value="{{ $bedEdit->code }}">
                        @error('code')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document</label>
                        <input type="file" class="form-control" name="resume" accept=".pdf">
                        <a class="text-warning" href="{{ asset('uploads/bed/' . $bedEdit->resume) }}" target="_blank">{{$bedEdit->resume}}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
