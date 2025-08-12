<?php $this->load->view("frontend/header.php");?>


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Zoology
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_life_sciences.php">School of Life Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Zoology</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Zoology</h2>
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
                        <p class="text-justify">The Department of Zoology is an essential entity of the Faculty of Science, Mahatma Gandhi Central University, Bihar. Since its inception in 2016, it has been the foremost centre for learning with an aim to provide quality education to students.  The Department places emphasis on laboratory component in the teaching curriculum along with class room teaching and research projects to contribute for the development of Animal Sciences and Zoological studies. The Department has highly qualified, experienced and dedicated faculty members with highly motivated research and teaching experiences, emphasis on basic and applied fields of Zoology assisted with demos, models, videos, etc. An initial teaching effort in the department was tailored to train students leading them to a Bachelor of Science (BSc) Honours degree and subsequently Postgraduate, Master of Philosophy MPhil) and Doctor of Philosophy (PhD) were rolled out in 2019. All the programmes opens a vast range of career opportunities in the Zoology field such as Teaching and Research, Forensics, Medical Laboratories, Indian Forest Services, Indian Administrative Services, Hatcheries, Sericulture, Apiculture, Agricultural departments, working as zoo curators, museum curators, animal and wildlife educators, wildlife rehabilitators and conservationists, environment or ecosystem management sector, environmental consulting firms, and in higher specialized studies. There are numerous opportunities in the allied branch of research in India and Abroad. Though being one of the youngest departments of the University, the present premises of the department was extended resulting in an expansion of research in wide spectrum of disciplines in animal sciences, that coinciding with the attraction of eminent faculties to work in the Department in future. Department had published a good number of research papers in standard international journals with high impact factors. To provide academic leadership to the subject of Zoology and undertake quality research of global standing while maintaining teaching and research quality, ensuring high academic performance of the students empowered with entrepreneurial and industrial skills as also enlightened with the research avenues by applying extra mural funding grants from different agencies by faculties both in India and Abroad and inculcate research culture by acting as role models with excellence in academics and research.</p>
                    </div>
                </div>              
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="department_of_zoology.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page </a></li>
                <li><a href="department_of_zoology_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_zoology_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_zoology_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_zoology_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="12" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Zoology - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
