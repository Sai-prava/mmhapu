<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Department of Physics
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a href="school_of_physical_sciences.php">School of Physical Sciences</a><span class="lnr lnr-arrow-right"></span> <a class="orange-text">Department of Physics</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Department of </span> Physics</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title">About Department</h4>
                        <p class="text-justify">Department of Physics is one of the leading departments of the School of Physical
                            Sciences which is committed to create a centre of excellence in science &amp; technology by
                            providing quality education through effective teaching, learning and evaluation
                            processes using digital mode of technology. Faculty members of the Department are
                            actively engaged in several up-thrust research areas including multiferroic materials,
                            magnetic memory devices, thin film nanomagnetism, Metal/Semiconductor Interfaces,
                            Heusler alloys based structures, tailoring of magnetic interfaces via swift heavy ions,

                            Laser Raman Spectroscopy, Density Functional Theoretical calculations, Graphene
                            Nanomaterials, Chalcogenide glasses, Phase change materials, energy storage and
                            conversion devices like rechargeable batteries, supercapacitors, fabrication of Photonic
                            Devices - Solar Cell, Light-Emitting Diodes (LEDs) and Photodetectors, hydrogen storage
                            devices, Supercapacitors based graphene nanomaterials as electrode, etc. by utilizing
                            several nano-materials/composites, clean, green and low cost bio-waste materials
                            based activated charcoal for its applications in energy storage and water treatment.
                            Unending efforts are being made by the department to develop the well equipped
                            research and academic laboratories.
                        </p>

                    </div>
                </div>               
            </div>
           <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="nav-side-menu">
        <div class="brand">About Department</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        <div class="menu-list">
            <ul id="menu-content" class="menu-content collapse out">
                <li><a href="school_of_physical_sciences.php"><i class="fa fa-arrow-circle-right"></i> Back to School Page </a></li>
                <li><a href="department_of_physics_hod.php"><i class="fa fa-arrow-circle-right"></i> Head of Department</a></li>
                <li><a href="department_of_physics_programme.php"><i class="fa fa-arrow-circle-right"></i> Programmes</a></li>
                <li><a href="javascript:;" onclick="viewFun()"><i class="fa fa-arrow-circle-right"></i> Syllabus</a></li>
                <li><a href="department_of_physics_faculty.php"><i class="fa fa-arrow-circle-right"></i> Faculty Details</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Achievements/Events</a></li>
                <li><a href="#"><i class="fa fa-arrow-circle-right"></i> Research/Publications</a></li>
                <li><a href="department_of_physics_contact.php"><i class="fa fa-arrow-circle-right"></i> Contact Us</a></li>
            </ul>
        </div>
    </div>
</div>
<form id="frm" method="post" action="syllabus_view.php"><input type="hidden" name="ids" value="15" /><button type="submit" style="display: none;"></button></form>
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
        document.title = "Department of Physics - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>