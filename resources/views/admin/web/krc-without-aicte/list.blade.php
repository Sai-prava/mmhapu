@extends('admin.layout.index')

@section('title')
    KRC Without AICTE Recognition
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage KRC Without AICTE Recognition</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.krcWithoutAicte.add') }}">Add New KRC Without AICTE</a>
                </div>
            </div>
        </div>
        <div style="max-width: 100%; overflow-x: auto;">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File No.</th>
                        <th>Name of the KRCN</th>
                        <th>Management</th>
                        <th>Affiliating Body</th>
                        <th>Course Name</th>
                        <th>Intake</th>
                        <th>Session</th>
                        <th>District</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Incharge of KRCN</th>
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
                    @foreach ($WithoutAicte as $data)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data->file_no }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->management }}</td>
                            <td>{{ $data->affiliating }}</td>
                            <td>{{ $data->course_name }}</td>
                            <td>{{ $data->intake }}</td>
                            <td>{{ $data->session }}</td>
                            <td>{{ $data->district }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->incharge }}</td>
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->code }}</td>
                            <td>
                                <a class="btn btn-icon btn-primary btn-sm"
                                    href="{{ route('admin.krcWithoutAicte.edit', $data->id) }}"><i
                                        class="far fa-edit"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-icon btn-danger btn-sm"
                                    onclick="confirmDelete('{{ route('admin.krcWithoutAicte.delete', $data->id) }}')"><i
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
