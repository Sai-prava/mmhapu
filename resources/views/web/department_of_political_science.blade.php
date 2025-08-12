<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Political Science
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_social_sciences.php">School of Social Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Political Science</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Political Science</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">The Department of the Political Science at Mahatma Gandhi Central University, Bihar, India is
                            a centre of excellence for teaching and research. The department’s research areas cover the
                            global issues, globalisation and economic uncertainty, inequality, immigration, global
                            environment issues, tribal studies, unemployment , international relations and diplomacy etc.
                            and enhance the understanding of the global society.</p>
                        <p class="text-justify">The department encourages innovative, indigenous and empirical studies at faculty level and
                            similarly engages the research scholars. Our goal is to conduct empirical researches with
                            theoretical models, sharing and communicating political science studies with others at global
                            level. Our intention is to explore University surrounding areas and become facilitator in its
                            development.</p>
                        <p class="text-justify">Today, the whole world has been heavily influenced by market economy and capitalism, which
                            encourage people to think big and pursue dreams. The Department of Political Science of
                            MGCUB highlights Indian values, universalism of Hindu culture values, ancient Indian political
                            thoughts and the role of State established by Hindu Scriptures in establishing security,
                            stability, justice and good governance so that human beings can reach the highest terms of
                            excellence in the political, economic and social fields.</p>
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
                <li><a href="department_of_political_science_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_political_science_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_political_science_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="18" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Political Science - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
