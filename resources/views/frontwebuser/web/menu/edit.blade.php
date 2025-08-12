@extends('frontwebuser.layout.index')

@section('title')
    Edit {{$menu->name}} Menu
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Edit {{$menu->name}} Menu</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('frontwebuser.menu.update',$menu->id)}}" method="post" enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Menu Name</label>
                            <input name="name" value="{{$menu->name}}" type="text" class="form-control" placeholder="Enter Menu Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Menu Url Name<small>(Example : /home)</small></label>
                            <input name="url" value="{{$menu->url}}" type="text" class="form-control" placeholder="E.g. /url-name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Meta Title</label>
                            <input name="meta_title" value="{{$menu->meta_title}}" type="text" class="form-control" placeholder="Enter Meta Title" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Display Order</label>
                            <input name="display_order" value="{{$menu->display_order}}" type="number" min="1" class="form-control" placeholder="Enter Display Order" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Is Show on Footer ?
                            </label><br>
                            <input type="radio" {{$menu->is_footer ? 'checked' : ''}} name="is_footer" class="" value="1"> Yes
                            <input type="radio" {{!$menu->is_footer ? 'checked' : ''}} name="is_footer" class="" value="0"> No
                        </div>
                        <div class="form-group col-md-6">
                            <label>Choose Parent Menu</label>
                            <select name="menu_id" class="form-control ">
                                <option value="">Select Menu</option>
                                @foreach( App\Models\Menu::whereNull('menu_id')->get() as $parentMenu)
                                @if($parentMenu->id != $menu->id )
                                <option {{$parentMenu->id == $menu->menu_id ? 'selected' : ''}} value="{{$parentMenu->id}}">{{$parentMenu->name}}</option>
                                @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Meta Tags</label>
                            <textarea name="meta_tags" class="form-control">{{$menu->meta_tags}}</textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Meta Description</label>
                            <textarea name="meta_description" class="form-control" >{{$menu->meta_description}}</textarea>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Edit <i class="icon-paperplane ml-2"></i></button>
                    </div>

                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#course_id').on('change',function(){
            let id = this.value;
            $.ajax({
                url: "{{route('admin.subject.get_course_semsters')}}",
                method: 'post',
                data: {
                    id: id,
                },
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                success: function(result){
                    $('#semester_id').empty();
                    $('#semester_id').append('<option disabled>Select Semester</option>');
                    for (i=0;i<result.length;i++){
                        $('#semester_id').append('<option value="'+result[i].id+'">'+result[i].name+'</option>');
                    }
                }
            });
        });
    });
</script>
@endsection
