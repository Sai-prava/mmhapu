@extends('admin.layout.index')

@section('title')
    TEAM
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Team</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.Team.add') }}">Add New Team</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Faculty Category Name</th>
                    <th>Faculty Subcategory Name</th>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Photo</th>
                    <th>Short description</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($all_team as $team)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ optional($team->FacultyCategory)->name ?? '' }}</td>
                        <td>{{ optional($team->FacultySubcategory)->name ?? '' }}</td>
                        <td>{{ $team->name }}</td>
                        <td>{{ $team->designation }}</td>
                        <td><img src="{{ asset('Team/' . $team->photo) }}" alt="" width="100"></td>
                        <td>{{ $team->s_description }}</td>

                        <td>
                            <a class="btn btn-icon btn-primary btn-sm" href="{{ route('admin.Team.edit', $team->id) }}"><i
                                    class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger btn-sm"
                                onclick="confirmDelete('{{ route('admin.Team.delete', $team->id) }}')"><i
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
