<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{Auth::user()->studentProfile->first_name .' '. Auth::user()->studentProfile->last_name}} | Admit Card</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/global_assets/css/icons/icomoon/styles.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('user_asset/assets/css/toastr.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script src="{{asset('user_asset/global_assets/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/main/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/loaders/blockui.min.js')}}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="{{asset('user_asset/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/extensions/jquery_ui/interactions.min.js')}}"></script>

	<script src="{{asset('user_asset/global_assets/js/plugins/tables/datatables/datatables.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/form_select2.js')}}"></script>

	<script src="{{asset('user_asset/global_assets/js/plugins/forms/selects/select2.min.js')}}"></script>
    <script src="{{asset('user_asset/global_assets/js/plugins/forms/styling/uniform.min.js')}}"></script>
    
	<script src="{{asset('user_asset/global_assets/js/plugins/visualization/d3/d3.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/forms/styling/switchery.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/ui/moment/moment.min.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/plugins/pickers/daterangepicker.js')}}"></script>

	<script src="{{asset('user_asset/assets/js/app.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/datatables_basic.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/form_layouts.js')}}"></script>
	<script src="{{asset('user_asset/global_assets/js/demo_pages/dashboard.js')}}"></script>
	<!-- /theme JS files -->
	
	<!-- Theme JS files -->

	<script src="{{asset('user_asset/global_assets/js/demo_pages/job_list.js')}}"></script>
	<!-- /theme JS files -->
    <style>
        .bordered-card {
            border: 10px;
            border-style: double;
        }
        .border-single {
            border: 2px;
            border-style: solid;
        }
        .border-single-rounded {
            border-radius: 10px;
        }
        .border-color {
            border-color: rgb(36, 165, 174);
        }
        .border-rounded {
            border: 3px;
            border-style: dotted;
        }
        .font-sizes {
            font-weight: bolder;
            font-size: 20px;
            width: 100%;
        }
    </style>
</head>

<body>
	<!-- Page content -->
	<div class="page-content">


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body bordered-card">
                                <div class="row">
                                    <div class="col-3">
                                        <img src="{{asset("uploads/logo/logo.png")}}"  style="height:200px;" alt="">
                                    </div>
                                    <div class="col-6">
                                        <h1 class="text-center" style="font-size:35px;" ><strong><u>ADMIT CARD</u></strong> </h1>
                                        <br>
                                        <h1 class="text-center" ><strong>Madhusudan Law University </strong> </h1> 
                                        <br>
                                        <h1 class="text-center" ><strong>{{Auth::user()->entrance_fee->course->title}} </strong> </h1> 
                                       <br>
                                        <h1 class="text-center" ><strong>Online Admission Test </strong> </h1> 
                                    </div>
                                </div>
                                {{-- <div class="row">
                                    <div class="col-md-12">
                                        <h1 class="text-center" style="font-size:35px;" ><strong><u>ADMIT CARD</u></strong> </h1>
                                    </div>
                                </div> --}}
                                {{-- <hr> --}}
                                <div class="row border-single">
                                    <div class="col-md-12">
                                        <h1 class="text-center">
                                            Exam Date: {{\Carbon\Carbon::parse(Auth::user()->entrance_fee->exam_date)->format('d M , Y')}}
                                        </h1>
                                    </div>
                                </div>
                                {{-- <hr> --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <div class="col-7 ml-4" style="margin-top:30px">
                                                
                                                <h2>Roll No.         : <strong>{{Auth::user()->studentProfile->roll_number}}</strong></h2>
                                                <h2>Candidate's Name : <strong>{{Auth::user()->studentProfile->first_name .' '.Auth::user()->studentProfile->middle_name.' '.Auth::user()->studentProfile->last_name}}</strong></h2>
                                                <h2>Date of Birth    : <strong>{{Auth::user()->studentProfile->date_of_birth}}</strong></h2>
                                                <h2>Parent/Guardian Name    : <strong>{{Auth::user()->studentProfile->father_first_name .' '.Auth::user()->studentProfile->father_middle_name.' '.Auth::user()->studentProfile->father_last_name}}</strong></h2>
                                            </div>
                                            <div class="col-4 text-right">
                                                @if(Auth::user()->getPassportPhoto())
                                                <img src="{{asset(Auth::user()->getPassportPhoto()->document)}}" height="150" width="150" alt="">
                                                @endif
                                                <br>
                                                <br>
                                                @if(Auth::user()->getSignaturePhoto())
                                                <img src="{{asset(Auth::user()->getSignaturePhoto()->document)}}" height="80" width="200" alt="">
                                                @endif
                                            </div>

                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12  ml-4">
                                        <h1 >
                                            <strong>Examination Time Schedule</strong>
                                            
                                        </h1>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-2 ml-4 mr-4 ">
                                    </div>
                                    <div class="col-6">
                                        <table class="border-single font-sizes">
                                            <tbody>
                                                {{-- <tr class="border-single">
                                                    <td colspan="3" class="text-center">
                                                        DATE OF EXAMINATION: :<strong>14.01.2024 (SUNDAY)</strong>
                                                        <br>
                                                        Reporting Time : 09.00 A.M.
                                                    </td>
                                                </tr> --}}
                                                {{-- <tr class="border-single">
                                                    <td colspan="3" class="text-center">
                                                        TIME SCHEDULE
                                                    </td>
                                                </tr> --}}
                                                <tr class="border-single">
                                                    <td  class="border-single text-center">{{Auth::user()->centerMapping()->shift ? Auth::user()->centerMapping()->shift->name : ''}}</td>
                                                    <td  class="border-single text-center">{{Auth::user()->centerMapping()->shift ? Auth::user()->centerMapping()->shift->time_from : ''}} to {{Auth::user()->centerMapping()->shift ? Auth::user()->centerMapping()->shift->time_to : ''}} </td>
                                                    {{-- <td  class="border-single text-center">ENGLISH</td> --}}
                                                </tr>
                                                {{-- <tr class="border-single">
                                                    <td  class="border-single text-center">2nd Sitting</td>
                                                    <td  class="border-single text-center">12.30 P.M. to 1.3O P.M.</td>
                                                    <td  class="border-single text-center">GENERAL AWARENESS AND TEST OF REASONING</td>
                                                </tr>
                                                <tr class="border-single">
                                                    <td  class="border-single text-center">3rd Sitting</td>
                                                    <td  class="border-single text-center">2.30 P.M. to 4.30 P.M 	</td>
                                                    <td  class="border-single text-center">MATHEMATICS</td>
                                                </tr> --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12 border-single border-color border-single-rounded">
                                        <h2 class="text-center"><strong><u>Test Centre & Address</u></strong></h2>
                                        <h2 class="text-center"><strong>{{Auth::user()->centerMapping()->center->name.','.Auth::user()->centerMapping()->center->address}}</strong></h2>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:50px;">
                                    <div class="col-md-6">
                                        <h2 class="text-left"><strong>Signature of the Candidate </strong></h2>
                                    </div>
                                    <div class="col-md-6">
                                        <h2  class="text-right"><strong>Signature of the Invigilator</strong></h2>
                                    </div>
                                </div>
                                <div class="row" >
                                    <div class="col-md-12">
                                        <h3 style="color:brown"><strong>IMP: <i>This admission to the Online Exam is purely provisional subject to determination of your eligibility in terms of the advertisement.</i></strong></h3>
                                    </div>
                                </div>
                                <div class="row border-single border-color" style="margin-top:10px;">
                                    <div class="col-md-12 ">
                                        <h2 class="text-center"><strong><u>Instructions to the Candidate</u></strong></h2>
                                    </div>
                                    <div class="col-md-12">
                                        <h5>
                                            1. Candidates shall report at the Test Centre at least one hour before the commencement of the examination.
                                        </h5>
                                        <h5>
                                            2. Candidates will not be permitted to enter the Test Centres 15 minutes after the commencement of the examination.
                                        </h5>
                                        <h5>
                                            3.	Candidates shall bring any authorized original Identity Card (Aadhar Card, Voter ID card, PAN Card).                                        </h5>
                                        <h5>
                                            4.	Candidates shall not leave the Examination Hall till the completion of the examination.                                        </h5>
                                        <h5>
                                            5.	Candidates shall carry only: Admit Card, Black/Blue Ball Point Pen and Identity Card.                                        </h5>
                                        <h5>
                                            6.	Possession of Electronic device in any form is strictly prohibited in the Examination Centre and in the Examination Hall.                                        </h5>
                                        <h5>
                                            7.	The use of any unfair means by the candidates shall result in the cancellation of his/her examination.
                                        </h5>
                                        <h5>
                                            8.	Impersonation is an offence and the candidate, apart from disqualification, will be liable to be prosecuted.
                                        </h5>
                                        <h5>
                                            9.	The Candidates are required to follow COVID Protocol and instructions of the Invigilators. Candidates must wear face mask and maintain social distancing in the Test Centres and carry sanitizer and water in transparent bottles.                                        </h5>
                                        <h5>
                                            10.	Any infringement of these instructions will entail disciplinary action including ban from the present and future examinations.                                        </h5>
                                        {{-- <h5>
                                            8. <strong><u>The Candidates are required to fill-up & carefully darken Roll no. and Test Booklet Series in the Answer sheet at the
                                                appropriate places & Answer Sheet Serial no. in the attendance sheets otherwise the answer sheet is liable for
                                                rejection.</u></strong>
                                        </h5> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                    </div>
                </div>

			</div>
			<!-- /content area -->



		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


	<script src="{{asset('user_asset/assets/js/toastr.js')}}"></script>
    <script>
        window.print();
    </script>
</body>
</html>
