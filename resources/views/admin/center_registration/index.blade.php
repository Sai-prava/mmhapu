@extends('admin.layout.index')

@section('title')
    Add Exam Center Registration
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Exam Center Registration</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.exam_center_registration.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input name="address" type="text" class="form-control" placeholder="Enter Address" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contact Person</label>
                            <input name="contact_person" type="text" class="form-control" placeholder="Enter Contact Person" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contact Number</label>
                            <input name="contact_no" type="text" class="form-control" placeholder="Enter Contact Number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Max No of Candidate Allowed</label>
                            <input name="max_candidate_allowed" type="number" class="form-control" placeholder="Max Candidate Allowed" required>
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
                <th>Address</th>
                <th>Contact Person</th>
                <th>Contact Number</th>
                <th>Max No of Candidate Allowed</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\ExamCenterRegistration::all()  as $key => $examCenterRegistration)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$examCenterRegistration->name}}</td>
                <td>{{$examCenterRegistration->address}}</td>
                <td>{{$examCenterRegistration->contact_person}}</td>
                <td>{{$examCenterRegistration->contact_no}}</td>
                <td>{{$examCenterRegistration->max_candidate_allowed}}</td>
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" name="{{$examCenterRegistration->name}}" 
                        address="{{$examCenterRegistration->address}}" contact_person="{{$examCenterRegistration->contact_person}}" 
                        contact_no="{{$examCenterRegistration->contact_no}}" max_candidate_allowed="{{$examCenterRegistration->max_candidate_allowed}}" 
                         id="{{$examCenterRegistration->id}}" class="edit-btn btn btn-primary">Edit</a>
                </td>
                <td>
                    <form action="{{route('admin.exam_center_registration.destroy',$examCenterRegistration->id)}}" method="POST">
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Exam Center Registration</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Name</label>
                            <input name="name" id="name" type="text" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input name="address" id="address" type="text" class="form-control" placeholder="Enter Address" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contact Person</label>
                            <input name="contact_person" id="contact_person" type="text" class="form-control" placeholder="Enter Contact Person" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Contact Number</label>
                            <input name="contact_no" id="contact_no" type="text" class="form-control" placeholder="Enter Contact Number" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Max No of Candidate Allowed</label>
                            <input name="max_candidate_allowed" id="max_candidate_allowed" type="number" class="form-control" placeholder="Max Candidate Allowed" required>
                        </div>

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
            let address = $(this).attr('address');
            let contact_person = $(this).attr('contact_person');
            let contact_no = $(this).attr('contact_no');
            let max_candidate_allowed = $(this).attr('max_candidate_allowed');
            $('#name').val(name);
            $('#address').val(address);
            $('#contact_person').val(contact_person);
            $('#contact_no').val(contact_no);
            $('#max_candidate_allowed').val(max_candidate_allowed);
            $('#updateForm').attr('action','{{route('admin.exam_center_registration.update','')}}' +'/'+id);
        });
    });
</script>
@endsection