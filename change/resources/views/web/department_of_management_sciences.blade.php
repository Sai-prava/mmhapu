<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Management Sciences
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a>Pandit Madan Mohan Malaviya School of Commerce & Management Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Management Sciences</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Management Sciences</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">“यथा ह्येकेन चक्रेण न रथस्य गतिर्भवेत् । एवं पुरुषकारेण विना दैवं न सिध्यति ।।” (As a chariot cart cannot move with one wheel, similarly, without hard work destiny does not bring fruit.))</p>
                        <p class="text-justify">Department of Management Sciences incepted in the year 2016 with the state of the art infrastructure to impart need based and result oriented management education to develop talented managers to face the Global challenges and align them to today's societal needs. The Department through its latest and unique teaching pedagogy ensures development of sound and strong domain skills in students. The department stands committed to provide the best of management education focusing on developing intellectual power as well as building leaders. The Department is endowed with Faculty members who are deeply engaged in education research and consultancy and carry their research experience into the classroom.</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_commerce_management_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page</a></li>
                <li><a href="department_of_management_sciences_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_management_sciences_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>                
                <li><a href="department_of_management_sciences_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research / Publications</a></li>
                <li><a href="department_of_management_sciences_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="2" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Management Sciences - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>