@extends('admin.layout.index')

@section('title')
    Shift
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add New Shift</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.shift.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Time From<span style="color: red">*</span></label>
                        <input type="time" class="form-control time" name="time_from" id="time" value="{{ old('time_from') }}" required>
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Time To<span style="color: red">*</span></label>
                        <input type="time" class="form-control time" name="time_to" id="time" value="{{ old('time_to') }}" required>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
