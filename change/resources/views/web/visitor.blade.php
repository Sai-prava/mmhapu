<?php $this->load->view("frontend/header.php");?>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hon'ble Visitor
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> About</a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">Hon'ble Visitor</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Hon'ble </span>Visitor</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="whiteBox" style="float: none;">
                        <img src="<?php echo base_url(); ?>images/poi1.png" alt="Smt. Droupadi Murmu" class="img-responsive">
                        <div class="vcBox-content">
                            <h5>Hon'ble Smt. Droupadi Murmu</h5>
                            <h6>Her Excellency Smt. Droupadi Murmu (Hon’ble President of India) is the Visitor of Mahatma Gandhi Central University.</h6>
                            <!--<a href="https://presidentofindia.nic.in/" >Official Website: https://presidentofindia.nic.in/</a>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-md-3 col-xs-12">
    <div class="single-feature">
        <div class="title MGCUB_bg">
            <h4>Quick Links</h4>
        </div>
        <div class="desc-wrap marquee_text">
            <ul class="custom-list-style">
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="about.php"> History of MGCU</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="vision_mission.php"> Vision & Mission</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="visitor.php"> Hon'ble Visitor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="chancellor.php"> Chancellor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="vc.php"> Vice Chancellor</a></li>
                <hr>
<!--                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="pro_vc.php"> Pro Vice-Chancellor</a></li>
                <hr>-->
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="legacy.php"> Legacy of Champaran</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="logo.php"> Logo</a></li>                
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="act_statutes.php"> Act & Statutes</a></li>                
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="ordinances.php"> Ordinance</a></li>
            </ul>
        </div>
    </div>
</div>        </div>
    </div>
</section>

 <?php $this->load->view("frontend/footer.php");?>


<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Hon'ble Visitor - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>