@extends('admin.layout.index')

@section('title')
    UNIVERSITY AUTHORITIES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage University Authorities</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.authority.add') }}">Add New Authority</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ttile</th>
                    <th>Position</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($authorityList as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>
                            @if ($data->getTitle)
                                {{ $data->getTitle->title }}
                            @endif
                        </td>
                        <td>
                            @if ($data->Position)
                                {{ $data->Position->position }}
                            @endif
                        </td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->designation }}</td>
                        <td>
                            <a class="btn btn-icon btn-primary" href="{{ route('admin.authority.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.authority.delete', $data->id) }}')">Delete</a>
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
