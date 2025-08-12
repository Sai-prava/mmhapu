@extends('admin.layout.index')

@section('title')
    MOUs
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage MOUs</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.mous.add') }}">Add New MOUs</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name Of The Institute</th>
                    <th>Collaborative Department In The University</th>
                    <th>Country</th>
                    <th>Dated/ Year</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($mous as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->institute }}</td>
                        <td>{{ $data->collaborative }}</td>
                        <td>{{ $data->country }}</td>
                        <td>{{ $data->dated }}</td>
                        <td>
                            <a class="btn btn-icon btn-primary"
                                href="{{ route('admin.mous.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.mous.delete', $data->id) }}')">Delete</a>
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
