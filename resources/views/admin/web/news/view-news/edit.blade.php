@extends('admin.layout.index')

@section('title')
    View News Paper
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit News Paper</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.view_news.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <input type="hidden" name="id" value="{{ $edit->id }}">
                    <div class="col-lg-6 mb-3">
                        <label for="notice_type" class="form-label">Title<span style="color: red">*</span></label>
                        <select class="form-control" name="newspaper_id">
                            <option value="">Select Options</option>
                            @foreach ($news as $data)
                                <option {{ $edit->newspaper_id == $data->id ? 'selected' : '' }}
                                    value="{{ $data->id }}">{{ $data->title }}</option>
                            @endforeach
                        </select>
                        @error('newspaper_id')
                            <span class="text-danger">{{ 'Newspaper field is required' }}</span>
                        @enderror
                        <img class="mt-2" src="{{ asset('uploads/news/' . $edit->image) }}" alt=""
                            width="100">
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="gallery_type" class="form-label">Photo<span style="color: red">*</span></label>
                        <input type="file" id="imagesUpload" accept="image/*" class="form-control" name="image">
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
