<div class="col-md-4">
    <label>College</label>
    <div class="form-group form-group-feedback form-group-feedback-left">
        <select name="teacher_college_id" id="collegee_id" class="form-control select-search" data-fouc>
            <option value="">Select College</option>
            @foreach (App\Models\User::where('role_id', 2)->where('is_verified', 1)->where('is_active', 1)->get() as $college)
                <option value="{{ $college->id }}">{{ $college->name }}</option>
            @endforeach
        </select>
    </div>
</div>
<div class="col-md-4">
    <label>Phone</label>
    <div class="form-group form-group-feedback form-group-feedback-left">
        <input type="text" minlength="10" maxlength="10" class="form-control" value="{{ old('teacher_phone') }}"
            placeholder="Student Phone" name="teacher_phone">
        <div class="form-control-feedback">
            <i class="icon-user text-muted"></i>
        </div>
    </div>
</div>

<div class="col-md-4">
    <br>
    <button class="btn btn-sm btn-primary add_row_course_subject" type="button">Add More Course & Subject
        Field</button>
</div>

<div class="col-md-12" id="course_field">
    <div class="row">
        <div class="col-md-6">
            <label>Course</label>
            <div class="form-group form-group-feedback form-group-feedback-left">
                <select name="teacher_course_id[]" id="course_id" class="form-control select-search course_id" data-fouc>
                    <option selected disabled>Select Courses</option>
                </select>
            </div>
        </div>

        <div class="col-md-6">
            <label>Subject</label>
            <div class="form-group form-group-feedback form-group-feedback-left">
                <select name="teacher_subject_id[]" id="subject_id" class="form-control select-search" data-fouc>
                    <option>Select Subjects</option>
                </select>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).on('change', '#collegee_id', function(event) {
        college_id = $(this).val();
        event.preventDefault();
        $.ajax({
            url: '{{ url('get_course_aganist_college') }}',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dataType: 'JSON',
            data: {
                'college_id': college_id,
            },
            success: function(res) {
                $('.course_id').empty();
                $('.course_id').html('<option value="">Select College Course</option>');
                $.each(res, function(key, value) {
                    $('.course_id').append('<option value="' + value
                        .id + '">' + value.name + '</option>');
                });
            }
        })
    });

    $(document).on('change', '#course_id', function(event) {
        course_id = $(this).val();
        event.preventDefault();
        $.ajax({
            url: '{{ url('get_subject_aganist_course') }}',
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            dataType: 'JSON',
            data: {
                'course_id': course_id,
            },
            success: function(res) {
                $('#subject_id').empty();
                $('#subject_id').html('<option value="">Select College Course</option>');
                $.each(res, function(key, value) {
                    $('#subject_id').append('<option value="' + value
                        .id + '">' + value.name + '</option>');
                });
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
    $(document).on('click', '.add_row_course_subject', function() {
        html = $('#AppendSize').html();
            console.log(html);
        $('#course_field').append(html);
        $('.select-2').addClass('select-search');
    });
});
</script>
