@extends('admin.layout.index')

@section('title')
    Student Grievance Redressal
@endsection

@section('content')
    {{-- <link rel="stylesheet" href="{{ asset('web/css/grievance.css') }}"> --}}

    <div class="jiform-create">

        <form action="{{ route('storeGrievances') }} " method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <center>
                                    <p style="font-size:25px;color:white">Student Grievance Form</p>
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
                                                        value="{{ $viewGrievances->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group field-jiform-email required">
                                                    <label class="control-label">E-mail ID</label>
                                                    <input type="email" class="form-control" name="email"
                                                        value="{{ $viewGrievances->email }}">
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group required">
                                                    <label class="control-label">Gender</label>
                                                    <input type="gender" class="form-control"
                                                        value="{{ $viewGrievances->gender }}">
                                                </div>
                                            </div>
                                            <div class="col-md-2 mb-2">
                                                <div class="form-group required">
                                                    <label class="control-label">Mobile No.</label>
                                                    <input type="text" class="form-control" name="mobile"
                                                        value="{{ $viewGrievances->mobile }}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label class="control-label">Enrolment Number</label>
                                                    <input type="text" class="form-control" name="enrolment"
                                                        value="{{ $viewGrievances->enrolment }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-2">
                                                <div class="form-group">
                                                    <label class="control-label">Department</label>
                                                    <input type="text" class="form-control" name="department"
                                                        value="{{ 'Department of ' . $viewGrievances->department }}">
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Select Center</label>
                                                    <input type="text" class="form-control" name="department"
                                                        value="{{ $viewGrievances->center }}">

                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label class="control-label">Course</label>
                                                    <input type="text" class="form-control" name="department"
                                                        value="{{ $viewGrievances->course }}">
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
                                                                value="{{ $viewGrievances->present_address }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">State</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $viewGrievances->getState->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Pin Code</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $viewGrievances->present_pincode }}">
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
                                                                value="{{ $viewGrievances->permanent_address }}">
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">State</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $viewGrievances->permanentState->name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-2">
                                                        <div class="form-group">
                                                            <label class="control-label">Pin Code</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $viewGrievances->permanent_pincode }}">
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
                                            <input type="text" class="form-control"
                                                value="{{ $viewGrievances->category }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Other Grievance Category (*If
                                                Applicable)</label>
                                            <input type="text" class="form-control"
                                                value="{{ $viewGrievances->other_grievance_category }}"
                                                placeholder="Other Grievance Category">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Grievance Description (maximum 150
                                                words)</label>
                                            <textarea class="form-control" name="grievance_description" rows="6"
                                                placeholder="Write in brief of your grievance."> {{ $viewGrievances->grievance_description }} </textarea>
                                        </div>
                                    </div>


                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <div class="form-group">
                                            <label class="control-label">Want to Upload Document ?</label>
                                            <input type="text" class="form-control"
                                                value="{{ $viewGrievances->uploadCheck }}">
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-6 mb-2" id="file">
                                        <div class="form-group">
                                            <label class="control-label">Upload Document(if Yes)
                                                (File Type: pdf, png, jpg, jpeg, doc, docx. File Size: 500KB)</label>
                                            <input type="file" name="doc" maxlength="512">
                                        </div>
                                    </div> --}}
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
                                            <label class="control-label">Proposed Solution (maximum 50 words)</label>
                                            <textarea class="form-control" name="proposed_solution" rows="6"
                                                placeholder="Please write proposed solution."> {{ $viewGrievances->proposed_solution }} </textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
        </form>
    </div>
@endsection
