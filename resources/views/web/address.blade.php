@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Address
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="#"> Contact Us</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Address</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Address</span></h2>
                </div>
                <section class="events-list-area section-gap event-page-lists">
                    <div class="container">
                        <div class="row align-items-center mb-20">
                            <div class="col-sm-5 col-md-5 thumb galleryThum">
                                <img class="img-fluid img-thumbnail" src="{{asset('web/images/address1.jpg')}}" alt="address1">
                                <h5 class="text-center">Administrative Building </h5>
                            </div>
                            <div class="detials col-12 col-md-7">
                                <h4 class="inner-title">Vice-Chancellor Office & Administrative Block</h4>
                                <ul class="custom-list-style">
                                    <li>Maulana Mazharul Haque Arabic & Persian University,</li>
                                    <li>Administrative Building,</li>
                                    <li>Mithapur Farm Area,Near Bus Stand,</li>
                                    <li>Patna</li>
                                    <li>Bihar- 800 001 (INDIA)</li>
                                    <li><i class="fa fa-envelope"></i> registrar-mmhu-bih@nic.in</li>
                                    <li>Working Days/Hours: Mon-Sat / 09:30 AM- 6:00 PM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row align-items-center mb-20">
                            <div class="col-12 col-md-5 thumb galleryThum">
                                <img class="img-fluid img-thumbnail" src="{{asset('web/images/address2.jpg')}}" alt="address2">
                                <h5 class="text-center">Academic Campus</h5>
                            </div>
                            <div class="detials col-12 col-md-7">
                                <h4 class="inner-title">Academic Block</h4>
                                   <ul class="custom-list-style">
                                    <li>Maulana Mazharul Haque Arabic & Persian University,</li>
                                    <li>Academic Building,</li>
                                    <li>Mithapur Farm Area,Near Bus Stand,</li>
                                    <li>Patna</li>
                                    <li>Bihar- 800 001 (INDIA)</li>
                                    <li><i class="fa fa-envelope"></i> registrar-mmhu-bih@nic.in</li>
                                    <li>Working Days/Hours: Mon-Sat / 09:30 AM- 6:00 PM</li>
                                </ul>
                            </div>
                        </div>
                        <div class="row align-items-center mb-20">

                        </div>
                        <div class="row align-items-center">
                  
                        </div>
                    </div>
                </section>
            </div>
            @include('web.layouts.quick-link-contact')
        </div>
    </div>
</section>


@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Address - MMHAPU (Bihar)";
    });
</script>
