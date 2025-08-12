@extends('admin.layout.index')
@section('title')
    Gallery
@endsection
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Gallery</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.Viewgalleries.add') }}">Add New Image</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($all_gallery as $gallery)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $gallery->getGalleryTitle->title }}</td>
                        <td><img src="{{ asset('uploads/gallery/'. $gallery->image) }}" alt="" width="100"></td>
                        <td>
                            <a class="btn btn-icon btn-primary btn-sm" href="{{ route('admin.Viewgalleries.edit', $gallery->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger btn-sm"
                                onclick="confirmDelete('{{ route('admin.Viewgalleries.delete', $gallery->id) }}')">Delete</a>
                        </td>
                    </tr>
                    @php
                        $i++;
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(deleteUrl) {
            var isConfirmed = confirm("Are you sure you want to delete this item?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
