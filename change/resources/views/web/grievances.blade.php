<style>
    .panel-heading {
        padding: 10px 15px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 3px;
        border-top-right-radius: 3px;
    }

    .panel-primary>.panel-heading {
        color: #fff;
        background-color: #0B416F;
        border-color: #0B416F;
    }

    .panel-info>.panel-heading {
        color: #31708f;
        background-color: #d9edf7;
        border-color: #bce8f1;
    }
</style>
@include('web.layouts.header')

<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <form action="{{ route('storeGrievances') }} " method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="container">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="panel-title">
                                        <center>
                                            <p style="font-size:25px;">Student Grievance Form</p>
                                        </center>
                                    </div>
                                </div>
                                <div class="panel-body"> <br />
                                    <div class="row">
                                        <div class="panel panel-info">
                                            <div class="panel-heading">
                                                <div class="panel-title">
                                                    <h4>Personal Details</h4>
                                                </div>
                                            </div>
                                            <div class="panel-body"> <br />
                                                <div class="row">
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-group field-jiform-fullname required">
                                                            <label class="control-label">Full Name</label>
                                                            <input type="text" class="form-control" name="name"
                                                                placeholder="Enter Full Name" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-group field-jiform-email required">
                                                            <label class="control-label">E-mail ID</label>
                                                            <input type="email" class="form-control" name="email"
                                                                placeholder="Enter E-mail ID" required>

                                                            @error('email')
                                                                <label for="" class="text-danger">
                                                                    {{ $message }}
                                                                </label>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-2">
                                                        <div class="form-group required">
                                                            <label class="control-label">Gender</label>
                                                            <select class="form-control" name="gender" required>
                                                                <option value="">Select</option>
                                                                <option value="Male">Male</option>
                                                                <option value="Female">Female</option>
                                                                <option value="Other">Other</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 mb-2">
                                                        <div class="form-group required">
                                                            <label class="control-label">Mobile No.</label>
                                                            <input type="text" class="form-control" name="mobile"
                                                                placeholder="Enter your 10 digit mobile number"
                                                                required>
                                                            @error('mobile')
                                                                <label for="" class="text-danger">
                                                                    {{ $message }}
                                                                </label>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Enrolment Number</label>
                                                            <input type="text" class="form-control" name="enrolment"
                                                                maxlength="15" placeholder="Enter your Enrolment Number"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Department</label>
                                                            <select class="form-control" name="department" required>
                                                                <option value="">---select---</option>
                                                                <option value="Arabic">Department of Arabic</option>
                                                                <option value="Persian">Department of Persian</option>
                                                                <option value="Urdu">Department of Urdu</option>
                                                                <option value="Islamic Studies">Department of Islamic
                                                                    Studies
                                                                </option>
                                                                <option value="English">Department of English</option>
                                                                <option value="Management">Department of Management
                                                                </option>
                                                                <option value="Journalism">Department of Journalism &
                                                                    Mass
                                                                    Communication</option>
                                                                <option value="Education">Department of Education
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Select Center</label>
                                                            <select class="form-control" name="center" required>
                                                                <option value="">---select---</option>
                                                                <option value="Campus Law Center">Campus Law Center
                                                                </option>
                                                                <option value="Law Center I">Law Center I</option>
                                                                <option value="Law Center II">Law Center II</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label class="control-label">Course</label>
                                                            <select class="form-control" name="course" required>
                                                                <option value="">---select---</option>
                                                                <option value="Ph.D.">Ph.D.</option>
                                                                <option value="Masters">Masters/Postgraduate</option>
                                                                <option value="LLM">LLM</option>
                                                                <option value="LLB">LLB</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br />
                                    <div class="row">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="panel-title">
                                                            <h4>Present Address</h4>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body"> <br />
                                                        <div class="row">
                                                            <div class="col-md-12 mb-2">
                                                                <div class="form-group">
                                                                    <label class="control-label">Address </label>
                                                                    <input type="text" class="form-control"
                                                                        name="present_address"
                                                                        placeholder="Enter Present Address" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-group">
                                                                    <label class="control-label">State</label>
                                                                    <select class="form-control" name="present_state"
                                                                        required>
                                                                        <option value="">---select---</option>
                                                                        @foreach ($states as $state)
                                                                            <option value="{{ $state->id }}">
                                                                                {{ $state->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-group">
                                                                    <label class="control-label">Pin Code</label>
                                                                    <input type="text" class="form-control"
                                                                        name="present_pincode"
                                                                        placeholder="Enter your six digit area pincode"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="panel-title">
                                                            <h4>Permanent Address</h4>
                                                        </div>
                                                    </div>
                                                    <div class="panel-body"> <br />
                                                        <div class="row">
                                                            <div class="col-md-12 mb-2">
                                                                <div class="form-group">
                                                                    <label class="control-label">Address</label>
                                                                    <input type="text" class="form-control"
                                                                        name="permanent_address"
                                                                        placeholder="Enter Permanent Address" required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-group">
                                                                    <label class="control-label">State</label>
                                                                    <select class="form-control"
                                                                        name="permanent_state" required>
                                                                        <option value="">---select---</option>
                                                                        @foreach ($states as $state)
                                                                            <option value="{{ $state->id }}">
                                                                                {{ $state->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mb-2">
                                                                <div class="form-group">
                                                                    <label class="control-label">Pin Code</label>
                                                                    <input type="text" class="form-control"
                                                                        name="permanent_pincode"
                                                                        placeholder="Enter your six digit area pincode"
                                                                        required>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Grievance Details</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body"> <br />
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="control-label">Grievance Category</label>
                                                    <select class="form-control" name="category" required>
                                                        <option value="">---select---</option>
                                                        <option value="Examination">Examination</option>
                                                        <option value="Infrastructure">Infrastructure</option>
                                                        <option value="General Facility">General Facility</option>
                                                        <option value="Research Facility">Research Facility</option>
                                                        <option value="Journals/Literature">Journals/Literature
                                                        </option>
                                                        <option value="Fellowship">Fellowship</option>
                                                        <option value="Any Other">Any Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="control-label">Other Grievance Category (*If
                                                        Applicable)</label>
                                                    <input type="text" class="form-control"
                                                        name="other_grievance_category"
                                                        placeholder="Enter Other Grievance Category">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="control-label">Grievance Description (maximum 150
                                                        words)</label>
                                                    <textarea class="form-control" name="grievance_description" rows="6"
                                                        placeholder="Write in brief of your grievance."></textarea>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 mb-2">
                                                <div class="form-group">
                                                    <label class="control-label">Want to Upload Document ?</label>
                                                    <select class="form-control" name="uploadCheck" id="uploadCheck"
                                                        required>
                                                        <option value="">---select---</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-2" id="file">
                                                <div class="form-group">
                                                    <label class="control-label">Upload Document(if Yes)
                                                        (File Type: pdf, png, jpg, jpeg, doc, docx. File Size:
                                                        500KB)</label>
                                                    <input type="file" name="doc" maxlength="512">
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Proposed Solution (Optional)</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body"> <br />
                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <div class="form-group">
                                                    <label class="control-label">Proposed Solution (maximum 50
                                                        words)</label>
                                                    <textarea class="form-control" name="proposed_solution" rows="6"
                                                        placeholder="Please write proposed solution."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Declaration</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body"> <br />
                                        <div class="col-md-12">
                                            <p>I hereby declare that the information/document provided above is correct.
                                                I shall
                                                be responsible for furnishing any wrong information/document.
                                            <div class="form-group">
                                                <label><input type="checkbox" required> Please check the box</label>
                                            </div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <br />
                                <div class="panel panel-info">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Captcha Verification</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4">
                                            <p>Type the Text</p>
                                            <div class="captcha">
                                                <span> {!! captcha_img('math') !!} </span>
                                                <button type="button" class="btn btn-danger reload"
                                                    id="reload">&#x21bb</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="col-md-4 mt-3 mb-3">
                                            <input type="text" class="form-control" name="captcha"
                                                placeholder="Enter Captcha">
                                            @error('captcha')
                                                <label for="" class="text-danger"> {{ $message }} </label>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="form-group text-center">
                                <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            </div>
                            <br /><br /><br>
                        </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')

{{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
<script>
    $(document).ready(function() {
        $('#reload').click(function() {
            $.ajax({
                type: 'GET',
                url: 'reload-captcha',
                success: function(data) {
                    $(".captcha span").html(data.captcha);
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#file').hide();
        $('#uploadCheck').on('change', function() {
            var docField = $('#file');
            if ($(this).val() == 'yes') {
                docField.show();
            } else {
                docField.hide();
            }
        });
    });
</script>
