@include('web.layouts.header')


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    About Us
                </h1>
                <p class="text-white link-nav"><a href="{{ route('index') }}">Home </a> <span
                        class="lnr lnr-arrow-right"></span> <a href=""> About</a> <span
                        class="lnr lnr-arrow-right"></span> <a class="orange-text">Our Vision & Mission</a></p>
            </div>
        </div>
    </div>
</section>
<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Our</span> Vision & Mission</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <h4 class="inner-title"> {!! $mission_vission->vision_title !!} </h4>
                        <p> {!! $mission_vission->vision_desc !!} </p>
                    </div>
                </div>
                <div class="detials">
                    <h4 class="inner-title">{!! $mission_vission->mission_title !!}</h4>
                    <p>{!! $mission_vission->mission_desc !!}</p>
                </div>
            </div>
            @include('web.layouts.quick-link-about')
        </div>
    </div>
</section>




@include('web.layouts.footer')







<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Maulana Mazharul Haque Arabic and Persian University, Patna :: Vision and Mission";
    });
</script>
