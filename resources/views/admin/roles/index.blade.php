@extends('admin.layout.index')

@section('title')
Roles
@endsection

@section('content')

<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Manage Roles</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a data-toggle="modal" data-target="#add_role_modal" class="btn btn-primary" href="">Add New Roles</a>
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th style="text-align: center;"> Name</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Role::all()  as $key => $role)
            <tr>
                <td>{{$role->id}}</td>
                <td style="text-align: center;"><b>{{$role->name}}</b></td>
                {{-- <td>{{$role->created_at}}</td> --}}
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="add_role_modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <form action="{{route('admin.roles.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add New Roles</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Name" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Add New Role</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

