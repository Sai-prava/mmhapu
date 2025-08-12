@extends('admin.layout.index')

@section('title')
    Shift
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Shift</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.shift.update',$edit_shift->id)}}" method="post" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="row">
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="name" value="{{$edit_shift->name}}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Time From<span style="color: red">*</span></label>
                        <input type="time" class="form-control time" name="time_from" id="time" value="{{$edit_shift->time_from}}">
                    </div>
                    <div class="col-lg-12 mb-3">
                        <label for="notice_type" class="form-label">Time To<span style="color: red">*</span></label>
                        <input type="time" class="form-control time" name="time_to" id="time" value="{{$edit_shift->time_to}}">
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update<i class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
