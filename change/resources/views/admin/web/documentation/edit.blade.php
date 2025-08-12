@extends('admin.layout.index')

@section('title')
    DOCUMENTATION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Documentation</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.documentation.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $documentationEdit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Button Text<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="btn_text"
                            value="{{ $documentationEdit->btn_text }}">
                        @error('btn_text')
                            <span class="text-danger"> {{ 'Button text field is required' }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="Color" class="form-label">Color<span style="color: red">*</span></label>
                        <input type="color" class="form-control" name="color" value="{{ $documentationEdit->color }}">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="file" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                        <a class="text-warning" href="{{ asset('uploads/Documentation/' . $documentationEdit->file) }}" target="_blank">{{ $documentationEdit->file }}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
