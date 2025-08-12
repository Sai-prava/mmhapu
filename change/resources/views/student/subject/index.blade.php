@extends('student.layout.index')

@section('title')
    Subjects
@endsection

@section('content')

<div class="card">

    <div class="card-header header-elements-inline">
        <h5 class="card-title">Subjects</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Subject Credit</th>
                <th>Subject Type</th>
                <th>Semester Name</th>
                <th>Course Name</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1;
            @endphp
            @foreach ($all_subject  as $subject)
            <tr>
                <td>{{$i}}</td>
                <td>{{$subject->name}}</td>
                <td>{{$subject->code}}</td>
                <td>{{$subject->credit}}</td>
                <td>{{$subject->type}}</td>
                <td>{{$subject->semester->name}}</td>
                <td>{{$subject->course->title}}</td>
            </tr>
            @php
                $i++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@section('scripts')
@endsection
