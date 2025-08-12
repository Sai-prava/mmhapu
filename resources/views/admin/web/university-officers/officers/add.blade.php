@extends('admin.layout.index')

@section('title')
    University Administration
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add University Administration</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.university_officers.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="title_id">
                            <option value="">Choose Title</option>
                            @foreach ($add as $title)
                                <option value=" {{ $title->id }} " {{ old('title_id') == $title->id ? 'selected' : '' }}> {{ $title->title }} </option>
                            @endforeach
                        </select>
                        @error('title_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="designation" class="form-label">Designation<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="designation" placeholder="Enter Designation"
                            value="{{ old('designation') }}">
                        @error('designation')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name"
                            value="{{ old('name') }}">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Image<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="image" accept=".jpg, .jpeg, .png, .gif">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Resume<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="resume" accept=".pdf">
                        @error('resume')
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
