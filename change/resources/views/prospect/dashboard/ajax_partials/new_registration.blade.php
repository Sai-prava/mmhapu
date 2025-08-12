
<form id="stepOneForm" method="POST">
    @csrf
    <hr>
    <div class="media mb-0">
        <div class="media-body">
            <h4 class="font-weight-semibold mb-0 text-center">
                 STEP 1 - REGISTRATION
            </h4>
        </div>
    </div>
    <hr>
    <p>Candidate's Name</p>
    <div class="row">
        <div class="col-md-4">
            <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" required name="first_name" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->first_name ? @request()->session()->get('application_process')->first_name : '' }}" 
                class="form-control" placeholder="first name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text"  name="middle_name" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->middle_name ? @request()->session()->get('application_process')->middle_name : '' }}" 
                class="form-control" placeholder="middle name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text"  name="last_name" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->last_name ? @request()->session()->get('application_process')->last_name : '' }}" 
                class="form-control" placeholder="last name">
            </div>
        </div>
    </div>
    <p>Father's Name</p>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" required 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->father_first_name ? @request()->session()->get('application_process')->father_first_name : '' }}" 
                name="father_first_name" class="form-control" placeholder="first name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text"  
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->father_middle_name ? @request()->session()->get('application_process')->father_middle_name : '' }}" 
                 name="father_middle_name" class="form-control" placeholder="middle name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->father_last_name ? @request()->session()->get('application_process')->father_last_name : '' }}" 
                name="father_last_name" class="form-control" placeholder="last name">
            </div>
        </div>
    </div>
    <p>Mother's Name</p>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" required name="mother_first_name" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->mother_first_name ? @request()->session()->get('application_process')->mother_first_name : '' }}"  
                class="form-control" placeholder="first name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text"  name="mother_middle_name" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->mother_middle_name ? @request()->session()->get('application_process')->mother_middle_name : '' }}"  
                class="form-control" placeholder="middle name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text"  name="mother_last_name" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->mother_last_name ? @request()->session()->get('application_process')->mother_last_name : '' }}"  
                class="form-control" placeholder="last name">
            </div>
        </div>
    </div>
    <p>Guardian's Name</p>
    <div class="row">
        <div class="col-md-4">
            <div class="form-group">
                <label>First Name</label>
                <input type="text" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->guardian_first_name ? @request()->session()->get('application_process')->guardian_first_name : '' }}" 
                name="guardian_first_name" class="form-control" placeholder="first name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Middle Name</label>
                <input type="text" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->guardian_middle_name ? @request()->session()->get('application_process')->guardian_middle_name : '' }}" 
                 name="guardian_middle_name" class="form-control" placeholder="middle name">
            </div>
        </div>
        <div class="col-md-4">
            <div class="form-group">
                <label>Last Name</label>
                <input type="text" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->guardian_last_name ? @request()->session()->get('application_process')->guardian_last_name : '' }}" 
                 name="guardian_last_name" class="form-control" placeholder="last name">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="row col-md-12">
                <p>Date Of Birth</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <select  name="day" class="form-control " required>
                            <option disabled>DD</option>
                            @for($day = 1;$day <= 31;$day++)
                            <option  
                                {{request()->session()->has('application_process') && @request()->session()->get('application_process')->day && @request()->session()->get('application_process')->day ==  $day ? 'selected' : '' }}
                                value="{{$day}}">{{$day}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select  name="month" class="form-control " required>
                            <option  value="" selected disabled>MM</option>
                            @for($month = 1;$month <= 12;$month++)
                            <option 
                            {{request()->session()->has('application_process') && @request()->session()->get('application_process')->month && @request()->session()->get('application_process')->month == $month ? 'selected' : '' }}
                            value="{{$month}}">{{$month}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select   name="year" class="form-control " required>
                            <option value="" selected disabled>YYYY</option>
                            @for($year = 1980;$year <= 2015;$year++)
                            <option 
                            {{request()->session()->has('application_process') && @request()->session()->get('application_process')->year && @request()->session()->get('application_process')->year == $year ? 'selected' : '' }}
                            value="{{$year}}">{{$year}}</option>
                            @endfor
                        </select>
                    </div>
                </div>
    
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Contact No.</label>
                        <input type="text" required name="phone" 
                        value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->phone ? @request()->session()->get('application_process')->phone : '' }}" 
                        class="form-control" placeholder="Contact No.">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Alternative Contact No.</label>
                        <input type="text" required name="alternative_phone" 
                        value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->alternative_phone ? @request()->session()->get('application_process')->alternative_phone : '' }}" 
                        class="form-control" placeholder="Alternative Contact No.">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" required name="email" value="{{Auth::user()->email}}" readonly class="form-control" placeholder="Contact No.">
                    </div>
                </div>
    
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <label>Aadhar No.</label>
                <input type="text" maxlength="12" required minlength="12" name="aadhar_no" class="form-control" 
                value="{{request()->session()->has('application_process') && @request()->session()->get('application_process')->aadhar_no ? @request()->session()->get('application_process')->aadhar_no : '' }}" 
                placeholder="Aadhar No.">
            </div>
        </div>
        {{-- <div class="col-md-3">
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label>OTP</label>
                <input type="text" name="otp" class="form-control" placeholder="OTP">
            </div>
        </div> --}}
    </div>
    <p id="step-response"></p>
    <div class="text-right" style="margin-top:10px;">
        <button type="button" id="step-1-btn" class="btn btn-primary">Next <i class="icon-paperplane ml-2"></i></button>
    </div> 

</form>