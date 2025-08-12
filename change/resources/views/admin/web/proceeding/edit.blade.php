@extends('admin.layout.index')

@section('title')
    PROCEEDINGS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Proceedings</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.proceedings.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="col-lg-12 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <textarea class="form-control texteditor" name="title" cols="30" rows="10"> {{ $edit->title }} </textarea>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                        <a class="text-warning" href="{{ asset('uploads/proceedings/' . $edit->file) }}" target="_blank"> {{ $edit->file }} </a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
