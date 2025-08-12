@extends('admin.layout.index')

@section('title')
    FAZIL
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage FAZIL</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.fazil.add') }}">Add New FIZAL</a>
                </div>
            </div>
        </div>
        <div style="max-width: 100%; overflow-x:auto;">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name of the Madrasa</th>
                        <th>Management</th>
                        <th>Regulating Body</th>
                        <th>Course Name</th>
                        <th>Intake</th>
                        <th>District</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Incharge of Madrasa</th>
                        <th>Contact</th>
                        <th>Code</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($fazil as $data)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->managment }}</td>
                            <td>{{ $data->regulating }}</td>
                            <td>{{ $data->course }}</td>
                            <td>{{ $data->intake }}</td>
                            <td>{{ $data->district }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->incharge }}</td>
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->code }}</td>
                            <td>
                                <a class="btn btn-icon btn-primary btn-sm"
                                    href="{{ route('admin.fazil.edit', $data->id) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-icon btn-danger btn-sm"
                                    onclick="confirmDelete('{{ route('admin.fazil.delete', $data->id) }}')"><i
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
            var isConfirmed = confirm("Are you sure you want to delete this item?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
