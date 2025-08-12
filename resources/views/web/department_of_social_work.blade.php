<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Social Work
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_social_sciences.php">School of Social Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Social Work</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span>Social Work</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">Social Work is a professional discipline of integrated social sciences. The trained social workers are instructed to help restore equilibrium in the Indian society challenged by traditional and modern social evils and social realities. In the year 2016, the Department of Social Work was established with the vision to become the seat of excellence in promoting higher learning and research in social work. It aims to enable the students to utilise the knowledge and skills of social work for social transformations. The Department presently offers Masters of Social Work (MSW), Master of Philosophy (M.Phil.) and Doctor of Philosophy (Ph.D.) Programmes in regular mode to prepare students to integrate advanced professional knowledge, values, and skills and to practice competently. The Department emphasises equipping social workers to work effectively with emerging systems, to assist diverse client systems on issues of social and economic justice to provide leadership in the development of service delivery systems. The Department of Social Work believes in doing research in social realities. The outcomes of such efforts are included in classroom & fieldwork instructions to provide theoretical as well as practical experiences that prepare students to understand and assess the contexts of professional practice and the behaviour of individuals, groups, communities and organizations. </p>                        
                        <p class="text-justify">The social work students are prepared to use personal & professional skills and institutional resources, theoretical frameworks, and research to meet the needs of various client systems. The Department has collaborated with various national, international and corporate agencies, NGOs, health institutions, public sector and autonomous organizations, various ministries of the state and central government, different consultancy organizations and reputed academic institutions. </p>
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
                <li><a href="department_of_social_work_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_social_work_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_social_work_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_social_work_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="19" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Social Work - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>