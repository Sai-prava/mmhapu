@extends('admin.layout.index')
@section('title')
    Certificate Name
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h5>Certificate Name List</h5>
            <a href="{{ route('admin.certificateNameAdd') }}" class="btn btn-primary">Add New</a>
        </div>
        <div class="card-body col-md-6">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($certificate_name as $index => $mode)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $mode->name }}</td>
                            <td>
                                <a href="{{ route('admin.certificateNameEdit', $mode->id) }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ route('admin.certificateNameDelete', $mode->id) }}" method="POST"
                                    style="display:inline-block;">
                                    <button class="btn btn-sm btn-danger"
                                        onclick="return confirm('Delete this Name?')">Delete</button>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
