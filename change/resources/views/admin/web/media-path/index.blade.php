@extends('admin.layout.index')

@section('title')
    MEDIA PATH
@endsection

@section('content')
    <div class="main-body">
        <div class="page-wrapper">
            <div class="row">
                <div class="col-md-4">
                    <form class="needs-validation" novalidate action="{{ route('admin.Mediapath.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h5>Add Media Path</h5>
                            </div>
                            <div class="card-block pdng">
                                <!-- Form Start -->
                                <div class="form-group">
                                    <label for="title" class="form-label">Media Path<span>*</span></label>
                                    <input type="file" class="form-control" name="file" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-success"><i class="fas fa-check"></i>
                                    {{ __('btn_save') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <h5>Manage Media Path</h5>
                        </div>
                        <div class="card-block pdng">
                            <!-- [ Data table ] start -->
                            <div class="table-responsive">
                                <table id="basic-table" class="display table nowrap table-striped table-hover"
                                    style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Path</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($media_paths as $media_path)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>mmhapu.ac.in/{{ $media_path->path }}</td>
                                                <td> <a class="btn btn-danger btn-sm"
                                                        onclick="confirmDelete('{{ route('admin.Mediapath.delete', $media_path->id) }}')">Delete</a>
                                                </td>

                                            </tr>
                                            @php
                                                $i++;
                                            @endphp
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
