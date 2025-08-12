@extends('admin.layout.index')

@section('title')
    QUICK LINK
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Quick Link</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Quicklink.update') }}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit_quicklink->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title"
                            value=" {{ $edit_quicklink->title }}">
                        @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Url Name(Example : /home)<span
                                style="color: red">*</span></label>
                        <input type="text" class="form-control" name="url" placeholder="E.g. /Url-name"
                            value="{{ $edit_quicklink->url }}">
                        @error('url')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
