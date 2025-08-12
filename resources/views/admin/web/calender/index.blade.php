@extends('admin.layout.index')

@section('title')
    Calender
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Calender</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.calender.add') }}">Add New Calender</a>
                </div>
            </div>
        </div>
        <div style="max-width: 100%; overflow-x:auto;">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Year</th>
                        <th>Calender</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($calenders as $data)
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $data->year }}</td>
                            <td><iframe src="{{ asset('uploads/calender/' . $data->calender) }}" frameborder="0" style="height: 100px; width:100px;"></iframe></td>
                            <td>
                                <a class="btn btn-icon btn-primary btn-sm"
                                    href="{{ route('admin.calender.edit', $data->id) }}">Edit</a>
                            </td>
                            <td>
                                <a class="btn btn-icon btn-danger btn-sm"
                                    onclick="confirmDelete('{{ route('admin.calender.delete', $data->id) }}')">Delete</a>
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
