@extends('admin.layout.index')
@section('title')
    Urgent Mode
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h5>Urgent Mode List</h5>
        <a href="{{ route('admin.urgentmodeAdd') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="card-body col-md-6">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Amount</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($urgent_mode as $mode)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mode->amount }}</td>
                        <td>
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <form action="" method="POST" style="display:inline-block;">
                                @csrf @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this urgent mode?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection