@extends('admin.layout.index')

@section('title')
    Add Document Category
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Document Category</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.document_category.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>File Type <small>E.g. pdf, jpeg, (Write Extension in comma separated) </small></label>
                            <input name="file_type" type="text" class="form-control" placeholder="Enter File Type" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Is Required ? </label><br>
                            <input type="radio" name="is_required" value="1"> Yes
                            <input type="radio" name="is_required" checked value="0"> No
                        </div>
                        <div class="form-group col-md-6">
                            <label>For Disabled Person ? </label><br>
                            <input type="radio" name="is_disabled_person" value="1"> Yes
                            <input type="radio" name="is_disabled_person" checked value="0"> No
                        </div>
                        <div class="form-group col-md-6">
                            <label>For Ex-Service Man ? </label><br>
                            <input type="radio" name="is_ex_service_man" value="1"> Yes
                            <input type="radio" name="is_ex_service_man" checked value="0"> No
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Create <i class="icon-paperplane ml-2"></i></button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Field Type</th>
                <th>Is Required</th>
                <th>For Disabled Person</th>
                <th>For Ex-Service Man</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\DocumentCategory::all()  as $key => $documentCategory)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$documentCategory->name}}</td>
                <td>{{$documentCategory->file_type}}</td>
                <td>{{$documentCategory->is_required ? 'Yes' : 'No'}}</td>
                <td>{{$documentCategory->is_disabled_person ? 'Yes' : 'No'}}</td>
                <td>{{$documentCategory->is_ex_service_man ? 'Yes' : 'No'}}</td>
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" 
                        name="{{$documentCategory->name}}"  is_disabled_person="{{$documentCategory->is_disabled_person}}" 
                        file_type="{{$documentCategory->file_type}}" is_required="{{$documentCategory->is_required}}" 
                         id="{{$documentCategory->id}}"  is_ex_service_man="{{$documentCategory->is_ex_service_man}}" 
                         class="edit-btn btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{route('admin.document_category.destroy',$documentCategory->id)}}" method="POST">
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

<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Document Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    
                    <div class="form-group ">
                        <label>Name</label>
                        <input name="name" id="name" type="text" class="form-control" placeholder="Enter Name" required>
                    </div>
                    <div class="form-group ">
                        <label>File Type <small>E.g. pdf, jpeg, (Write Extension in comma separated) </small></label>
                        <input name="file_type" id="file_type" type="text" class="form-control" placeholder="Enter File Type" required>
                    </div>
                    <div class="form-group">
                        <label>Is Required?</label>
                        <select  name="is_required" id="is_required" class="form-control" required>
                            <option value="" selected disabled>Select State</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>For Disabled Person?</label>
                        <select  name="is_disabled_person" id="is_disabled_person" class="form-control" required>
                            <option value="" selected disabled>Choose</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>For Ex-Service Man?</label>
                        <select  name="is_ex_service_man" id="is_ex_service_man" class="form-control" required>
                            <option value="" selected disabled>Choose</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let id = $(this).attr('id');
            let name = $(this).attr('name');
            let file_type = $(this).attr('file_type');
            let is_required = $(this).attr('is_required');
            let is_disabled_person = $(this).attr('is_disabled_person');
            let is_ex_service_man = $(this).attr('is_disabled_person');
            $('#name').val(name);
            $('#file_type').val(file_type);
            $("#is_required option[value='" + is_required + "']").prop("selected", true);
            $("#is_disabled_person option[value='" + is_disabled_person + "']").prop("selected", true);
            $("#is_ex_service_man option[value='" + is_ex_service_man + "']").prop("selected", true);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.document_category.update','')}}' +'/'+id);
        });
    });
</script>
@endsection