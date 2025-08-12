@extends('admin.layout.index')

@section('title')
    Degree Certificate
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Degree Certificate</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.certificate.add') }}">Add New Degree Certificate</a>
                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Degree</th>
                    <th>Change type</th>
                    <th>Document name</th>
                    <th>Price</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($certificates as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->degree->name ?? 'N/A' }}
                        </td>

                        <td>{{ $data->change_type }}</td>
                        <td>
                            @if ($data->documents->isNotEmpty())
                                {{ implode(', ', $data->documents->pluck('name')->toArray()) }}
                            @else
                                No Documents
                            @endif
                        </td>
                        <td>{{ $data->price }}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="{{ route('admin.certificate.edit', $data->id) }}">Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-danger btn-sm"
                                onclick="confirmDelete('{{ route('admin.certificate.delete', $data->id) }}')">Delete</a>
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
