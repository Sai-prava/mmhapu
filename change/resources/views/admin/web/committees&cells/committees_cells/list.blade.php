@extends('admin.layout.index')

@section('title')
    IQAC COMMITTEES & CELLS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage IQAC Committees & Cells</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.committesCells.add') }}">Add New Committees & Cells</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Type</th>
                    <th>Title</th>
                    <th>Name & Address</th>
                    <th>Designation</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($committeesCells as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->type }}</td>
                        <td>{{ $data->getTitle->title }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->designation }}</td>
                        <td>
                            <a class="btn btn-icon btn-primary"
                                href="{{ route('admin.committesCells.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.committesCells.delete', $data->id) }}')">Delete</a>
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
