@extends('admin.layout.index')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Add New Image</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{route('admin.Viewgalleries.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="galleries_id">
                            <option value="">Select Options</option>
                            @foreach ($add_gallery as $gallery)
                                <option value="{{$gallery->id}}" {{ old('galleries_id') == $gallery->id ? 'selected' : '' }}>{{ $gallery->title }}</option>
                            @endforeach
                        </select>
                        @error('galleries_id')
                            <span class="text-danger">{{ 'The gallery title is required' }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="gallery_type" class="form-label">Photo<span style="color: red">*</span></label>
                        <input type="file" id="imagesUpload" accept="image/*" class="form-control" name="image">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <img src="gallery.png" alt="" id="gallery-pic" style="height: 100px">
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const galleryPic = document.getElementById("gallery-pic");
            const inputFile = document.getElementById("imagesUpload");

            inputFile.onchange = function() {
                if (inputFile.files && inputFile.files[0]) {
                    galleryPic.src = URL.createObjectURL(inputFile.files[0]);
                }
            }
        });
    </script>
@endsection
