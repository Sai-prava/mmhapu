@extends('admin.layout.index')
@section('title')
    Add Question
@endsection
@section('content')
    <div class="card">
        <div class="card-header header-elements-inline">
            <h4 class="card-title">Add Question for the Quiz: {{ $quiz_list->title }}</h4>
            {{-- @dd($quiz_list) --}}
        </div>
        <div class="card-body">
            <div class="text-center">
                <div>
                    <form method="post" action="{{ route('admin.store.question') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Question" name="question" required class="form-control">
                        </div>
                        <input type="hidden" name="quiz_id" value="{{ $quiz_id }}" readonly required>
                        <div class="form-group">
                            <input type="text" placeholder="Option A" name="option_a" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Option B" name="option_b" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Option C" name="option_c" required class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Option D" name="option_d" required class="form-control">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="correct_option" required>
                                <option selected disabled value>-- Select Correct Option --</option>
                                <option value="option_a">A</option>
                                <option value="option_b">B</option>
                                <option value="option_c">C</option>
                                <option value="option_d">D</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
    <div class="card">
        <div class="card-header header-elements-inline">
            <h4 class="card-title">Question List</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table datatable-save-state">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Question</th>
                            <th scope="col">A</th>
                            <th scope="col">B</th>
                            <th scope="col">C</th>
                            <th scope="col">D</th>
                            <th scope="col">Correct</th>
                            <th scope="col">Action</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sl = 1;
                        @endphp
                        @foreach ($questions as $question)
                            <tr>
                                <th scope="row">{{ $sl++ }}</th>
                                <td>{{ $question->question }}</td>
                                <td>{{ $question->option_a }}</td>
                                <td>{{ $question->option_b }}</td>
                                <td>{{ $question->option_c }}</td>
                                <td>{{ $question->option_d }}</td>
                                <td>{{ $question->correct_option }}</td>
                                <td>
                                    <a href="{{route('admin.edit.question',$question->id)}}" class="btn btn-primary btn-sm">Edit</a>
                                </td>
                                <td>
                                    <a onclick="confirmDelete('{{route('admin.delete.question',$question->id)}}')" class="btn btn-danger btn-sm">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        function correctAnswer() {
            let a = document.getElementsByName('option_a')
            alert('a');
        }
    </script>

    <script>
        function confirmDelete(deleteUrl){
            var isConfirmed = confirm("Are You Sure You Want to Delete This Item ?")
        if(isConfirmed){
            window.location.href =deleteUrl;
        }else{
            alert("Deletion canceled");
        }
        }
    </script>
@endsection
