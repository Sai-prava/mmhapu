@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About University
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> About</a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">About
                        University</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>About </span>University</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        {{-- <p class="text-justify">{!! $aboutUs->description !!}</p> --}}
                        <div class="desc-wrap ">
                            <div class="whiteBox" style="float: none;">
                                <img src="{{ asset('uploads/about-us/' . $aboutUs->attach) }}" class="img-responsive"
                                    style="height: 225px; width: 200px;">
                                <div class="vcBox-content text-justify">
                                    <p class="text-justify">{!! $aboutUs->description !!}</p>
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
        document.title = "Maulana Mazharul Haque Arabic and Persian University, Patna :: About";
    });
</script>
