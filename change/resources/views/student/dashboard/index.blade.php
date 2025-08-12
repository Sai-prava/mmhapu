@extends('student.layout.index')

@section('title')
    Dashboard
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-body">
                <div class="media mb-0">
                    <div class="media-body col-lg-4">
                        <h6 class="font-weight-semibold mb-0 ">
                            {{-- Welcome To Student Panel! --}}
                            {{ Auth::user()->name }}

                        </h6>
                    </div>
                    <div class="media-body col-lg-4">
                        <h6 class="font-weight-semibold mb-0 text-center">
                            {{-- @php
                                $semster = App\Models\StudentProfile::where('user_id',Auth::user()->id)->first();
                                // dd( $semster->semester->name);
                            @endphp
                            Semester :- {{$semster->semester->name}} --}}
                            {{ Auth::user()->studentProfile->course->title }}
                        </h6>
                    </div>
                    <div class="media-body col-lg-4">
                        <h6 class="font-weight-semibold mb-0 text-right">
                            {{-- Course :- {{$semster->course->title}} --}}
                            Semester: {{ Auth::user()->studentProfile->semester->name }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body" style="overflow: hidden ;">
                <table class="table datatable-save-state">
                    <thead>
                        <tr>
                            <th>Subject Name</th>
                            <th>Subject Code</th>
                            <th>Subject Credit</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($all_subject as $subject)
                            <tr>
                                <td>{{ $subject->name }}</td>
                                <td>{{ $subject->code }}</td>
                                <td>{{ $subject->credit }}</td>
                            </tr>
                            @php
                                $i++;
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-body">
                <div id="calendar"></div>
            </div>
        </div>
    </div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');

        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            fixedWeekCount: true,
            scrollTime: '00:00',
            height: 'auto'
        });
        calendar.render();
    });
</script>
@endsection
@section('scripts')
@endsection
