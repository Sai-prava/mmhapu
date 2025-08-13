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

    .grievance-form h3 {
        margin-bottom: 20px;
        font-size: 25px;
        font-weight: bold;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        font-weight: bold;
    }

    .btn-primary {
        padding: 10px 30px;
        font-size: 18px;
    }

    .container {
        max-width: 800px;

    }

    .panel {
        margin-bottom: 20px;
        width: 50%;
        margin: auto;
        border: 1px solid #F6F5F5;
        padding-left: 40px;
        padding-right: 30px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        background: #F5F1EF;
        margin-top: 30px;
        margin-bottom: 30px;
    }

    input.form-control,
    select.form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 10px;
        appearance: auto;

    }

    @media (max-width: 768px) {
        .form-group label {
            text-align: left !important;
        }
    }

    .form-group.row label {
        margin-bottom: 0;
        padding-right: 5px;
        font-size: 1rem;
    }

    .form-group.row .col-sm-12 {
        padding-left: 5px;
    }
</style>

<style>
    .custom-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 1000;
    }

    .popup-content {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        width: 400px;
        text-align: center;
    }

    .popup-content h5 {
        margin-bottom: 20px;
        font-weight: bold;
    }

    .popup-content p {
        margin-bottom: 15px;
    }

    .popup-content strong {
        color: red;
    }

    .popup-content button {
        margin: 10px;
    }

    .squeeze-btn {
        transition: all 0.2s ease-in-out;
        transform: scale(1);
        /* Normal size */
    }

    .squeeze-btn:hover {
        transform: scale(0.9);
        /* Slight squeeze */
        transition: all 0.2s ease-in-out;
    }
</style>

@include('web.layouts.header')

<section class="section-gap"style="padding:0px;!important">
    <div class="container-fluid" style="background:#ebf2ff;margin:0px">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center" style="margin-left:-40px;margin-right:-30px;">
                        <h4 class="panel-title" style="color: #fff;">Online Request for
                            Certificates</h4>
                    </div>
                    <!-- Button to Open the Modal -->
                    <div class="mt-2" style="text-align: center;">
                        <a href="#applyModal" data-bs-toggle="modal" class="btn btn-success squeeze-btn">Already
                            Applied.Make Payment & Download Receipt</a>

                        {{-- <a href="#reciptModal" data-bs-toggle="modal" class="btn btn-info squeeze-btn">Download
                            Receipt</a> --}}
                    </div>

                    <!-- receiptModal Structure -->
                    <div class="modal fade" id="reciptModal" tabindex="-1" aria-labelledby="reciptModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reciptModalLabel">Enter Request Number</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form action="{{ route('checkReceipt') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="mobileNumber" class="form-label">Registration No.</label>
                                            <input type="text" name="reg_no" id="rollno" class="form-control"
                                                placeholder="Enter Request Number">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Structure -->
                    <div class="modal fade" id="dowloadModal" tabindex="-1" aria-labelledby="dowloadModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="dowloadModalLabel">Enter Roll Number</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form action="{{ route('checkCertificate') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="mobileNumber" class="form-label">Roll No.</label>
                                            <input type="text" name="rollno" id="rollno" class="form-control"
                                                placeholder="Enter your roll number">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal Structure -->
                    <div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="applyModalLabel">Enter Registration Number</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form id="registrationForm">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="mobileNumber" class="form-label">Registration Number</label>
                                            <input type="text" class="form-control" name="reg_no" id="reg_no"
                                                placeholder="Enter your Registration Number">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>

                                    <!-- Table to display registration details -->
                                    <div id="registrationDetails" style="display: none;">
                                        <div class="mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p><strong>Name:</strong> <span id="studentName"></span></p>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><strong>Registration Number:</strong> <span
                                                            id="studentRegNo"></span></p>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="mt-4 mb-3">Registration Details</h5>
                                        <div class="table-responsive">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Course</th>
                                                        <th>Certificate Type</th>
                                                        <th>Request For</th>
                                                        <th>Payment Status</th>
                                                        <th>Action</th>
                                                        <th>Download</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="certificateTableBody">
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <form action="{{ route('certificateStore') }} " method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body mt-4">
                            <div class="form-group row">
                                <label for="registration_number"
                                    class="col-sm-6 col-form-label text-right">Registration
                                    No. :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="reg_no"
                                        placeholder="University Registration Number" value="{{ old('reg_no') }}">
                                    @error('reg_no')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="roll_number" class="col-sm-6 col-form-label text-right">Roll No. :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="roll_no"
                                        placeholder="University Roll Number" value="{{ old('roll_no') }}">
                                    @error('roll_no')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="name" class="col-sm-6 col-form-label text-right">Name:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Full Name In English" value="{{ old('name') }}">
                                    @error('name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">नाम :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="hindi_name"
                                        placeholder="Full Name In Hindi" value="{{ old('hindi_name') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Father Name
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="father_name"
                                        placeholder="Father Name" value="{{ old('father_name') }}">
                                    @error('father_name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Mother Name
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="mother_name"
                                        placeholder="Mother Name" value="{{ old('mother_name') }}">
                                    @error('mother_name')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Adharcard Number
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="adhar_number"
                                        placeholder="Adharcard Number" value="{{ old('adhar_number') }}">
                                    @error('adhar_number')
                                        <span class="text-danger"> {{ 'The Adharcard Number field is required.' }} </span>
                                    @enderror
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Apaar ID
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="apaar_id"
                                        placeholder="APAAR ID" value="{{ old('apaar_id') }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="document" class="col-sm-6 col-form-label text-right">
                                    Document / ID Proof :</label>
                                <div class="col-sm-12">
                                    <input type="file" class="form-control" name="document"
                                        placeholder="Enter Document Details" value="{{ old('document') }}"
                                        accept=".pdf">
                                    @error('document')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                    <span style="color: red;">(Passport, Aadhaar, PAN Card)</span>
                                </div>

                            </div>
                            <div class="form-group">
                                <label for="gender" class="col-sm-6 col-form-label text-right">Gender:</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="gender">
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                            Female
                                        </option>
                                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-sm-6 col-form-label text-right">Email:</label>
                                <div class="col-sm-12">
                                    <input type="email" id="email" class="form-control" name="email"
                                        placeholder="Enter Email" value="{{ old('email') }}">
                                    <small id="emailError" class="text-danger"></small>
                                    @error('email')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mobile" class="col-sm-6 col-form-label text-right">Mobile:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="number"
                                        placeholder="10 digit Mobile Number" value="{{ old('number') }}"
                                        oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10);">
                                    @error('number')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="Certificate" class="col-sm-6 col-form-label text-right">Request
                                    For:</label>
                                <div class="col-sm-12">
                                    <select id="certificate-select" name="change_type" class="form-control">
                                        <option value="">---CHOOSE---</option>
                                        <option value="Original">Original Certificate</option>
                                        <option value="Duplicate">Duplicate Certificate</option>
                                        <option value="Correction">Correction Certificate</option>
                                    </select>
                                    @error('change_type')
                                        <span class="text-danger"> {{ 'The Certificate Type is Required' }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <input type="checkbox" id="urgent_mode" name="urgent_mode" value="1">
                                <label for="urgent_mode">Urgent Mode</label>
                                <p id="urgent_amount_text" style="display: none;">
                                    Urgent Mode Amount:
                                    <span style="color: red;">{{ $urgent_mode->amount }}/-</span>
                                </p>
                            </div>
                            <!-- Urgent mode checkbox -->
                            <div id="price-display" style="margin-top: 10px; display:none;">
                                <p>Base Price: ₹<span id="base-price">0</span></p>
                                <p id="total-price-wrapper" style="display:none;">
                                    <strong>Total Price: ₹<span id="total-price">0</span></strong>
                                </p>
                            </div>

                            <div id="certificates-options" class="form-group" style="display: none;">
                                <label for="degree-certificate" class="col-sm-6 col-form-label text-right">
                                    Degree<span>*</span>
                                </label>
                                <div class="col-sm-12">
                                    <select name="certificate" id="degree_id" class="form-control">
                                        <option value="">-- Select Degree --</option>
                                        @foreach ($degree as $deg)
                                            <option value="{{ $deg->id }}" data-status="{{ $deg->status }}">
                                                {{ $deg->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                    @error('certificate')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div id="document-id-div"></div>

                            <div class="form-group">
                                <label for="College/Dept"
                                    class="col-sm-6 col-form-label text-right">College/Dept.:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="college"
                                        placeholder="Name of the College / University Department"
                                        value="{{ old('college') }}">
                                    @error('college')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mobile" class="col-sm-6 col-form-label text-right">Course
                                    Category:</label>
                                <div class="col-sm-12">
                                    <select name="course_category_id" id="courseCategory" class="form-control">
                                        <option value="">---CHOOSE---</option>
                                        @foreach ($course_category as $course)
                                            <option value="{{ $course->id }}">
                                                {{ $course->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('course')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mobile" class="col-sm-6 col-form-label text-right">Course:</label>
                                <div class="col-sm-12">
                                    <select name="course" id="courses" class="form-control">
                                        <option value="">---CHOOSE---</option>
                                    </select>
                                    @error('course')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="session" class="col-sm-6 col-form-label text-right">Session :
                                </label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="session" id="sessions">
                                        <option value="">Choose Session</option>
                                    </select>
                                    @error('session')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="passing_year" class="col-sm-6 col-form-label text-right">Year of Passing
                                    :</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="passing_year">
                                        <option value="">Year of Passing</option>
                                        @for ($year = 2000; $year <= date('Y'); $year++)
                                            <option value="{{ $year }}"
                                                {{ old('passing_year') == $year ? 'selected' : '' }}>
                                                {{ $year }}
                                            </option>
                                        @endfor
                                    </select>
                                    @error('passing_year')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="recive_degree" class="col-sm-6 col-form-label text-right">Date to Receive
                                    Degree :</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" name="recive_degree"
                                        id="recive_degree" placeholder="Date after 30 Days from Today"
                                        value="{{ old('recive_degree') }}">
                                    @error('recive_degree')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" id="mode">
                                <label for="mobile" class="col-sm-6 col-form-label text-right">Mode of Receive
                                    Degree :</label>
                                <div class="col-sm-12">
                                    <Select name="recive_mode" id="recive_mode" class="form-control">
                                        <option value="Self Collect"
                                            {{ old('recive_mode') == 'Self Collect' ? 'selected' : '' }}>Self Collect
                                        </option>
                                        <!-- <option value="By Post"
                                            {{ old('recive_mode') == 'By Post' ? 'selected' : '' }}>By Post</option> -->
                                    </Select>
                                    @error('recive_mode')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="form-group row" id="address">
                                <label for="address" class="col-sm-6 col-form-label text-right">Address :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Complete Address with Pin Code" value="{{ old('address') }}">
                                </div>
                            </div> -->
                            <div class="text-center">
                                <button type="submit" class="btn btn-lg btn-primary">Save &
                                    Make Payment</button>
                            </div>
                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        $('#address').hide();

        $('#recive_mode').on('change', function() {
            var mode = $(this).val();
            if (mode === 'By Post') {
                $('#address').show();
            } else {
                $('#address').hide();
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const urgentCheckbox = document.getElementById('urgent_mode');
        const urgentAmountText = document.getElementById('urgent_amount_text');

        urgentCheckbox.addEventListener('change', function() {
            urgentAmountText.style.display = this.checked ? 'block' : 'none';
        });
    });
</script>

<!-- put this after including jQuery -->



<script>
    document.addEventListener("DOMContentLoaded", function() {
        let urgentCheckbox = document.getElementById("urgent_mode");
        let degreeSelect = document.getElementById("degree_id");

        urgentCheckbox.addEventListener("change", function() {
            let degreeOption = degreeSelect.querySelector(
                'option[value="4"]'); // ID of DEGREE CERTIFICATE

            if (this.checked) {
                if (degreeOption) {
                    degreeOption.style.display = "none";
                    if (degreeSelect.value === "4") {
                        degreeSelect.value = ""; // Reset if selected
                    }
                }
            } else {
                if (degreeOption) {
                    degreeOption.style.display = "block";
                }
            }
        });
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let urgentCheckbox = document.getElementById("urgent_mode");
        let degreeSelect = document.getElementById("degree_id");

        urgentCheckbox.addEventListener("change", function() {
            let urgent = this.checked ? 1 : 0;

            // Fetch filtered degree list
            fetch(`/degrees/filter?urgent_mode=${urgent}`)
                .then(response => response.json())
                .then(data => {
                    // Clear existing options
                    degreeSelect.innerHTML = '<option value="">-- Select Degree --</option>';

                    // Populate new options
                    data.forEach(deg => {
                        let opt = document.createElement("option");
                        opt.value = deg.id;
                        opt.textContent = deg.name;
                        degreeSelect.appendChild(opt);
                    });
                });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('#email').on('input', function() {
            const emailInput = $(this).val();
            const emailError = $('#emailError');
            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailInput && !emailPattern.test(emailInput)) {
                emailError.text('Please enter a valid email address');
            } else {
                emailError.text('');
            }
        });
    });
</script>

<script>
    $(document).ready(function () {
        function loadDegrees() {
            let changeType = $('#certificate-select').val();
            let urgentMode = $('#urgent_mode').is(':checked') ? 1 : 0;
    
            $.get("{{ route('filter.degrees') }}", {
                change_type: changeType,
                urgent_mode: urgentMode
            }, function (data) {
                let $select = $('#degree_id');
                $select.empty().append('<option value="">-- Select Degree --</option>');
                $.each(data, function (i, deg) {
                    $select.append('<option value="' + deg.id + '">' + deg.name + '</option>');
                });
            });
        }
    
        // When urgent mode changes
        $('#urgent_mode').on('change', function () {
            $('#urgent_amount_text').toggle($(this).is(':checked'));
            loadDegrees();
        });
    
        // When change type changes
        $('#certificate-select').on('change', function () {
            loadDegrees();
        });
    });
    </script>
    
<script>
    $(document).ready(function() {
        $('#certificates-options').hide();
        $('#certificate-select').on('change', function() {
            var certificateType = $(this).val();
            $('#certificates-options').show();
            $.ajax({
                type: "POST",
                url: "{{ route('getCertificate') }}",
                data: {
                    certificateType: certificateType,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#document-id-div').empty();
                    $('#degree_certificate').empty();
                    $('#degree_certificate').html('<option value="">Select</option>');
                    $.each(response, function(key, value) {
                        $('#degree_certificate').append('<option value="' + value
                            .degree +
                            '">' + value.degree + '</option>');
                    });
                },
            });
        });

        $('#degree_certificate').on('change', function() {
            var certificateType = $('#certificate-select').val();
            var certificate = $('#degree_certificate').val();

            $.ajax({
                type: "POST",
                url: '{{ route('getDocument') }}',
                data: {
                    'certificateType': certificateType,
                    'certificate': certificate,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#document-id-div')
                        .empty(); // Clear the div before appending new elements
                    $.each(response, function(key, value) {
                        $.ajax({
                            type: "POST",
                            url: '{{ route('getDocumentName') }}',
                            data: {
                                'id': value,
                                _token: "{{ csrf_token() }}"
                            },
                            dataType: 'json',
                            success: function(response) {
                                $('#document-id-div').append(
                                    '<div class="mb-3">' +
                                    '<label class="form-label">' +
                                    response.name +
                                    ':</label>' +
                                    '<input type="file" name="document_file[]" class="form-control" accept=".pdf" required>' +
                                    '<input type="hidden" name="document_id[]" value="' +
                                    response.id + '">' +
                                    '<div class="invalid-feedback">Please upload a valid PDF file.</div>' +
                                    '</div>'
                                );

                                $('input[name="document_file[]"]').on(
                                    'invalid',
                                    function() {
                                        $(this).addClass(
                                            'is-invalid'
                                        );
                                    });

                                $('input[name="document_file[]"]').on(
                                    'input',
                                    function() {
                                        if ($(this).val()) {
                                            $(this).removeClass(
                                                'is-invalid'
                                            );
                                        }
                                    });

                                $('#document-id-div').show();
                            },
                        });
                    });
                },
            });
        });

        $(document).on('change', '#courseCategory', function() {

            var course_category = $(this).val();
            $.ajax({
                type: "POST",
                url: '{{ route('getcourse') }}',
                data: {
                    'course_category': course_category,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#courses').empty();
                    $('#courses').html('<option value="">Select</option>');
                    $.each(response, function(key, value) {
                        $('#courses').append('<option value="' + value.name +
                            '">' + value.name + '</option>');
                    });
                    $('#sessions').html(
                        '<option value="">Select Session</option>');
                },
            });
        });

        $(document).on('change', '#courses', function() {

            var course = $(this).val();
            $.ajax({
                type: "POST",
                url: '{{ route('getsession') }}',
                data: {
                    'course': course,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#sessions').empty();
                    $('#sessions').html('<option value="">Select</option>');
                    $.each(response, function(key, value) {
                        $('#sessions').append('<option value="' + value.session +
                            '">' + value.session + '</option>');
                    });
                },
            });
        });
    });
</script>
<script>
    $(document).ready(function() {
        let basePrice = 0;
        let urgentFee = parseFloat("{{ $urgent_mode->amount }}");

        // When urgent mode checkbox is toggled
        $('#urgent_mode').on('change', function() {
            let urgent = this.checked ? 1 : 0;

            $.ajax({
                type: "POST",
                url: "{{ route('getDegreesByUrgent') }}", // new route
                data: {
                    urgent: urgent,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    let $degreeDropdown = $('#degree_id');
                    $degreeDropdown.empty().append(
                        '<option value="">-- Select Degree --</option>');

                    $.each(response.degrees, function(index, degree) {
                        $degreeDropdown.append('<option value="' + degree.id +
                            '">' + degree.name + '</option>');
                    });

                    $('#urgent_amount_text').toggle(urgent === 1);
                    if (!urgent) {
                        $('#total-price-wrapper').hide();
                    }
                }
            });
        });

        // When degree is selected, fetch its price
        $('#degree_id').on('change', function() {
            let degreeId = $(this).val();

            if (degreeId) {
                $.ajax({
                    type: "POST",
                    url: "{{ route('getDegreePrice') }}",
                    data: {
                        degree_id: degreeId,
                        _token: "{{ csrf_token() }}"
                    },
                    dataType: 'json',
                    success: function(response) {
                        basePrice = parseFloat(response.price) || 0;
                        $('#base-price').text(basePrice.toFixed(2));
                        $('#price-display').show();

                        if ($('#urgent_mode').is(':checked')) {
                            $('#total-price').text((basePrice + urgentFee).toFixed(2));
                            $('#total-price-wrapper').show();
                        }
                    }
                });
            } else {
                $('#price-display').hide();
                basePrice = 0;
            }
        });
    });
</script>

<script>
    $(document).ready(function() {
        const inputDate = $('#recive_degree');
        const urgentCheckbox = $('#urgent_mode');
        
        function updateDateValidation() {
            const today = new Date();
            let minDate = new Date();
            
            if (urgentCheckbox.is(':checked')) {
                // Urgent mode: 7 days from today
                minDate.setDate(today.getDate() + 7);
                inputDate.attr('placeholder', 'Date after 7 Days from Today');
            } else {
                // Normal mode: 30 days from today
                minDate.setMonth(today.getMonth() + 1);
                inputDate.attr('placeholder', 'Date after 30 Days from Today');
            }
            
            const formattedMinDate = minDate.toISOString().split('T')[0];
            inputDate.attr('min', formattedMinDate);
        }
        
        // Set initial validation
        updateDateValidation();
        
        // Update validation when urgent mode changes
        urgentCheckbox.on('change', function() {
            updateDateValidation();
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#registrationForm').on('submit', function(e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('checkMobileNumber') }}",
                type: "POST",
                data: {
                    reg_no: $('#reg_no').val(),
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    if (response.success) {
                        $('#certificateTableBody').empty();

                        if (response.certificates.length > 0) {
                            response.certificates.forEach(function(cert) {
                                let paymentStatus = cert.payment === 'completed' ?
                                    '<span class="badge bg-success">Completed</span>' :
                                    '<span class="badge bg-warning">Pending</span>';

                                let actionButton = cert.payment === 'completed' ?
                                    '<button class="btn btn-sm btn-secondary" disabled>Paid</button>' :
                                    `<a href="{{ route('viewCertificate', '') }}/${cert.reg_no}" class="btn btn-sm btn-primary">Make Payment</a>`;

                                let downloadButtons = cert.payment === 'completed' ?
                                    `<div class="btn-group">
                                    <a href="{{ route('generateReceipt', '') }}/${cert.id}" class="btn btn-sm btn-success" title="Download Receipt">
                                        <i class="fas fa-download"></i> Download 
                                    </a>
                                </div>` :
                                    '<span class="text-muted">Not Available</span>';

                                let row = `<tr>                               
                                <td>${cert.course}</td>
                                <td>${cert.certificate}</td>
                               <td>${cert.change_type}</td>
                                <td>${paymentStatus}</td>
                                <td>${actionButton}</td>
                                <td>${downloadButtons}</td>
                            </tr>`;
                                $('#certificateTableBody').append(row);
                            });

                            $('#studentName').text(response.certificates[0].name || 'N/A');
                            $('#studentRegNo').text(response.certificates[0].reg_no ||
                                'N/A');

                            $('#registrationDetails').show();
                        } else {
                            toastr.error(
                                'No certificates found for this registration number.');
                        }
                    }
                },
                error: function() {
                    toastr.error('Error occurred while fetching the details.');
                }
            });
        });
    });
</script>

<!-- Add Font Awesome for icons in the head section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Add some custom styles -->
<style>
    .btn-group .btn {
        margin: 0 2px;
    }

    .btn i {
        margin-right: 5px;
    }
</style>
