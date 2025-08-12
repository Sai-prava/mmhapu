<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Computer Science and Information Technology
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_computational_sciences.php">School of Computational Sciences, ICT</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Computer Science and Information Technology</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2>Department of Computer Science and Information Technology</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">The Department of Computer Science & Information Technology was started during the academic year 2017-18. It is a premier and dynamic centre for imparting quality education and known for excellence in teaching in the field of Computer Engineering state of Bihar. The Department offers two courses including B.Tech (CSE) and M.Tech (CSE). Courses are designed to assist and encourage graduate to build on their knowledge. The Department also offers Ph.D programme in Computer Science.</p>
                        <p class="text-justify">The curriculum of B. Tech. (CSE) comprehensively covers the topics related to computing and information technology with an emphasis on practical learning. The educational ecosystem and up-to-date course structure prepare our students adaptive with the latest developments in Computer Science & Engineering, and demanded in industry.</p>
                        <p class="text-justify">The faculty members of the Department hold strong academic credentials and delivers expert classroom lectures supported from their strong research experience. The Department has established a Computing Lab. All laboratories are facilitated by high-speed internet.</p>
                    </div>
                </div>
                
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">Vision and Mission</h4>
                        <p class="text-justify">To contribute at national and international scenario through excellence in science and technology by providing a transformative education and research in the field of computer science and engineering and to cultivate the attitude and skills of employability, entrepreneurship, start-up among students so that they can become a valuable resource not only for the industry but also for the society.</p>
                        <p class="text-justify">The Mission of the Department is to provide quality education by innovating and continuously improving upon the Technology through advance method of training, meaningful research and intimate relations with industry, business and other institutions in the country.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_computational_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page</a></li>
                <li><a href="department_of_computer_science_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_computer_science_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_computer_science_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_computer_science_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="3" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Computer Science and Information Technology - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>