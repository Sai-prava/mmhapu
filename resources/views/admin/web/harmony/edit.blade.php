@extends('admin.layout.index')

@section('title')
    Harmony
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Harmony</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.harmony.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $harmonyEdit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value=" {{ $harmonyEdit->name }} ">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="file" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                        <a class="text-warning" href="{{ asset('uploads/harmony/' . $harmonyEdit->file) }}" target="_blank">{{ $harmonyEdit->file }}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
