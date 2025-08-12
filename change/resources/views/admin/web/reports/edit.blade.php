@extends('admin.layout.index')

@section('title')
    Annual Reports
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Annual Reports</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.reports.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Report Type<span style="color: red">*</span></label>
                        <select name="type" class="form-control">
                            <option value="">---Select---</option>
                            <option value="Bilingual" {{ $edit->type == 'Bilingual' ? 'selected' : '' }}>Bilingual</option>
                            <option value="English" {{ $edit->type == 'English' ? 'selected' : '' }}>English</option>
                            <option value="Hindi" {{ $edit->type == 'Hindi' ? 'selected' : '' }}>Hindi</option>
                        </select>
                        @error('type')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value=" {{ $edit->name }} ">
                        @error('name')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="file" class="form-label">File<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="file" accept=".pdf">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="file" class="form-label">File<span style="color: red">*</span></label>
                        <br>
                        <a class="text-warning" href="{{ asset('uploads/reports/' . $edit->file) }}" target="_blank">{{ $edit->file }}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection
