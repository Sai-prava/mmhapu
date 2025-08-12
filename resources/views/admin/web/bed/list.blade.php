@extends('admin.layout.index')

@section('title')
    B.Ed
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage B.Ed</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.bed.add') }}">Add New B.Ed</a>
                </div>
            </div>
        </div>
        <div style="max-width: 100%; overflow-x: auto;">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>File No.</th>
                        <th>Name of B.Ed Colleges</th>
                        <th>Management</th>
                        <th>Affiliting Body</th>
                        <th>Course Name</th>
                        <th>Intake</th>
                        <th>District</th>
                        <th>Address</th>
                        <th>Email</th>
                        <th>Website</th>
                        <th>Director/Princepal</th>
                        <th>Contact No.</th>
                        <th>Code</th>
                        <th>NCTE</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($Bed as $data)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data->file_no }}</td>
                            <td>{{ $data->college_name }}</td>
                            <td>{{ $data->management }}</td>
                            <td>{{ $data->affiliting }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->intake }}</td>
                            <td>{{ $data->district }}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->website }}</td>
                            <td>{{ $data->director }}</td>
                            <td>{{ $data->contact }}</td>
                            <td>{{ $data->code }}</td>
                            <td>
                                <embed src="{{ asset('uploads/bed/' . $data->resume) }}" type="application/pdf"
                                    width="100" height="80">
                            </td>
                            <td>
                                <a class="btn btn-icon btn-primary btn-sm"
                                    href="{{ route('admin.bed.edit', $data->id) }}"><i class="far fa-edit"></i></a>
                            </td>
                            <td>
                                <a class="btn btn-icon btn-danger btn-sm"
                                    onclick="confirmDelete('{{ route('admin.bed.delete', $data->id) }}')"><i
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
