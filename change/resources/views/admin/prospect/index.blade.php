@extends('admin.layout.index')

@section('title')
Prospects
@endsection

@section('content')

<div class="card">
    <div class="table-responsive">
        <table class="table datatable-save-state">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Exam</th>
                    <th>Payment ID#</th>
                    <th>Order ID#</th>
                    <th>Center Mapping</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($prospects  as $key => $prospect)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$prospect->name}}</td>
                    <td>{{$prospect->email}}</td>
                    <td>{{ $prospect->entrance_fee?$prospect->entrance_fee->course->title:'' }}</td>
                    <td>{{ $prospect->studentPaymentLastest()?$prospect->studentPaymentLastest()->razorpay_payment_id:'' }}</td>
                    <td>{{ $prospect->studentPaymentLastest()?$prospect->studentPaymentLastest()->razorpay_order_id:'' }}</td>

                    <td>
                        @if($prospect->centerMapping())
                        <span class="badge badge-success">Have center mapped already</span>
                        @else 
                        <span class="badge badge-warning">Pending</span>
                        {{-- <a href="{{route('admin.center_mapping.show',$prospect->id)}}" class="btn btn-success btn-sm">Add Center Mapping</a> --}}
                        @endif
                    </td>
                    <td>

                        <button data-toggle="modal" data-target="#edit_modal"
                            id="{{$prospect->id}}" class="edit-btn btn btn-primary">Edit</button>
                        {{-- <a href="{{route('admin.prospect.edit',$prospect->id)}}" class="btn btn-primary btn-sm">Edit</a> --}}
                    </td>
                    <td>
                        <a href="{{route('admin.prospect.show',$prospect->id)}}" class="btn btn-info btn-sm">Show Application</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Student Approval</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <input type="hidden" name="user_id" id="user_id" required>
                        <label for="name">Status</label>
                        <select  name="status" id="status"  class="form-control" required>
                            <option selected disabled>Select Status</option>
                            <option value="Admitted">Admitted</option>
                            <option value="Rejected">Rejected</option>
                        </select>
                    </div>
                    <div id="prospectAdmittedFields"></div>
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
            $('#user_id').val(id);
            $('#updateForm').attr('action','{{route('admin.prospect.status_update','')}}');
        });
    });

    $(document).on('change', '#status', function (event) {
        status = $(this).val();
        if(status == 'Admitted')
        {
            // $('.admitted_fields').show();
            $('#college_id').attr('required',true);
            $('#course_id').attr('required',true);
            $('#semester_id').attr('required',true);
            $('#enrollment_year').attr('required',true);
            $.ajax({
                url: '{{route("admin.prospect.get_admit_content")}}',
                type: 'POST',
                headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
                dataType: 'JSON',
                data: {
                    'user_id': $('#user_id').val(),
                },
            })
            .done(function (data) {
                $('#prospectAdmittedFields').empty();
                $('#prospectAdmittedFields').html(data.html);
            })
        }else{
            // $('.admitted_fields').hide();
            $('#college_id').attr('required',false);
            $('#course_id').attr('required',false);
            $('#semester_id').attr('required',false);
            $('#enrollment_year').attr('required',false);
            $('#prospectAdmittedFields').empty();
        }
    });
    $(document).on('change', '#college_id', function (event) {
        college_id = $(this).val();
        event.preventDefault();
        $.ajax({
            url: '{{url("get_course_aganist_college")}}',
            type: 'POST',
            headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
            dataType: 'JSON',
            data: {
                'college_id': college_id,
            },
        })
        .done(function (data) {
            $('#course_id').empty();
            $('#course_id').append('<option selected value="">Select College Course</option>');
            for (i=0;i<data.length;i++){
            $('#course_id').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
            }
        })
    });
    // $(document).on('change', '#course_id', function (event) {
    //     course_id = $(this).val();        
    //     event.preventDefault();
    //     $.ajax({
    //         url: '{{url("get_semester_aganist_course")}}',
    //         type: 'POST',
    //         headers: {'X-CSRF-TOKEN': '{{ csrf_token() }}'},
    //         dataType: 'JSON',
    //         data: {
    //             'course_id': course_id,
    //         },
    //     })
    //     .done(function (data) {
    //         $('#semester_id').empty();
    //         $('#semester_id').append('<option selected value="">Select Semester</option>');
    //         for (i=0;i<data.length;i++){
    //         $('#semester_id').append('<option value="'+data[i].id+'">'+data[i].name+'</option>');
    //         }
    //     })
    // });
</script>
@endsection
