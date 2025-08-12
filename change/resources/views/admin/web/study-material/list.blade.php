@extends('admin.layout.index')

@section('title')
    Study Materials
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Study Materials</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.studyMaterial.add') }}">Add Study Materials</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Team</th>
                    <th>List</th>
                    <th>PDF</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($study_material as $data)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $data->getTeam->name }}</td>
                        <td>{{ $data->list }}</td>
                        <td> <embed src="{{ asset('Team/'. $data->pdf) }}" type="application/pdf" width="100" height="80"> </td>
                         <td>
                            <a class="btn btn-icon btn-primary" href="{{ route('admin.studyMaterial.edit', $data->id) }}"><i
                                    class="far fa-edit"></i> Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.studyMaterial.delete', $data->id) }}')"><i
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
