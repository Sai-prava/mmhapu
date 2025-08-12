@include('web.layouts.header')


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Hon'ble Chancellor
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a><span class="lnr lnr-arrow-right"></span> <a
                        href=""> About</a> <span class="lnr lnr-arrow-right"></span> <a href=""
                        class="orange-text"> Hon'ble Chancellor</a></p>
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
                                <img src="{{ asset('web/images/Mahesh Sharma_vc1.jpg') }}" class="img-responsive"
                                    style="height: 225px; width: 200px;">
                                <div class="vcBox-content text-justify">
                                    <h5>Padma Shri Dr Mahesh Sharma</h5>
                                    <h5>Hon'ble Chancellor</h5>
                                    <h5>Mahatma Gandhi Central University, Bihar</h5>
                                    <br />
                                    <p class="text-justify">Padma Shri Dr. Mahesh Sharma is Chairman, Gramodaya Shivalik
                                        Mission with its HQ at Shakumbari-Shivalik forest range in District Saharanpur,
                                        UP. He is also coordinating Gram-Sankul-Yojna with its office at Deendayal
                                        Research Institute, New Delhi. Dr. Sharma graduated in Mechanical Engineering
                                        from B.H.U and obtained Ph.D. in Appropriate Technology System from IIT Delhi.
                                        He has served in various capacities for the development of nation. Presently,
                                        working under his able leadership, KVIC has emerged as No. 1 FMCG network in
                                        2003. He was appointed to the Board/Executive/Advisory Panels of RBI, SIDBI,
                                        NABARD, NIRD and NCRI & CAPART. He was a member of Government of India National
                                        Committee on Republic-50 Celebrations in 2000-2001, J.P. Centenary Celebrations
                                        Committee & also Mahamana Malviya 150 year's celebrations Committee of
                                        Government of India in 2010. He was appointed Chairman of High-level Task Force
                                        on Rural Industrialisation in Eastern States by Planning Commission and Member
                                        of the Special Task Force on Employment Generation.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('web.layouts.quick-link-about')
        </div>
    </div>
</section>


@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Chancellor of MGCUB - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
