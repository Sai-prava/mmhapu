
<form action="{{route('admin.center_mapping.store')}}" method="post" enctype="multipart/form-data" >
    @csrf
    <div class="row">
        <div class="col-md-12">
            <button type="button" class="btn btn-primary float-right" id="select-all-btn">Select All</button>
            <button type="button" class="btn btn-danger float-right" style="display:none;" id="unselect-all-btn">Unselect All</button>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-4">
            <label>Center ID</label>
            <select name="center_id" class="form-control " required>
                <option value="">Select</option>
                @foreach(App\Models\ExamCenterRegistration::all() as $center)
                <option value="{{$center->id}}">{{$center->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group col-md-4">
            <label>Shift ID</label>
            <select name="shift_id" class="form-control " required>
                <option value="">Select</option>
                @foreach(App\Models\Shift::all() as $shift)
                <option value="{{$shift->id}}">{{$shift->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Exam</th>
                <th>Status</th>
                <th>Track ID</th>
                <th>Center Mapping</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($students  as $key => $student)
            <tr>
                <td>
                    <input type="checkbox" name="candidate[]" value="{{$student->id}}" class="candidateList">
                </td>
                <td>{{$student->name}}</td>
                <td>{{$student->email}}</td>
                <td>{{ $student->entrance_fee?$student->entrance_fee->course->title:'' }}</td>
                <td>{{ $student->studentPaymentLastest()?$student->studentPaymentLastest()->status:'' }}</td>
                <td>{{ $student->studentPaymentLastest()?$student->studentPaymentLastest()->track_id:'' }}</td>

                <td>
                    @if($student->centerMapping())
                    <span class="badge badge-success">Have center mapped already</span>
                    @else 
                    <span class="badge badge-warning">Pending</span>
                    {{-- <a href="{{route('admin.center_mapping.show',$student->id)}}" class="btn btn-success btn-sm">Add Center Mapping</a> --}}
                    @endif
                </td>
                <td>
                    <a href="{{route('admin.prospect.show',$student->id)}}" class="btn btn-info btn-sm">Show Application</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">Submit <i class="icon-paperplane ml-2"></i></button>
    </div>
    
</form>