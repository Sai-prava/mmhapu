<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of English
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_Humanities_and_Languages.php">School of Humanities & Languages</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of English</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> English</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">Department of English was established since the inception of the University in 2016. At present, the Department consists of 05 regular Faculties well-versed in language and literature.  English is one of the most widely spoken languages in the world and is the bridge between different cultures and nations. Most of the masterpieces in world literature are written either in English or translated into it. English is also one of the necessary requirements in the emerging world of globalisation and modernization. The Department of English in MGCUB recognizes the significance of English language and literature. Through its Ability Enhancement course, the Department seeks to make the students adept in the Listening, Speaking, Reading and Writing (LSRW) skills in the language and through BA (Honours) English programme, it seeks to cultivate a taste for literatures in English and to develop their critical thinking. The English Department is committed to ignite the creative and critical sense and develop the  sensibility of students and research scholars. The sole vision and mission of the Department is to enlighten right thinking of learners/researchers so that they may contribute greatly and tirelessly for the welfare of humanity.</p>
                        
                    </div>
                </div>               
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_Humanities_and_Languages.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page </a></li>
                <li><a href="department_of_english_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_english_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_english_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_english_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="7" /><button type="submit" style="display: none;"></button></form>
<script>
    function viewFun() {
        $('#frm').submit();
    }
</script>        </div>
    </div>
</section>

 <?php $this->load->view("frontend/footer.php");?>



<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Department of English - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>