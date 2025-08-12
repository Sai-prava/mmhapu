@extends('admin.layout.index')

@section('title')
Manage Boards
@endsection

@section('content')

<div class="card">

    <div class="card-header header-elements-inline">
        <h5 class="card-title">Manage Boards</h5>
        <div class="header-elements">
            <div class="list-icons">
                <button data-toggle="modal" data-target="#add_exam_modal" class="edit-btn btn btn-primary text-right">Add New Board</button>
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Board Name</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Board::all() as $key => $board)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$board->name}}</td>
                <td>
                    <a href="{{route('admin.board.edit',$board->id)}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="{{route('admin.board.destroy',$board->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="add_exam_modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <form action="{{route('admin.board.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add New Exam</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Board Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Board Name" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add New Exam</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
