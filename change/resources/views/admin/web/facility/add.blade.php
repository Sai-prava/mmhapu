@extends('admin.layout.index')

@section('title')
    Facility
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add Facility</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.facility.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <input type="text" class="form-control" name="title" placeholder="Enter Title"
                            value="{{ old('title') }}">
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="images" class="form-label">Images<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="images[]" accept="image/*" multiple>
                        @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="description" class="form-label">Description<span style="color: red">*</span></label>
                            <textarea class="form-control" name="description" id="Editor">{{ old('position') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('web/js/ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('Editor');
    </script>
@endsection
