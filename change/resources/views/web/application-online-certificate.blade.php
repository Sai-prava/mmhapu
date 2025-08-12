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
        width:40%;
        margin:auto;
        border:1px solid #F6F5F5;
        padding-left:40px;
        padding-right:30px;
        box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }

    input.form-control,
    select.form-control {
        border: 1px solid #ced4da;
        border-radius: 5px;
        padding: 10px;
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

<section class="section-gap">
    <div class="container">
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
                            Applied.Make Payment</a>

                        <a href="#reciptModal" data-bs-toggle="modal" class="btn btn-info squeeze-btn">Download Receipt</a>
                    </div>

                    <!-- receiptModal Structure -->
                    <div class="modal fade" id="reciptModal" tabindex="-1" aria-labelledby="reciptModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="reciptModalLabel">Enter Roll Number</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form action="{{ route('checkReceipt') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="mobileNumber" class="form-label">Roll No.</label>
                                            <input type="text" name="rollno" id="rollno" class="form-control"
                                                placeholder="Enter your roll number" required>
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
                                                placeholder="Enter your roll number" required>
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
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="applyModalLabel">Enter Roll Number</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Form -->
                                    <form action="{{ route('checkMobileNumber') }}" method="POST">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="mobileNumber" class="form-label">Roll No.</label>
                                            <input type="text" class="form-control" name="rollno"
                                                placeholder="Enter your roll number" required>
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
                    <form id="paymentForm" action="{{ route('certificateStore') }} " method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="panel-body mt-4">
                            <div class="form-group row" >
                                <label for="registration_number"
                                    class="col-sm-6 col-form-label text-right">Registration
                                    No. :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="reg_no"
                                        placeholder="University Registration Number" required
                                        value="{{ old('reg_no') }}">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="roll_number" class="col-sm-6 col-form-label text-right">Roll No. :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="roll_no"
                                        placeholder="University Roll Number" required value="{{ old('roll_no') }}">
                                    @error('roll_no')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="name" class="col-sm-6 col-form-label text-right">Name:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="name"
                                        placeholder="Full Name In English" required value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">नाम :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="hindi_name"
                                        placeholder="Full Name In Hindi" value="{{ old('hindi_name') }}">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Father Name
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="father_name"
                                        placeholder="Father Name" value="{{ old('father_name') }}">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Mother Name
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="mother_name"
                                        placeholder="Mother Name" value="{{ old('mother_name') }}">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Adharcard Number
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="adhar_number"
                                        placeholder="Adharcard Number" value="{{ old('adhar_number') }}">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="hindi_name" class="col-sm-6 col-form-label text-right">Apaar ID
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="apaar_id"
                                        placeholder="APAAR ID" value="{{ old('apaar_id') }}">
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="document" class="col-sm-6 col-form-label text-right">
                                    Document / ID Proof :</label>
                                <div class="col-sm-12">
                                        <input type="file" class="form-control" name="document"
                                        placeholder="Enter Document Details" value="{{ old('document') }}">
                                        <span style="color: red;">(Passport, Aadhaar, PAN Card)</span>
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="gender" class="col-sm-6 col-form-label text-right">Gender:</label>
                                <div class="col-sm-12">
                                    <select class="form-control" name="gender" required>
                                        <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>
                                            Female
                                        </option>
                                        <option value="Other" {{ old('gender') == 'Other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" >
                                <label for="email" class="col-sm-6 col-form-label text-right">Email:</label>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" name="email"
                                        placeholder="Enter Email" required
                                        value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="mobile" class="col-sm-6 col-form-label text-right">Mobile:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="number"
                                        placeholder="10 digit Mobile Number" required value="{{ old('number') }}">
                                    @error('number')
                                        <span class="text-danger"> {{ $message }} </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="Certificate" class="col-sm-6 col-form-label text-right">Request
                                    For:</label>
                                <div class="col-sm-12">
                                    <select name="certificate" class="form-control">
                                        @foreach ($degree_certificate as $data)
                                            <option value="{{ $data->degree }}">{{ $data->degree }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="College/Dept"
                                    class="col-sm-6 col-form-label text-right">College/Dept.:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="college"
                                        placeholder="Name of the College / University Department" required
                                        value="{{ old('college') }}">
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="session" class="col-sm-6 col-form-label text-right">Session :
                                </label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="session"
                                        placeholder="Session in the format 2014-2017" required
                                        value="{{ old('session') }}">
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="passing_year" class="col-sm-6 col-form-label text-right">Year of Passing
                                    :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="passing_year"
                                        placeholder="Year of Passing" required value="{{ old('passing_year') }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="recive_degree" class="col-sm-6 col-form-label text-right">Date to Receive
                                    Degree :</label>
                                <div class="col-sm-12">
                                    <input type="date" class="form-control" name="recive_degree"
                                        placeholder="Date after 30 Days from Today" required
                                        value="{{ old('recive_degree') }}">
                                </div>
                            </div>

                            <div class="form-group row" id="mode" >
                                <label for="mobile" class="col-sm-6 col-form-label text-right">Mode of Receive
                                    Degree :</label>
                                <div class="col-sm-12">
                                    <Select name="recive_mode" id="recive_mode" class="form-control">
                                        <option value="Self Collect"
                                            {{ old('recive_mode') == 'Self Collect' ? 'selected' : '' }}>Self Collect
                                        </option>
                                        <option value="By Post"
                                            {{ old('recive_mode') == 'By Post' ? 'selected' : '' }}>By Post</option>
                                    </Select>
                                </div>
                            </div>

                            <div class="form-group row" id="address" >
                                <label for="address" class="col-sm-6 col-form-label text-right">Address :</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" name="address"
                                        placeholder="Complete Address with Pin Code" value="{{ old('address') }}">
                                </div>
                            </div>
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