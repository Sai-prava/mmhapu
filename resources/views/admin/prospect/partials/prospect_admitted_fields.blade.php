

<div class="form-group admitted_fields" >
    <label for="name">Course</label>
    <input type="hidden" readonly class="form-control" name="course_id" value="{{@$course->id}}" >
    <input type="text" readonly class="form-control" value="{{@$course->title}}" >
</div>
<div class="form-group admitted_fields" >
    <label for="name">Semester</label>
    <select  name="semester_id"  id="semester_id" class="form-control" required>
        <option selected value="">Select Semester</option>
        @foreach($semsters as $semster)
        <option value="{{$semster->id}}">{{$semster->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group admitted_fields" >
    <label for="name">College</label>
    <select  name="college_id"  id="college_id" class="form-control" required>
        <option selected value="">Select College</option>
        @foreach($collegeWithCourses as $college)
        <option value="{{$college->id}}">{{$college->name}}</option>
        @endforeach
    </select>
</div>
<div class="form-group admitted_fields">
    <label>Enrollment Year</label>
    <select  name="enrollment_year" id="enrollment_year" class="form-control" required>
        <option selected value="">Select Enrollment Year</option>
        @for($i = 2015;$i < 2031;$i++)
        <option  value="{{$i}}">{{$i}}</option>
        @endfor
    </select>
</div>