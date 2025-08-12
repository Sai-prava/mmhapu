@extends('admin.layout.index')

@section('title')
    Certificate Name
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Certificate Name</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.certificateNameStore') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-lg-6 mb-3">
                        <label class="form-label">Name<span>*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ $certificate_name->name }}" placeholder="Enter Name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
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
