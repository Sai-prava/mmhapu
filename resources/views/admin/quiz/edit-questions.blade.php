@extends('admin.layout.index')
@section('title')
    Edit Question
@endsection
@section('content')
    <div class="card">
            <div class="card-header header-elements-inline">
                <h4 class="card-title">Edit Question</h4>
            </div>
            <div class="card-block pdng">
                <a href="{{ route('admin.add.question', ['id' => $edit_question->quiz_id]) }}" class="btn btn-primary"><i class="fas fa-arrow-left"></i> Back</a>
                <a href="{{ route('admin.edit.question', $edit_question->id) }}" class="btn btn-info"><i class="fas fa-sync-alt"></i>
                    Refresh</a>
            </div>
            <div class="text-center">
                <div>
                    <form method="post" action="{{ route('admin.update.question') }}">
                        @csrf
                        <div class="form-group">
                            <input type="hidden" name="id" value="{{$edit_question->id}}">
                            <input type="text" placeholder="Question" name="question" required class="form-control" value="{{$edit_question->question}}">
                        </div>
                        {{-- <input type="hidden" name="quiz_id" value="{{ $edit_question->quiz_id }}" readonly required> --}}
                        <div class="form-group">
                            <input type="text" placeholder="Option A" name="option_a" required class="form-control" value="{{$edit_question->option_a}}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Option B" name="option_b" required class="form-control" value="{{$edit_question->option_b}}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Option C" name="option_c" required class="form-control" value="{{$edit_question->option_c}}">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Option D" name="option_d" required class="form-control" value="{{$edit_question->option_d}}">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="correct_option" required>
                                <option selected disabled value>-- Select Correct Option --</option>
                                <option value="option_a" {{($edit_question->correct_option == 'option_a') ? 'selected' : ''}}>A</option>
                                <option value="option_b" {{($edit_question->correct_option == 'option_b') ? 'selected' : ''}}>B</option>
                                <option value="option_c" {{($edit_question->correct_option == 'option_c') ? 'selected' : ''}}>C</option>
                                <option value="option_d" {{($edit_question->correct_option == 'option_d') ? 'selected' : ''}}>D</option>
                            </select>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
@endsection
