@extends('admin.layout.index')

@section('title')
    FAZIL
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add FAZIL</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.fazil.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name of the Madrasa<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="managment" class="form-label">Managment<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="managment" placeholder="Enter Managment"
                            value="{{ old('managment') }}">
                        @error('managment')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="regulating" class="form-label">Regulating Body<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="regulating" placeholder="Enter Regulating Body"
                            value="{{ old('regulating') }}">
                        @error('regulating')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="course" class="form-label">Course Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="course" placeholder="Enter course"
                            value="{{ old('course') }}">
                        @error('course')
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
                        <label for="District" class="form-label">District<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="district" placeholder="Enter District"
                            value="{{ old('district') }}">
                        @error('district')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Address" class="form-label">Address<span style="color: red">*</span></label>
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
                        <label for="Incharge" class="form-label">Incharge of Madrasa</label>
                        <input type="text" class="form-control" name="incharge" placeholder="Enter Incharge of Madrasa"
                            value="{{ old('incharge') }}">
                        @error('incharge')
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
                        <label for="Code" class="form-label">Code<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="code" placeholder="Enter Code"
                            value="{{ old('code') }}">
                        @error('code')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    {{-- <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" placeholder="Enter Document"
                            accept=".pdf" required>
                    </div> --}}
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
