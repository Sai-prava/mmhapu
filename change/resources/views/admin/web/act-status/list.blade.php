@extends('admin.layout.index')

@section('title')
    ACT & STATUS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Act & Status</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.actStatus.add') }}">Add New Act & Status</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Ttile</th>
                    <th>Date</th>
                    <th>View/Download</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($actStatus as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->title }}</td>
                        <td>{{ date('d-m-Y', strtotime ($data->date ))}}</td>
                        <td>
                            <embed src="{{ asset('uploads/ActStatus/' . $data->file) }}" type="application/pdf"
                                width="100" height="80">
                        </td>
                        <td>
                            <a class="btn btn-icon btn-primary" href="{{ route('admin.actStatus.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.actStatus.delete', $data->id) }}')">Delete</a>
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
