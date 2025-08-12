@extends('admin.layout.index')

@section('title')
    SYLLABUS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Syllabus</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.syllabus.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="title_id">
                            <option value="">Choose Title</option>
                            @foreach ($add as $title)
                                <option value=" {{ $title->id }} " {{ old('title_id') == $title->id ? 'selected' : '' }}>
                                    {{ $title->title }} </option>
                            @endforeach
                        </select>
                        @error('title_id')
                            <span class="text-danger"> {{ 'Title field is required' }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"  value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                        @error('file')
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
