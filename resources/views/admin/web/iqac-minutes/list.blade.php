@extends('admin.layout.index')

@section('title')
    IQAC MINUTES
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage IQAC Minutes</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.minutes.add') }}">Add New IQAC Minutes</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>IQAC Minutes</th>
                    <th>Document</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($minutes as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{!! $data->iqac_minute !!}</td>
                        <td> <embed src=" {{ asset('uploads/minutes/' . $data->document) }} " type="application/pdf" width="100" height="80"> </td>
                        <td>
                            <a class="btn btn-icon btn-primary"
                                href="{{ route('admin.minutes.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.minutes.delete', $data->id) }}')">Delete</a>
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
