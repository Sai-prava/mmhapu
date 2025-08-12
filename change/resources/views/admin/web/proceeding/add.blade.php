@extends('admin.layout.index')

@section('title')
    PROCEEDINGS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Proceedings</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.proceedings.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <textarea class="form-control texteditor" name="title" cols="30" rows="10"> {{ old('title') }} </textarea>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                        @error('file')
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
