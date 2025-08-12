<form id="stepThreeForm" method="POST">
    @csrf
    <hr>
    <div class="media mb-0">
        <div class="media-body">
            <h4 class="font-weight-semibold mb-0 text-center">
                 STEP 3 - ACADEMIC QUALIFICATION
            </h4>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="form-group col-12  text-right">
            <button type="button" class="btn btn-success add-more-fields">Add More Fields</button>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-1">

        </div>
        <div class="form-group col-md-2">
            Name of Examination
        </div>
        <div class="form-group col-md-2">
            Name of Board
        </div>
        <div class="form-group col-md-2">
            School / College Last Attended
        </div>
        <div class="form-group col-md-1">
            Year Of Passing
        </div>
        <div class="form-group col-md-1">
            Total Marks
        </div>
        <div class="form-group col-md-1">
            Secured Marks
        </div>
        <div class="form-group col-md-1">
            Percentage
        </div>
    </div>
    @if(@request()->session()->get('application_process')->name_of_exam)
        @foreach(@request()->session()->get('application_process')->name_of_exam as $key => $name_of_exam)
            <div class="row" id="remove-{{$key}}">
                <div class="form-group col-md-1">
                    @if($key != 0)
                        <button type="button"  class="btn btn-sm btn-danger" onclick="removeFields('{{ @$key }}')">Remove</button>
                    @endif
                </div>

                <div class="form-group col-md-2">
                    <!-- <input type="text" name="" class="form-control"  > -->
                    <select name="name_of_exam[]" id="" class="form-control" required>
                        <option value="">Select Exam</option>
                        @foreach (App\Models\Passed_exam::all() as $exam)
                        <option {{$name_of_exam == $exam->id ? 'selected' : ''}} value="{{ $exam->id }}">{{ $exam->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <!-- <input type="text" name="" class="form-control"  > -->
                    <select name="name_of_board[]" id="" class="form-control" required>
                        <option value="">Select Board</option>
                        @foreach (App\Models\Board::all() as $board)
                        <option  {{@request()->session()->get('application_process')->name_of_board[$key] == $board->id ? 'selected' : ''}} value="{{ $board->id }}">{{ $board->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-2">
                    <input type="text" name="attended_school[]" value="{{@request()->session()->get('application_process')->attended_school[$key]}}" class="form-control"  >
                </div>
                <div class="form-group col-md-1">
                    <input type="text" name="passing_year[]" value="{{@request()->session()->get('application_process')->passing_year[$key]}}" class="form-control"  >
                </div>
                <div class="form-group col-md-1">
                    <input type="text" name="total_marks[]" value="{{@request()->session()->get('application_process')->total_marks[$key]}}" class="form-control" >

                </div>
                <div class="form-group col-md-1">
                    <input type="text" name="marks[]" value="{{@request()->session()->get('application_process')->marks[$key]}}" class="form-control"  >
                </div>
                <div class="form-group col-md-1">
                    <input type="text" name="percentage[]" value="{{@request()->session()->get('application_process')->percentage[$key]}}" class="form-control"  value="">
                </div>
            </div>
        @endforeach
    @else
        <div class="row">
            <div class="form-group col-md-1">
            </div>
            <div class="form-group col-md-2">
                <!-- <input type="text" name="" class="form-control"  > -->
                <select name="name_of_exam[]" id="" class="form-control" required>
                    <option value="">Select Exam</option>
                    @foreach (App\Models\Passed_exam::all() as $exam)
                    <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-2">
                <!-- <input type="text" name="" class="form-control"  > -->
                <select name="name_of_board[]" id="" class="form-control" required>
                    <option value="">Select Board</option>
                    @foreach (App\Models\Board::all() as $board)
                    <option value="{{ $board->id }}">{{ $board->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group col-md-2">
                <input type="text" name="attended_school[]" class="form-control"  >
            </div>
            <div class="form-group col-md-1">
                <input type="text" name="passing_year[]" class="form-control"  >
            </div>
            <div class="form-group col-md-1">
                <input type="text" name="total_marks[]" class="form-control total_marks" >

            </div>
            <div class="form-group col-md-1">
                <input type="text" name="marks[]" class="form-control marks"  >
            </div>
            <div class="form-group col-md-1">
                <input type="text" name="percentage[]" class="form-control percentage">
            </div>
        </div>
    @endif
    <div id="academic_qualification_fields">

    </div>
    <p id="step-response"></p>
    <div class="text-right" style="margin-top:10px;">
        <button type="button" id="back-button" class="btn btn-info">Back <i class="icon-paperplane ml-2"></i></button>
        <button type="button"  id="step-3-btn" class="btn btn-primary">Next <i class="icon-paperplane ml-2"></i></button>
    </div>
</form>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.total_marks').on('change', function() {
            var total_marks = $('.total_marks').val();
            console.log(total_marks);
            $('.marks').on('keyup', function() {
                var marks = $('.marks').val();
                // var divide = marks/total_marks;
                var percentage = (marks/total_marks)*100;
                $('.percentage').val(percentage);
            });
        });
    });
</script>
