@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Annual Magazine
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href=""> Publication</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Annual Magazine</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area event-page-lists">
    <img src="{{ asset('web/images/Annual Magazine.png') }}"  alt="Annual Magazine" class="img img-responsive" style="width: 100%;">
    <div class="container mt-60 pb-60">
        <div class="row">
            <div class="col-sm-1 col-md-1 col-xs-1"></div>
            <div class="col-sm-3 col-md-3 col-xs-3">
                <ul>
                    <li class=""><a href=" {{ route('gyangrah') }} " class="btn annual_magazine_btn annual_magazine_btn1 mb-60">ज्ञानाग्रह</a></li>
                    <li class=""><a href=" {{ route('hramony') }} " class="btn annual_magazine_btn annual_magazine_btn2">Harmony</a></li>
                </ul>
            </div>
            <div class="col-sm-8 col-md-8 col-xs-8">
            </div>
        </div>
    </div>
</section>


 @include('web.layouts.footer')


 {{-- <script type="text/javascript">
    $(document).ready(function () {
        document.title = "Annual Magazine - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script> --}}
