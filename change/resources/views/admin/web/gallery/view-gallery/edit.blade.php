@extends('admin.layout.index')

@section('title')
    Gallery
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit Image</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.Viewgalleries.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit_gallery->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="galleries_id">
                            <option value="">Select Options</option>
                            @foreach ($galleris as $gallery)
                                <option {{ $edit_gallery->galleries_id == $gallery->id ? 'selected' : '' }}
                                    value="{{ $gallery->id }}">{{ $gallery->title }}</option>
                            @endforeach
                        </select>
                        @error('galleries_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="gallery_type" class="form-label">Photo<span style="color: red">*</span></label>
                        <input type="file" id="imagesUpload" accept="image/*" class="form-control" name="image">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <img class="mt-2" src="{{ asset('uploads/gallery/' . $edit_gallery->image) }}" alt=""
                            width="100">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <img class="mt-2" src="gallery.png" alt="" id="gallery-pic" width="100">
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Update</button>
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