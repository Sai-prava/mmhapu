<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Sociology
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_social_sciences.php">School of Social Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Sociology</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Sociology</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">The Department has been functioning since its beginning of academic session in 2016 under the School of Social Sciences, Mahatma Gandhi Central University (MGCU) Bihar. This is one of the important departments of the University which cater the contemporary needs of the Indian society. It has well qualified faculty members educated from institutions of prominence and involved in teaching and research. It offers the courses by looking the relevance and importance. </p>
                        <h4 class="inner-title">Vision</h4>
                        <p class="text-justify">The Department derives its mission from that of the University, which is to develop human resources and capabilities to meet national development needs and global challenges through quality teaching, learning and research. To exhilarate the teaching of sociology by making it oriented to existential and social reality and builds a society of sustainability, equity and quality.</p>
                        <h4 class="inner-title">Mission</h4>
                        <ul class="custom-list-style">
                            <li><i class="fa fa-check"></i> To equips the students to critically understand and interpret social reality.</li>
                            <li><i class="fa fa-check"></i> To generate in students a distinctly sociological perspective on socio economic and cultural reality.</li>
                            <li><i class="fa fa-check"></i> To make available the expertise of specialists in specified areas of knowledge.</li>
                            <li><i class="fa fa-check"></i> To enhance the social sensitivity and sensibility of the students.</li>
                            <li><i class="fa fa-check"></i> To help students to acquire skills that will be useful to them in their personal and professional life.</li>
                            <li><i class="fa fa-check"></i> To develop multi-disciplinary skills among students.</li>
                        </ul>
                    </div>
                </div>               
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_social_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page</a></li>
                <li><a href="department_of_sociology_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_sociology_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_sociology_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_sociology_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="20" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Sociology - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
