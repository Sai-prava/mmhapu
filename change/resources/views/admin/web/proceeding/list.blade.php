@extends('admin.layout.index')

@section('title')
    PROCEEDINGS
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Proceedings</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.proceedings.add') }}">Add New Proceedings</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>File</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($proceedings as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{!! $data->title !!}</td>
                        <td>
                            <embed src="{{ asset('uploads/proceedings/' . $data->file) }}" type="application/pdf" width="100"
                                height="80">
                        </td>
                        <td>
                            <a class="btn btn-icon btn-primary" href="{{ route('admin.proceedings.edit', $data->id) }}"><i
                                    class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.proceedings.delete', $data->id) }}')"><i
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

    <script>
        function confirmDelete(deleteUrl) {
            var isConfirmed = confirm("Are you sure you want to delete this item ?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
