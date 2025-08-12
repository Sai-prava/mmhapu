@extends('admin.layout.index')

@section('title')
    ATTENDANCE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Attendance</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.elearning.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="title_id">
                            <option value="">Choose Title</option>
                            @foreach ($titles as $title)
                                <option value=" {{ $title->id }} " {{ $title->id == $edit->title_id ? 'selected' : '' }}>
                                    {{ $title->title }} </option>
                            @endforeach
                        </select>
                        @error('title_id')
                            <span class="text-danger"> {{ 'Title field is required' }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{ $edit->name }}">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">File<span style="color: red">*</span></label>
                        <br>
                        <a class="text-warning" href="{{ asset('uploads/eLearning/' . $edit->file) }}" target="_blank"> {{ $edit->file }} </a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
