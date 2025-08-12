@extends('admin.layout.index')

@section('title')
    ACT & STATUS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Act & Status</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.actStatus.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $edit->title }}">
                        @error('title')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Date<span style="color: red">*</span></label>
                        <input type="date" class="form-control" name="date" placeholder="Enter Date" value="{{ $edit->date }}">
                        @error('date')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                    </div>
                   <div class="col-lg-6 mb-3">
                        <label for="email" class="form-label">File<span style="color: red">*</span></label>
                        <br>
                       <a href="{{ asset('uploads/ActStatus/' . $edit->file) }}" target="_blank" class="text-warning">{{$edit->file}}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
