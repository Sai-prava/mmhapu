@include('web.layouts.header')

<style>
    .accordion>dd {
        padding: 20px;
    }
    .custom-list-style li {
        margin-bottom: 15px;
    }
    .hide_show{
        display: none;
    }
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    SC/ST Cell
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> SC/ST Cell</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>SC/ST Cell</span></h2>
                </div>
                                <div class="desc-wrap marquee_text">
                    <dl class="accordion full-width">
                        <dt>
                            <a href="">About the Cell</a>
                        </dt>
                        <dd>
                            <p class="text-justify">Scheduled Castes (SC) and Scheduled Tribes (ST) have been identified as
                                the two most backward groups of Indian Society. They include all the castes,
                                races or tribes, which have been socially, economically and educationally
                                backward. The cell has been established to support and to bring students from
                                such communities in the main stream.</p>
                            <p class="text-justify">The Scheduled Caste (SC) and Scheduled Tribes (ST) Cell promotes the
                                special interests of students in the reserved category. It provides special inputs
                                in areas where the students experience difficulties.</p>
                            <p class="text-justify">The SC/ST cell of the University was established with the purpose to
                                empower the SC/ST students in the university. The university takes special
                                interest in facilitating financial support to students from these communities from
                                government agencies and other sources. They are also encouraged to enroll
                                for career orientation programs, which would equip them with the necessary
                                skills to choose a career option.</p>
                        </dd>
                        <dt>
                            <a href="">Composition of the Cell</a>
                        </dt>
                        <dd>
                            
                        </dd>
                        <dt>
                            <a href="">Functions of the Cell</a>
                        </dt>
                        <dd>
                            <p>According to the UGC Guidelines, following are the functions of the Cell:</p>
                            <ul class="custom-list-style">
                                <li><i class="fa fa-caret-right"></i> To circulate Government of India and Commission’s decisions and to collect
                                    regularly, on an annual basis, information regarding course-wise admissions to
                                    candidates belonging to the Scheduled Castes and Scheduled Tribes in the
                                    Universities and Colleges for different courses, in forms prescribed, by a
                                    stipulated date, and to take follow up action, where required.</li>
                                <li><i class="fa fa-caret-right"></i> To circulate Government of India orders and Commission’s decisions and to
                                    collect information in respect of appointment, training of these communities in
                                    teaching and non-teaching posts in the Universities and Colleges, in suitable
                                    forms by a stipulated date and take follow up action where required.</li>
                                <li><i class="fa fa-caret-right"></i> To collect reports and information regarding the Government of India orders on
                                    the various aspects of education, training and employment of Scheduled Castes
                                    and Scheduled Tribes candidates, for evolving new policies or modifying
                                    existing policy by the Commission.</li>
                                <li><i class="fa fa-caret-right"></i> To analyze the information collected above and prepare reports and digests for
                                    onward transmission to the Ministry of Human Resource
                                    Development/University Grants Commission and such other authorities as may
                                    be required.</li>
                                <li><i class="fa fa-caret-right"></i> To deal with representations received from Scheduled Castes and Scheduled
                                    Tribes candidates regarding their admission, recruitment, promotion and other
                                    similar matters in Universities/Colleges.</li>
                                <li><i class="fa fa-caret-right"></i> To monitor the working of the remedial coaching scheme, if approved in the
                                    university.</li>
                                <li><i class="fa fa-caret-right"></i> To function as a Grievances Redressal Cell for the Grievances of SC/ST
                                    students and employees of the university and render them necessary help in
                                    solving their academic as well as administrative problems.</li>
                                <li><i class="fa fa-caret-right"></i> To maintain a register for employment of SCs/STs in the University and
                                    Colleges for the candidates belonging to SC/ST communities for various posts
                                    in the university/colleges.</li>
                                <li><i class="fa fa-caret-right"></i> Any other work assigned from time to time to promote higher education among
                                    these two communities suffering economic, social and education deprivations.</li>
                                <li><i class="fa fa-caret-right"></i> The SC/ST Cell exclusively looks after the work related to SC/STs matters and
                                    no other work is assigned to the Cell.</li>
                            </ul>
                        </dd>
                        <dt>
                            <a href="">Information Booklet</a>
                        </dt>
                        <dd>

                        </dd>
                        <dt>
                            <a href="">Contact us</a>
                        </dt>
                        
                        <dt>
                            <a href="">Lodge your Complaint</a>
                        </dt>
                        <dd>
                            <button class="btn btn-primary" id="btn_students">Link for Students</button>
                        </dd>
                    </dl>                   
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-xs-12">               
                <div class="hide_show" id="div_students">
                    <form class="StudentComplaintForm" method="POST" action="sc_st_code.php" enctype="multipart/form-data">
                        <input type="hidden" name="form_student" id="form_student" value="student" />
                        <div class="row">
                            <div class="col-md-12">
                                <h3>Students</h3><hr></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name of the student</label>
                                    <input type="text" name="student_name" id="student_name" class="form-control" required maxlength="50"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="father_name">Father's Name</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control" required maxlength="50"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact">Contact No</label>
                                    <input type="text" name="contact_no" id="contact_no" class="form-control" required minlength="10" maxlength="10"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email Id</label>
                                    <input type="email" name="email" id="email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="department">Name of Department / Study Centre</label>
                                    <select name="department" id="department" class="form-control" required>
                                        <option value="">Select Department / Centre Name</option>
                                                                                        <option value="1">Department of Commerce</option>
                                                                                                <option value="2">Department of Management Sciences</option>
                                                                                                <option value="3">Department of Computer Science & Information Technology</option>
                                                                                                <option value="4">Department of Library and Information Science</option>
                                                                                                <option value="5">Department of Media Studies</option>
                                                                                                <option value="6">Department of Educational Studies</option>
                                                                                                <option value="7">Department of English</option>
                                                                                                <option value="8">Department of Hindi</option>
                                                                                                <option value="9">Department of Sanskrit</option>
                                                                                                <option value="10">Department of Biotech</option>
                                                                                                <option value="11">Department of Botany</option>
                                                                                                <option value="12">Department of Zoology</option>
                                                                                                <option value="13">Department of Chemistry</option>
                                                                                                <option value="14">Department of Mathematics</option>
                                                                                                <option value="15">Department of Physics</option>
                                                                                                <option value="16">Department of Economics</option>
                                                                                                <option value="17">Department of Gandhian and Peace Studies</option>
                                                                                                <option value="18">Department of Political Science</option>
                                                                                                <option value="19">Department of Social Work</option>
                                                                                                <option value="20">Department of Sociology</option>
                                                                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="enrollment_no">Enrollment No</label>
                                    <input type="text" name="enrollment_no" id="enrollment_no" class="form-control" required maxlength="15"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="prog_sem">Programme Name with semester</label>
                                    <input type="text" name="prog_sem" id="prog_sem" class="form-control" required maxlength="50"/>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="complaint_details">Complaint Detail</label>
                                    <textarea name="complaint_details" id="complaint_details" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment1">Attachment 1</label>
                                    <input type="file" name="attachment1" id="attachment1" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment2">Attachment 2</label>
                                    <input type="file" name="attachment2" id="attachment2" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment3">Attachment 3</label>
                                    <input type="file" name="attachment3" id="attachment3" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment4">Attachment 4</label>
                                    <input type="file" name="attachment4" id="attachment4" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="save" id="save" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form>   
                </div>
                <div class="hide_show" id="div_employee">
                    <form class="EmployeeComplaintForm" method="POST" action="sc_st_code.php" enctype="multipart/form-data">
                        <input type="hidden" name="form_employee" id="form_employee" value="employee" />
                        <div class="row">
                            <div class="col-md-12"><h3>Employees</h3><hr></div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name of Complainant</label>
                                    <input type="text" name="emp_name" id="emp_name" class="form-control" required maxlength="50"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="father_name">Father's Name</label>
                                    <input type="text" name="emp_father_name" id="emp_father_name" class="form-control" required maxlength="50"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="contact">Contact No</label>
                                    <input type="text" name="emp_contact_no" id="emp_contact_no" class="form-control" required minlength="10" maxlength="10"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email Id</label>
                                    <input type="email" name="emp_email" id="emp_email" class="form-control" required/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="department">Name of Department / Study Centre</label>
                                    <select name="emp_department" id="emp_department" class="form-control" required>
                                        <option value="">Select Department / Centre Name</option>
                                                                                        <option value="1">Department of Commerce</option>
                                                                                                <option value="2">Department of Management Sciences</option>
                                                                                                <option value="3">Department of Computer Science & Information Technology</option>
                                                                                                <option value="4">Department of Library and Information Science</option>
                                                                                                <option value="5">Department of Media Studies</option>
                                                                                                <option value="6">Department of Educational Studies</option>
                                                                                                <option value="7">Department of English</option>
                                                                                                <option value="8">Department of Hindi</option>
                                                                                                <option value="9">Department of Sanskrit</option>
                                                                                                <option value="10">Department of Biotech</option>
                                                                                                <option value="11">Department of Botany</option>
                                                                                                <option value="12">Department of Zoology</option>
                                                                                                <option value="13">Department of Chemistry</option>
                                                                                                <option value="14">Department of Mathematics</option>
                                                                                                <option value="15">Department of Physics</option>
                                                                                                <option value="16">Department of Economics</option>
                                                                                                <option value="17">Department of Gandhian and Peace Studies</option>
                                                                                                <option value="18">Department of Political Science</option>
                                                                                                <option value="19">Department of Social Work</option>
                                                                                                <option value="20">Department of Sociology</option>
                                                                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="designation">Designation</label>
                                    <input type="text" name="emp_designation" id="emp_designation" class="form-control" required maxlength="50"/>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="employee_id">Employee ID</label>
                                    <input type="text" name="emp_employee_id" id="emp_employee_id" class="form-control" required maxlength="50"/>
                                </div>
                            </div>                            
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="complaint_details">Complaint Detail</label>
                                    <textarea name="emp_complaint_details" id="emp_complaint_details" class="form-control" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment1">Attachment 1</label>
                                    <input type="file" name="emp_attachment1" id="emp_attachment1" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment2">Attachment 2</label>
                                    <input type="file" name="emp_attachment2" id="emp_attachment2" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment3">Attachment 3</label>
                                    <input type="file" name="emp_attachment3" id="emp_attachment3" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="attachment4">Attachment 4</label>
                                    <input type="file" name="emp_attachment4" id="emp_attachment4" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label FOR="captcha" class="control-label">Captcha</label>
                                    <img id="img" src="captcha.php">
                                    <a class="refresh" href=""><img style="cursor: pointer;" id="reload" src="images/reload.png"></a>
                                    <input name="captcha1" id="captcha1" placeholder="Calculate and Write Answer Here" class="form-control" type="text" autocomplete="off" required>
                                    <span class="text-danger"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" name="save" id="save" value="Submit" class="btn btn-primary">
                            </div>
                        </div>
                    </form> 
                </div>
            </div>
            
        </div>
    </div>
</section>



@include('web.layouts.footer')



<script type="text/javascript">
    $(document).ready(function () {
        document.title = "SC/ST Cell -MMHAPU, Bihar";
    });

</script>
<script>
    $(document).ready(function () {
        $("body").on("click", "#btn_students", function () {
            $("#div_students").removeClass("hide_show");
            $("#div_employee").addClass("hide_show");
        });

        $("body").on("click", "#btn_employees", function () {
            $("#div_students").addClass("hide_show");
            $("#div_employee").removeClass("hide_show");
        });

        $('#attachment1').change(function () {
            var file_name = $(this).val();
            var fileExtension = file_name.substr((file_name.lastIndexOf('.') + 1));
            var extension_array = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'pdf', 'PDF'];
            if (extension_array.indexOf(fileExtension) == -1)
            {
                alert("Please upload only JPG/PNG/PDF file.");
                document.getElementById("attachment1").value = null;
            }
            if (Math.round(document.getElementById('attachment1').files[0].size / 1024) > 1024)
            {
                alert("File should be less than 1 MB.");
                document.getElementById("attachment1").value = null;
                document.getElementById("attachment1").focus();
            }
        });

        $('#attachment2').change(function () {
            var file_name = $(this).val();
            var fileExtension = file_name.substr((file_name.lastIndexOf('.') + 1));
            var extension_array = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'pdf', 'PDF'];
            if (extension_array.indexOf(fileExtension) == -1)
            {
                alert("Please upload only JPG/PNG/PDF file.");
                document.getElementById("attachment2").value = null;
            }
            if (Math.round(document.getElementById('attachment2').files[0].size / 1024) > 1024)
            {
                alert("File should be less than 1 MB.");
                document.getElementById("attachment2").value = null;
                document.getElementById("attachment2").focus();
            }
        });

        $('#attachment3').change(function () {
            var file_name = $(this).val();
            var fileExtension = file_name.substr((file_name.lastIndexOf('.') + 1));
            var extension_array = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'pdf', 'PDF'];
            if (extension_array.indexOf(fileExtension) == -1)
            {
                alert("Please upload only JPG/PNG/PDF file.");
                document.getElementById("attachment3").value = null;
            }
            if (Math.round(document.getElementById('attachment3').files[0].size / 1024) > 1024)
            {
                alert("File should be less than 1 MB.");
                document.getElementById("attachment3").value = null;
                document.getElementById("attachment3").focus();
            }
        });

        $('#attachment4').change(function () {
            var file_name = $(this).val();
            var fileExtension = file_name.substr((file_name.lastIndexOf('.') + 1));
            var extension_array = ['jpg', 'jpeg', 'png', 'JPG', 'JPEG', 'PNG', 'pdf', 'PDF'];
            if (extension_array.indexOf(fileExtension) == -1)
            {
                alert("Please upload only JPG/PNG/PDF file.");
                document.getElementById("attachment4").value = null;
            }
            if (Math.round(document.getElementById('attachment4').files[0].size / 1024) > 1024)
            {
                alert("File should be less than 1 MB.");
                document.getElementById("attachment4").value = null;
                document.getElementById("attachment4").focus();
            }
        });
    });
</script>