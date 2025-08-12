@extends('frontwebuser.layout.index')

@section('title')
Manage Menus
@endsection

@section('content')

<div class="card">

    <div class="card-header header-elements-inline">
        <h5 class="card-title">Manage Menu</h5>
        <div class="header-elements">
            <div class="list-icons">
                <button data-toggle="modal" data-target="#add-menu-modal" class="edit-btn btn btn-primary text-right">Add Menu</button>
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Menu Name</th>
                <th>Menu Url Name</th>
                <th>Meta Title</th>
                <th>Parent Menu</th>
                <th>Display Order</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Menu::all()  as $key => $menu)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$menu->name}}</td>
                <td>{{$menu->url}}</td>
                <td>{{$menu->meta_title}}</td>
                <td>{{@$menu->parentMenu->name}}</td>
                <td>{{$menu->display_order}}</td>
                <td>
                    <a href="{{route('frontwebuser.menu.edit',$menu->id)}}" class="btn btn-primary btn-sm">Edit</a>
                </td>
                <td>
                    <form action="{{route('frontwebuser.menu.destroy',$menu->id)}}" method="POST">
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

<div id="add-menu-modal" class="modal fade">
    <div class="modal-dialog">
        <form id="addMenuForm" enctype="multipart/form-data" >
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add New Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Menu Name</label>
                        <input name="name" type="text" class="form-control" placeholder="Enter Menu Name" required>
                    </div>
                    <div class="form-group">
                        <label>Menu Url Name<small>(Example : /home)</small></label>
                        <input name="url" type="text" class="form-control" placeholder="E.g. /url-name" required>
                    </div>
                    <div class="form-group">
                        <label>Meta Title</label>
                        <input name="meta_title" type="text" class="form-control" placeholder="Enter Meta Title" required>
                    </div>
                    <div class="form-group">
                        <label>Display Order</label>
                        <input name="display_order" type="number" min="1" class="form-control" placeholder="Enter Display Order" required>
                    </div>
                    <div class="form-group">
                        <label>Is Show on Footer ?
                        </label><br>
                        <input type="radio" name="is_footer" class="" value="1"> Yes
                        <input type="radio" name="is_footer" class="" checked value="0"> No
                    </div>
                    <div class="form-group">
                        <label>Choose Parent Menu</label>
                        <select name="menu_id" class="form-control ">
                            <option value="">Select Menu</option>
                            @foreach( App\Models\Menu::whereNull('menu_id')->get() as $menu)
                            <option value="{{$menu->id}}">{{$menu->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Meta Tags</label>
                        <textarea name="meta_tags" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Meta Description</label>
                        <textarea name="meta_description" class="form-control"></textarea>
                    </div>
                    <p id="success-response" style="color:green;"></p>
                    <p id="error-response" style="color:red;"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="button" id="create-menu-btn" class="btn btn-primary waves-effect waves-light">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#create-menu-btn').on('click',function(){
            $("#create-menu-btn").attr('disabled',true);
            $("#create-menu-btn").html('Please Wait');
            $("#success-response").html('');
            $("#error-response").html('');
            let id = this.value;
            $.ajax({
                url: "{{route('admin.menu.store')}}",
                method: 'post',
                data: $("#addMenuForm").serialize(),
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(result){
                    if(result.success)
                    {
                        $("#create-menu-btn").attr('disabled',false);
                        $("#create-menu-btn").html('Create');
                        $("#success-response").html(result.message);
                        setTimeout(() => {
                                location.reload()
                        }, 2000);

                    }else{
                        $("#create-menu-btn").attr('disabled',false);
                        $("#create-menu-btn").html('Create');
                        $("#success-response").html('');
                        $("#error-response").html(result.message);

                    }
                }
            });
        });
    });
</script>
@endsection
