@extends('admin.layout.index')

@section('title')
    FACULTY-SUBCATEGORY
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Faculty Category</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.faculty.subcategory.add') }}">Add Subcategory</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Faculty Category Name</th>
                    <th>Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($subcategories as $subcategory)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $subcategory->FacultyCategory->name }}</td>
                        <td>{{ $subcategory->name }}</td>
                        <td>{{ $subcategory->phone }}</td>
                        <td>{{ $subcategory->email }}</td>
                        <td>
                            <a class="btn btn-icon btn-primary" href="{{ route('admin.faculty.subcategory.edit', $subcategory->id) }}"><i
                                    class="far fa-edit"></i> Edit</a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger"
                                onclick="confirmDelete('{{ route('admin.faculty.subcategory.delete', $subcategory->id) }}')"><i
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
            var isConfirmed = confirm("Are you sure you want to delete Faculty Subcategory?");
            if (isConfirmed) {
                window.location.href = deleteUrl;
            } else {

                alert("Deletion canceled");
            }
        }
    </script>
@endsection
