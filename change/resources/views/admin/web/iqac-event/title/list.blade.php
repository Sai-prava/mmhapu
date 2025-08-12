@extends('admin.layout.index')

@section('title')
    IQAC EVENT TITLE
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage IQAC Event Title</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{ route('admin.IqacEventTitle.add') }}">Add New Event Title</a>

                </div>
            </div>
        </div>
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Year</th>
                    <th>Image</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $i = 1;
                @endphp
                @foreach ($Titles as $title)
                    <tr>
                        <td>{{ $i }}</td>
                        <td>{{ $title->title }}</td>
                        <td>
                            @if ($title->year)
                            {{ $title->year->year }}
                            @endif
                        </td>
                        <td><img src="{{ asset('IQAC Event/'. $title->image) }}" alt="" width="100"></td>
                        <td>
                            <a class="btn btn-icon btn-primary btn-sm" href="{{ route('admin.IqacEventTitle.edit', $title->id) }}"><i
                                    class="far fa-edit"></i></a>
                        </td>
                        <td>
                            <a class="btn btn-icon btn-danger btn-sm"
                                onclick="confirmDelete('{{ route('admin.IqacEventTitle.delete', $title->id) }}')"><i
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
