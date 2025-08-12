@extends('admin.layout.index')

@section('title')
    CAMPUS SECTION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit CAMPUS</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.campus.update')}}" method="post">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{$edit->id}}">
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Icon<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="icon" placeholder="Enter Title" value=" {{$edit->icon}}">
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Heading<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="heading" placeholder="Enter Title" value=" {{$edit->heading}}">
                        @error('heading')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                    <div class="col-lg-4 mb-3">
                        <label for="notice_type" class="form-label">Url Name(Example : /home)<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="url" placeholder="E.g. /Url-name" value="{{$edit->url}}">
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
