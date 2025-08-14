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

    .form-group.row .col-sm-10 {
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

    .razorpay-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .razorpay-payment-button {
        background-color: #0d6efd;
        /* Bootstrap Primary Color */
        color: white;
        border: none;
        padding: 10px 20px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
    }

    .razorpay-payment-button:hover {
        background-color: #0b5ed7;
    }
</style>

@include('web.layouts.header')

<section class="section-gap">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading text-center">
                        <h4 class="panel-title" style="color: #fff">Online Request for Degree
                            Certificate/Provisional
                            Certificate/Marks sheet/Migration from Universitites of Bihar</h4>
                    </div>
                    <div class="panel-body mt-4">
                        <div class="form-group row">
                            <label for="registration_number" class="col-sm-2 col-form-label text-right">Registration
                                No. :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="reg_no"
                                    placeholder="University Registration Number" required
                                    value="{{ $certificate->reg_no }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="roll_number" class="col-sm-2 col-form-label text-right">Roll No. :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="roll_no"
                                    placeholder="University Roll Number" required value="{{ $certificate->roll_no }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label text-right">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name"
                                    placeholder="Full Name In English" required value="{{ $certificate->name }}"
                                    disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hindi_name" class="col-sm-2 col-form-label text-right">??? :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="hindi_name"
                                    placeholder="Full Name In Hindi" value="{{ $certificate->hindi_name }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hindi_name" class="col-sm-2 col-form-label text-right">Father Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="father_name" placeholder="Father Name"
                                    value="{{ $certificate->father_name }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hindi_name" class="col-sm-2 col-form-label text-right">Mother Name :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mother_name" placeholder="Mother Name"
                                    value="{{ $certificate->mother_name }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hindi_name" class="col-sm-2 col-form-label text-right">Adharcard Number
                                :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="adhar_number"
                                    placeholder="Adharcard Number" value="{{ $certificate->adhar_number }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="hindi_name" class="col-sm-2 col-form-label text-right">Apaar ID
                                :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="apaar_id" placeholder="APAAR ID"
                                    value="{{ $certificate->apaar_id }}" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="gender" class="col-sm-2 col-form-label text-right">Gender:</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="gender" required disabled>
                                    <option value="Male" {{ $certificate->gender == 'Male' ? 'selected' : '' }}>
                                        Male
                                    </option>
                                    <option value="Female" {{ $certificate->gender == 'Female' ? 'selected' : '' }}>
                                        Female
                                    </option>
                                    <option value="Other" {{ $certificate->gender == 'Other' ? 'selected' : '' }}>
                                        Other
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label text-right">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email"
                                    placeholder="Email For Any Type Of Notification" required
                                    value="{{ $certificate->email }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-2 col-form-label text-right">Mobile:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="number"
                                    placeholder="10 digit Mobile Number" value="{{ $certificate->number }}" disabled>
                                @error('number')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Certificate" class="col-sm-2 col-form-label text-right">Request
                                For:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control"
                                    value="{{ $certificate->degree ? $certificate->degree->name : 'N/A' }}" disabled>

                                @foreach ($degree_certificate as $data)
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="College/Dept"
                                class="col-sm-2 col-form-label text-right">College/Dept.:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="college"
                                    placeholder="Name of the College / University Department" required
                                    value="{{ $certificate->college }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Course Category:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="course" placeholder="Enter Course"
                                    value="@if ($certificate->getCourseCategory) {{ $certificate->getCourseCategory->name }} @endif"
                                    disabled>
                                @error('course')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-2 col-form-label text-right">Course:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="course" placeholder="Enter Course"
                                    value="{{ $certificate->course }}" disabled>
                                @error('course')
                                    <span class="text-danger"> {{ $message }} </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="session" class="col-sm-2 col-form-label text-right">Session :
                            </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="session"
                                    placeholder="Session in the format 2014-2017" required
                                    value="{{ $certificate->session }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="passing_year" class="col-sm-2 col-form-label text-right">Year of Passing
                                :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="passing_year"
                                    placeholder="Year of Passing" required value="{{ $certificate->passing_year }}"
                                    disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="recive_degree" class="col-sm-2 col-form-label text-right">Date to Receive
                                Degree :</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="recive_degree"
                                    placeholder="Date after 30 Days from Today" required
                                    value="{{ $certificate->recive_degree }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row" id="mode">
                            <label for="mobile" class="col-sm-2 col-form-label text-right">Mode of Receive
                                Degree :</label>
                            <div class="col-sm-10">
                                <Select name="recive_mode" id="recive_mode" class="form-control" disabled>
                                    <option value="Self Collect"
                                        {{ $certificate->recive_mode == 'Self Collect' ? 'selected' : '' }}>Self
                                        Collect
                                    </option>
                                    <!-- <option value="By Post"
                                        {{ $certificate->recive_mode == 'By Post' ? 'selected' : '' }}>By
                                        Post</option> -->
                                </Select>
                            </div>
                        </div>

                        <!-- <div class="form-group row" id="address">
                            <label for="address" class="col-sm-2 col-form-label text-right">Address :</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address"
                                    placeholder="Complete Address with Pin Code" value="{{ $certificate->address }}"
                                    disabled>
                            </div>
                        </div> -->
                        <form class="razorpay-container" action="{{ route('razorpay.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="certificate_id" value="{{ $certificate->id }}">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        // Function to show/hide address field based on selected mode
        function toggleAddressField() {
            var mode = $('#recive_mode').val();
            if (mode === 'By Post') {
                $('#address').show();
            } else {
                $('#address').hide();
            }
        }

        // Initial check on page load
        toggleAddressField();

        // Event listener for changes in the dropdown
        $('#recive_mode').on('change', function() {
            toggleAddressField();
        });
    });
</script>
