<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Chemistry
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_physical_sciences.php">School of Physical Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Chemistry</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Chemistry </h2>
                    <ul class="custom-list-style">
                           <li class="mb-10">
                            <span>&nbsp;<a href="download_brochure.php" 
                               class="round-rectangle" style="margin-left:780px;">Download Brochure</a></span>
                           </li>
                       </ul>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">Chemistry is manifested everywhere starting from air to water to underground. It is necessary to understand the chemistry of nature that can help to mimic the natural chemical process to improve quality of human life and environment. Its knowledge enables a person to understand pros and cons of wide range materials frequently used in daily life. The enriched understanding of chemistry gives opportunity to join various sectors (chemical & pharmaceuticals, oil and gas, water testing, environmental and forensic laboratories etc.). The department has currently seven faculty members who have experience in academia/research/industry both India and abroad (USA, Germany, Switzerland, Belgium, South Korea, Japan, Taiwan, South Africa etc.). The faculty members of the department are actively engaged in research activities. At present the Chemistry department is running UG, PG, M.Phil. and Ph.D. courses.</p>
                    </div>
                </div>               
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_physical_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page</a></li>
                <li><a href="department_of_chemistry_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_chemistry_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_chemistry_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_chemistry_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="13" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Chemistry - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>