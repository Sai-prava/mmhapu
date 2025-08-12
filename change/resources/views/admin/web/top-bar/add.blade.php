@extends('admin.layout.index')

@section('title')
    TOPBAR
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Topbar</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.Topbar.store')}}" method="post">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ old('title') }}">
                                    @error('title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Url Name(Example : /home)<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="url" placeholder="E.g. /Url-name"
                            value="{{ old('url') }}">
                                    @error('url')
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
