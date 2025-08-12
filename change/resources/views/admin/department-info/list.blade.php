@extends('admin.layout.index')

@section('title')
    Department Info
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Department Info</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.Info.add') }}">Add New Department Info</a>

                </div>
            </div>
        </div>
        <div style="overflow-x: auto; max-width: 100%;">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Faculty Subcategory</th>
                        <th>Head</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($info as $data)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data->Subcategory->name }}</td>
                            <td>{{ $data->head }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->website }}</td>
                            <td>
                                <a class="btn btn-icon btn-primary btn-sm" href="{{ route('admin.Info.edit', $data->id) }}"><i
                                        class="far fa-edit"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-icon btn-danger btn-sm"
                                    onclick="confirmDelete('{{ route('admin.Info.delete', $data->id) }}')"><i
                                        class="fas fa-trash-alt"></i></a>
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

    <script>
        function confirmDelete(deleteUrl) {
            var isConfirmed = confirm("Are you sure you want to delete Department Info");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
