@extends('frontwebuser.layout.index')

@section('title')
TEAM
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
        <h3>Edit Team</h3>
    </div>
</div>
<div class="col-lg-12">
    <form action="{{route('frontwebuser.Team.update',$edit_team->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-3">
                <input type="hidden" name="id" value="{{$edit_team->id}}">
                <label for="notice_type" class="form-label">Name<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="name" value="{{$edit_team->name}}">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="notice_type" class="form-label">Designation<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="designation" value="{{$edit_team->designation}}">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="notice_type" class="form-label">Photo<span style="color: red">*</span></label>
                <input type="file" class="form-control" name="photo">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="notice_type" class="form-label">Facebook ID<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="facebook" value="{{$edit_team->facebook}}">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="notice_type" class="form-label">Instagram ID<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="instagram" value="{{$edit_team->instagram}}">
            </div>
            <div class="col-lg-6 mb-3">
                <label for="notice_type" class="form-label">X ID<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="x" value="{{$edit_team->x}}">
            </div>
            <div class="col-lg-12 mb-3">
                <label for="notice_type" class="form-label">Short description<span style="color: red">*</span></label>
                <input type="text" class="form-control" name="s_description" value="{{$edit_team->s_description}}">
            </div>
        </div>
        <div class="mb-3">
            <label for="notice_type" class="form-label">Details<span style="color: red">*</span></label>
            <textarea class="form-control texteditor" name="details"cols="30" rows="4">{{$edit_team->details}}</textarea>
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>

@endsection

