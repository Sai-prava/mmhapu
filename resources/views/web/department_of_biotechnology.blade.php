<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Biotechnology
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_life_sciences.php">School of Life Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Biotech</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span>Biotechnology</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">The Department of Biotechnology was started as one of the founding department of the University in 2016 with Dr. Saurabh Singh Rathore as first Teacher in-Charge. Prof. Anand Prakash took over as head in August 2017. This newly established department offers B.Sc. (H) course in Biotechnology with intake capacity of 30 students. M.Sc., M.Phil. and Ph.D. Programmes have been initiated from the session (2019-20) to enhance the academic and research standard of the department. </p>
                        <p class="text-justify">The Department focuses on blended learning approach with emphasis on experiential learning. The teaching methodologies used in hierarchical method of teaching and learning. Department keeps organizing guest lectures, seminars, interactive sessions to give diverse exposure to students even at undergraduate level.</p>
                        <p class="text-justify">Department is now intended to contribute in terms of genuine basic and translational research and production of skilled manpower with ability to sense and perform as per socio- economic requirement.</p>
                        <p class="text-justify">Programmes Offered: B.Sc. (Biotechnology), M.Sc. (Biotechnology), M.Phil. (Biotechnology) and Ph.D. Biotechnology.</p>
                    </div>
                </div>               
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_life_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page </a></li>
                <li><a href="department_of_biotechnology_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_biotechnology_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_biotechnology_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_biotechnology_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="10" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Biotechnology - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>