@extends('admin.layout.index')

@section('title')
Add Entrance Exam
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Entrance Exam</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.entrance_fee.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Course Name</label>
                            <!-- <input name="exam_name" type="text" class="form-control" placeholder="Enter Exam Name" required> -->
                            <select name="course_id" id="course_id" class="form-control">
                                <option value="">Select</option>
                                @foreach($courses as $course)
                                <option value="{{ $course->id }}">{{ $course->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Exam Fee</label>
                            <input name="exam_fee" type="text" class="form-control" placeholder="Enter Exam Fee" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Download Start Date</label>
                            <input name="download_start_date" type="date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Download End Date</label>
                            <input name="download_end_date" type="date" class="form-control" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Exam Date</label>
                            <input name="exam_date" type="date" class="form-control" >
                        </div>
                        <div class="form-group col-md-6">
                            <label>Exam Status</label>
                            <input type="radio" name="exam_status" value="1"> Yes
                            <input type="radio" name="exam_status" checked value="0"> No
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
                <th>Course Name</th>
                <th>Exam Fee</th>
                <th>Download Start Date</th>
                <th>Download End Date</th>
                <th>Exam Date</th>
                <th>Exam Status</th>
                <th>Document Category</th>
                <th>Action</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\EntranceFee::all() as $key => $entrance_fee)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{@$entrance_fee->course ? @$entrance_fee->course->title : ''}}</td>
                <td>{{$entrance_fee->exam_fee}}</td>
                <td>{{$entrance_fee->download_start_date}}</td>
                <td>{{$entrance_fee->download_end_date}}</td>
                <td>{{$entrance_fee->exam_date}}</td>
                <td>{{$entrance_fee->exam_status ? 'Active' : 'Inactive'}}</td>
                <td>{{$entrance_fee->documentCategories->count()}}</td>
                <td><a href="{{route('admin.entrance_fee.show',$entrance_fee->id)}}" class="btn btn-success btn-sm">Add Document Category</a></td>
                <td>
                    <button data-toggle="modal" data-target="#edit_modal"
                    course_id="{{$entrance_fee->course_id}}" exam_fee="{{$entrance_fee->exam_fee}}"
                    download_start_date="{{$entrance_fee->download_start_date}}" download_end_date="{{$entrance_fee->download_end_date}}"
                    exam_status="{{$entrance_fee->exam_status}}" exam_date="{{$entrance_fee->exam_date}}"
                     id="{{$entrance_fee->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                <td>
                    <form action="{{route('admin.entrance_fee.destroy',$entrance_fee->id)}}" method="POST">
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
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Entrance Fee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Course Name</label>
                        <!-- <input name="exam_name" id="exam_name" type="text" class="form-control" placeholder="Enter Exam Name" required> -->
                        <select name="course_id" id="course_id" class="form-control">
                            <option value="">Select</option>
                            @foreach($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Exam Fee</label>
                        <input name="exam_fee" id="exam_fee" type="text" class="form-control" placeholder="Enter Exam Fee" required>
                    </div>
                    <div class="form-group">
                        <label>Download Start Date</label>
                        <input name="download_start_date" id="download_start_date" type="date" class="form-control" required>
                    </div>
                    <div class="form-group ">
                        <label>Download End Date</label>
                        <input name="download_end_date" id="download_end_date" type="date" class="form-control" required>
                    </div>
                    <div class="form-group ">
                        <label>Exam Date</label>
                        <input name="exam_date" id="exam_date" type="date" class="form-control">
                    </div>
                    {{-- <div class="form-group">
                        <label>Exam Status</label>
                        <select name="exam_status"  id="exam_status" class="form-control"></select>
                    </div> --}}
                    <div class="form-group">
                        <label>Exam Status</label>
                        @foreach ($exam_statuses as $status)
                            <input type="radio" name="exam_status" value="1" {{ $status->exam_status == 1 ? 'checked' : '' }}> Yes
                            <input type="radio" name="exam_status" value="0" {{ $status->exam_status == 0 ? 'checked' : '' }}> No
                        @endforeach
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
            let course_id = $(this).attr('course_id');
            let exam_fee = $(this).attr('exam_fee');
            let download_start_date = $(this).attr('download_start_date');
            let download_end_date = $(this).attr('download_end_date');
            let exam_date = $(this).attr('exam_date');
            let exam_status = $(this).attr('exam_status');
            let id = $(this).attr('id');

            $("#course_id option[value='" + course_id + "']").prop("selected", true);
            $('#download_start_date').val(download_start_date);
            $('#download_end_date').val(download_end_date);
            $('#exam_date').val(exam_date);
            $('#exam_status').val(exam_status);
            $('#exam_fee').val(exam_fee);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.entrance_fee.update','')}}' +'/'+id);
        });
    });
</script>
@endsection
