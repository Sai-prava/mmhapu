@include('web.layouts.header')

<style>
    .contact-bg {
        padding: 10px;
        background:linear-gradient(#105aa7, #a4cce9);
    }

    h5 {
        color: #ffffff !important;
    }
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Contact Us</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Contact</span> Us</h2>
                </div>
                <section class="popular-courses-area section-gap courses-page">
                    <div class="container">
                        <div class="row">

                            <div class="single-popular-carusel col-lg-3 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid"
                                            src="{{ asset('web/images/faculty/Dr. Nikhil Anand Giri.jpg') }}"
                                            style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Dr. Nikhil Anand Giri
                                    </h5>
                                    <ul>
                                        <li>Assistant Professor (MJMC)</li>
                                        <li>For Media Related Queries</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> nikhilanandgiri@gmail.com
                                        </li>
                                        <li><i class="fa fa-phone"></i> 9717600960</li>

                                    </ul>
                                </div>
                            </div>

                            <div class="single-popular-carusel col-lg-3 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid"
                                            src="{{ asset('web/images/faculty/Er. Md. Sanaullah Khan.jpg') }}"
                                            style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Er. Md. Sanaullah Khan
                                    </h5>
                                    <ul>
                                        <li>Assistant Registrar (Gen. & Exam.)</li>
                                        <li>For Result Related Queries</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> sanaullah783@yahoo.co.in
                                        </li>
                                        <li><i class="fa fa-phone"></i> 9304509534</li>
                                    </ul>
                                </div>
                            </div>


                            <div class="single-popular-carusel col-lg-3 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid"
                                            src="{{ asset('web/images/faculty/Dr. Pankaj Kumar.jpg') }}"
                                            alt="Dr. Pankaj Kumar" style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Dr. Pankaj Kumar
                                    </h5>
                                    <ul>
                                        <li>Section Officer (Gen. & Estab.)</li>
                                        <li>For General Related Queries</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> pankaj.mmhu@gmail.com
                                        </li>
                                        <li><i class="fa fa-phone"></i>06122385233</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="single-popular-carusel col-lg-3 col-md-6">
                                <div class="thumb-wrap relative">
                                    <div class="thumb relative">
                                        <div class="overlay overlay-bg"></div>
                                        <img class="img-fluid" src="{{ asset('web/images/faculty/Kamlesh Kumar.jpg') }}"
                                            alt="Dr. Kamlesh Kumar" style="height: 280px;">
                                    </div>
                                </div>
                                <div class="details contact-bg">
                                    <h5>
                                        Dr. Kamlesh Kumar
                                    </h5>
                                    <ul>
                                        <li>Section Officer (Addmission & RTI)</li>
                                        <li>For Addmission Related Queries</li>
                                        <li class="break-line"><i class="fa fa-envelope"></i> kamleshpat2006@gmail.com
                                        </li>
                                        <li><i class="fa fa-phone"></i> 9934022203</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <h4>Address</h4>
                <ul class="mb-20">
                    <li>Maulana Mahzarul Haque Arabic & Persian University,</li>
                    <li>Mithapur Farm Area,</li>
                    <li>Mithapur,</li>
                    <li>Patna-800 001 (Bihar)</li>
                </ul>
                <a href="directory" class="btn btn-primary">Directory</a>
            </div>
            @include('web.layouts.quick-link-contact')
        </div>
    </div>
</section>



@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Contact Us - MAULANA MAZHARUL HAQUE ARABIC AND PERSIAN UNIVERSITY (Bihar)";
    });
</script>
