@extends('admin.layout.index')

@section('title')
    COMMITTEES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage IQAC Committees</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.committees.add') }}">Add New Committees</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
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
                @foreach ($committees as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->name_address }}</td>
                        <td>{{ $data->designation }}</td>
                        <td>
                            <a class="btn btn-icon btn-primary"
                                href="{{ route('admin.committees.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.committees.delete', $data->id) }}')">Delete</a>
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
