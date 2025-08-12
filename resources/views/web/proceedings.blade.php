@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Proceedings
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Publication</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Proceedings</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Proceedings</span></h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <ul class="custom-list-style text-justify">
                            @foreach ($proceedings as $data)
                                <li class="mb-10"><i class="fa fa-check"></i> <a
                                        href="{{ asset('uploads/proceedings/' . $data->file) }}">
                                        {!! $data->title !!} </a></li>
                            @endforeach
                        </ul>
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
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="e_news_letter.php"> E- news letter</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="journals.php">
                                    Journals</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="reports.php">
                                    Reports</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="proceedings.php">
                                    Proceedings</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="newspaper_clippings.php"> Newspaper Clippings</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="gyanagrah.php">
                                    ज्ञानाग्रह (वार्षिक पत्रिका)</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="pdf/MGCU-in-Covid-19.pdf"> MGCU in COVID-19</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="monograph.php">
                                    Monograph</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="harmony.php">
                                    Harmony</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="pdf/MGCU at सार्थक EDUVISION 2021- exhibition and conference for Aatmanirbhar Bharat.pdf">
                                    सार्थक EDUVISION 2021</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




@include('web.layouts.footer')
