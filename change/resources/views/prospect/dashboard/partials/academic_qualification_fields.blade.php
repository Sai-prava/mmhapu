<div class="row" id="remove-{{$key}}">
    <input type="hidden" name="qualification_id[]" value="">
    <div class="form-group col-md-1">
        <button type="button"  class="btn btn-sm btn-danger" onclick="removeFields('{{ @$key }}')">Remove</button>
    </div>
    <div class="form-group col-md-2">
        <!-- <input type="text" name="" class="form-control"  > -->
        <select name="name_of_exam[]" id="" class="form-control">
            <option value="">Select Exam</option>
            @foreach (App\Models\Passed_exam::all() as $exam)
            <option value="{{ $exam->id }}">{{ $exam->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group col-md-2">
        <!-- <input type="text" name="" class="form-control"  > -->
        <select name="name_of_board[]" id="" class="form-control" >
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
        <input type="text" name="total_marks[]" id="totalMarks" class="form-control" >

    </div>
    <div class="form-group col-md-1">
        <input type="text" name="marks[]" id="Marks" class="form-control"  >
    </div>
    <div class="form-group col-md-1">
        <input type="text" name="percentage[]" id="Percentage" class="form-control">
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#totalMarks').on('change', function() {
            var total_marks = $('#totalMarks').val();
            console.log(total_marks);
            $('#Marks').on('keyup', function() {
                var marks = $('#Marks').val();
                var percentage = (marks/total_marks)*100;
                $('#Percentage').val(percentage);
            });
        });
    });
</script>
