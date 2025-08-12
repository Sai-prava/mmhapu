@extends('admin.layout.index')

@section('title')
    Shift
@endsection

@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h5 class="card-title">Manage Shift</h5>
            <div class="header-elements">
                <div class="list-icons">
                    <a class="btn btn-primary" href="{{route('admin.shift.create')}}">Add Shift<i class="fas fa-plus-circle ml-2"></i></a>
                </div>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table datatable-save-state">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Shift Timing From</th>
                        <th>Shift Timing To</th>
                        <th>Action</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_shifts as $key=> $shifts)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $shifts->name }}</td>
                            <td>{{ date('h:i A', strtotime($shifts->time_from)) }}</td>
                            <td> {{ date('h:i A', strtotime($shifts->time_to)) }} </td>
                            <td>
                                <a class="btn btn-primary btn-sm" href="{{route('admin.shift.edit',$shifts->id)}}">Edit<i class="fas fa-edit ml-2"></i></a>
                            </td>
                            <td>
                                <form action="{{route('admin.shift.destroy',$shifts->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-danger">Delete<i class="fas fa-trash-alt ml-2"></i></button>

                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection
