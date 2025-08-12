@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hon'ble Chancellor
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="about.php"> Administration</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Directory</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Hon'ble </span>Chancellor</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <div class="desc-wrap marquee_text">
                            <div class="whiteBox" style="float: none;">
                                <img src="{{ asset('web/images/Mahesh Sharma_vc1.jpg') }}"
                                    alt="Padmshri Dr Mahesh Sharma" class="img-responsive"
                                    style="height: 225px; width: 200px;">
                                <div class="vcBox-content text-justify">
                                    <h5>Padmshri Dr Mahesh Sharma</h5>
                                    <h5>Hon'ble Chancellor</h5>
                                    <h5>Mahatma Gandhi Central University, Bihar</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @include('web.administration')
        </div>
    </div>
</section>

@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Chancellor of MGCUB - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
