@extends('admin.layout.index')

@section('title')
Add Entrance Fee Document Category
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Entrance Fee Document Category</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.document_category_entrance_fee.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="entrance_fee_id" value="{{$entranceFee->id}}">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Select Document Category</label>
                            <select name="document_category_id"  class="form-control" required>
                                <option value="">Select</option>
                                @foreach(App\Models\DocumentCategory::where('is_ex_service_man',0)->where('is_disabled_person',0)->get() as $documentCategory)
                                <option value="{{ $documentCategory->id }}">{{ $documentCategory->name }}</option>
                                @endforeach
                            </select>
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
                <th>Document Category Name</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\DocumentCategoryEntranceFee::all() as $key => $documentCategoryEntranceFee)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{@$documentCategoryEntranceFee->documentCategory ? @$documentCategoryEntranceFee->documentCategory->name : ''}}</td>

                <td>
                    <button data-toggle="modal" data-target="#edit_modal" 
                    document_category_id="{{$documentCategoryEntranceFee->document_category_id}}"
                     id="{{$documentCategoryEntranceFee->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                <td>
                    <form action="{{route('admin.document_category_entrance_fee.destroy',$documentCategoryEntranceFee->id)}}" method="POST">
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Document Category Entrance Fee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Select Document Category</label>
                        <select name="document_category_id" id="document_category_id"  class="form-control" required>
                            <option value="">Select</option>
                            @foreach(App\Models\DocumentCategory::where('is_ex_service_man',0)->where('is_disabled_person',0)->get() as $documentCategory)
                            <option value="{{ $documentCategory->id }}">{{ $documentCategory->name }}</option>
                            @endforeach
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
    $(document).ready(function() {
        $('.edit-btn').click(function() {
            let document_category_id = $(this).attr('document_category_id');
            let id = $(this).attr('id');
            $('#document_category_id').val(document_category_id);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.document_category_entrance_fee.update','')}}' +'/'+id);
        });
    });
</script>
@endsection