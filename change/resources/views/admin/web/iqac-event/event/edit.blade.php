@extends('admin.layout.index')

@section('title')
    IQAC EVENT
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Edit IQAC Event</h5>
        </div>
        <div class="col-lg-12">
            <form action="{{ route('admin.IqacEvent.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $edit->id }}">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <label for="title" class="form-label">Title<span style="color: red">*</span></label>
                        <select name="title_id" class="form-control">
                            <option value="">Select Title</option>
                            @foreach ($eventTitles as $titles)
                                <option {{ $titles->id == $edit->title_id ? 'selected' : '' }} value="{{ $titles->id }}">
                                    {{ $titles->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-lg-6 mb-3">
                        <label for="image" class="form-label">Image<span style="color: red">*</span></label>
                        <input type="file" class="form-control" name="image[]" accept="image/*" multiple>
                    </div>
                    <div class="col-lg-12 mb-3">
                        @if ($edit->image)
                            @php
                                $images = json_decode($edit->image);
                                $imagesToShow = is_array($images) ? array_slice($images, 0, Str::length($edit)) : [];
                            @endphp

                            @if (!empty($imagesToShow))
                                @foreach ($imagesToShow as $image)
                                    <img src="{{ asset('IQAC Event/' . $image) }}" alt="Image" width="80"
                                        style="margin: 5px;">
                                @endforeach
                            @else
                                No images available
                            @endif
                        @else
                            No images available
                        @endif
                    </div>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
