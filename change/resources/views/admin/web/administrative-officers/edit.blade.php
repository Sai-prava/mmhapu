@extends('admin.layout.index')

@section('title')
    Statutory Administrative Officers
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Statutory Administrative Officers</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.administrative_officers.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $officersEdit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="designation" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation"
                            value="{{ $officersEdit->designation }}">
                            @error('designation')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $officersEdit->name }}">
                        @error('name')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">Email<span style="color: red">*</span></label>
                        <input type="email" class="form-control" name="email" value="{{ $officersEdit->email }}">
                        @error('email')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="contact" class="form-label">Contact<span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="contact" value="{{ $officersEdit->contact }}">
                        @error('contact')
                        <span class="text-danger"> {{ $message }} </span>
                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Document<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" accept=".pdf">
                        <a class="text-warning" href="{{ asset('uploads/administrative/' . $officersEdit->resume) }}" target="_blank"> {{ $officersEdit->resume }} </a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
