@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{ $page->title }}
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> {{ $page->title }}</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2>{{ $page->title }}</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        {{-- <p class="text-justify">{!! $aboutUs->description !!}</p> --}}
                        <div class="desc-wrap marquee_text">
                            <div class="whiteBox2" style="float: none;">
                                <div class="vcBox-content2 text-justify">
                                    <p class="text-justify">{!! $page->description !!}</p>
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
