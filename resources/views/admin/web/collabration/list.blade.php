@extends('admin.layout.index')

@section('title')
    COLLABRATION
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage IQAC Collabration</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.Collabration.add') }}">Add New Collabration</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Intitution</th>
                    <th>Description</th>
                    {{-- <th>Email</th>
                    <th>Contact</th> --}}
                    <th>Document</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($collabrations as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->intitution }}</td>
                        <td>{!! $data->description !!}</td>
                        <td>
                            <embed src="{{ asset('uploads/collabration/' . $data->document) }}" type="application/pdf" width="100" height="80">
                        </td>
                        <td>
                            <a class="btn btn-icon btn-primary btn-sm"
                                href="{{ route('admin.Collabration.edit', $data->id) }}"><i class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger btn-sm"
                                onclick="confirmDelete('{{ route('admin.Collabration.delete', $data->id) }}')"><i
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
            var isConfirmed = confirm("Are you sure you want to delete this item?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
