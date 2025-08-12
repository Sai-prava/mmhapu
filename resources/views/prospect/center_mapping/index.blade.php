

@extends('prospect.layout.index')

@section('title')
    Center Mapping
@endsection
@section('styles')
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add Center Mapping</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('prospect.center_mapping.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <div class="form-group col-md-6">
                            <label>Center ID</label>
                            <input name="center_id" type="text" class="form-control" placeholder="Enter Center ID" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Select Course</label>
                            <select name="entrance_fee_id" class="form-control select-search" required>
                                <option>Select</option>
                                @foreach(App\Models\EntranceFee::all() as $entrance_fee)
                                <option value="{{$entrance_fee->id}}">{{$entrance_fee->course->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Exam Date</label>
                            <input name="exam_date" type="date" class="form-control" placeholder="Enter Exam Date" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label>Exam Time</label>
                            <input name="exam_time" type="time" class="form-control" placeholder="Enter Exam Time" required>
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
@endsection