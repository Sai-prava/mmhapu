@extends('admin.layout.index')

@section('title')
    Calender
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Calender</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.calender.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="name" class="form-label">Year <span style="color: red">*</span></label>
                        <input type="number" class="form-control" name="year" placeholder="Enter Year" accept=".pdf"
                            value="{{ $edit->year }}">
                        @error('year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="document" class="form-label">Calender<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="calender" placeholder="Enter Calender"
                            accept=".pdf">
                            <a href="{{ asset('uploads/calender/' . $edit->calender) }}" target="_blank" class="text-danger">{{ $edit->calender }}</a>
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
