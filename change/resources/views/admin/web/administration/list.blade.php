@extends('admin.layout.index')

@section('title')
    ADMINISTRATION SECTION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Administration</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.administration.add') }}">Add Administration</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Icon</th>
                    <th>Heading</th>
                    <th>Url</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($administration as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->icon}}</td>
                        <td>{{ $data->heading }}</td>
                        <td>{{ $data->url }}</td>
                        <td>
                            <a class="btn btn-icon btn-primary" href="{{ route('admin.administration.edit', $data->id) }}"><i
                                    class="far fa-edit"></i> Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.administration.delete', $data->id) }}')"><i
                                    class="fas fa-trash-alt"></i> Delete</a>
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
