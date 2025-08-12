<?php $this->load->view("frontend/header.php");?>


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Economics
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_social_sciences.php">School of Social Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Economics</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Economics</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">Department of Economics came into existence in the first academic session of Mahatma Gandhi Central University, Bihar in 2016. Currently, the Department has one Associate and four Assistant Professors. Along with B.A (Hons), M.A., M.Phil and Ph.D. in Economics, the Department of Economics also offers General Elective courses open to all at undergraduate and postgraduate students of the university under the Choice Based Credit System (CBCS). The Department aims to provide an in-depth study of the theoretical propositions advocated by different schools of economics. The course is designed to go beyond the merely received and established truths and to make students exposed to various heterodox literatures to develop a critical understanding of various theories among them. In order to make the programme more pragmatic, the department aims at enabling the students to link economic theory with historical experience and empirical observation. With gradual expansion, Department of Economics also facilitate research in M.Phil. and Ph.D. programme in various domains of theoretical, empirical, developmental and interdisciplinary areas to be undertaken by students. The important areas of research are Macroeconomics, Financial Economics, Monetary Economics, Public Finance, International Economics, Experimental Economics, Environmental Economics, Industrial Economics, Agriculture Economics, Labour Economics and Development Economics. Moreover, faculty members have published research papers in reputed International and National journals.</p>                       
                    </div>
                </div>               
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_social_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School</a></li>
                <li><a href="department_of_economics_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_economics_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_economics_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_economics_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="16" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Economics - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
