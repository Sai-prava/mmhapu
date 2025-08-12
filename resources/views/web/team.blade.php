@include('web.layouts.header')

{{-- <style>

    .team-image-box img{
        max-width: 100%;
        height: 240px;
        border-radius: 10px;
    }

    .team-section {
        background-repeat: no-repeat;
    }

    .team-member {
        position: relative;
        text-align: center;
        margin-bottom: 30px;
    }

    .team-member .inner-box {
        position: relative;
        overflow: hidden;
        max-width: 500px;
        margin: 0 auto;
    }

    .team-member .inner-box .team-image-box {
        margin-bottom: 0px;
    }

    .team-member .team-image-box img {
        display: block;
        width: 100%;
    }

    .team-member .desc-content {
        position: relative;
        bottom: 0px;
        padding: 15px 15px;
        background: #ffffff;
        opacity: 1;
        border: 1px solid #e9eaee;
        transition: all 0.6s ease;
        -moz-transition: all 0.6s ease;
        -webkit-transition: all 0.6s ease;
        -ms-transition: all 0.6s ease;
        -o-transition: all 0.6s ease;
        left: 0;
    }

    .team-member:hover .desc-content {
        left: -200px;
        opacity: 0;
    }

    .team-member h3 {
        font-size: 20px;
        margin-bottom: 0px;
        color: #181818;
        font-weight: 500;
        text-transform: capitalize;
    }

    .team-member .designation {
        /* font-size: 15px; */
        color: #0B416F;
    }

    .team-member .hover-content {
        position: absolute;
        left: 0px;
        bottom: 0px;
        width: 100%;
        padding: 15px 15px;
        background: #0B416F;
        transform: translateX(-100%);
        color: #ffffff;
        opacity: 0;
        transition: all 0.7s ease;
        -moz-transition: all 0.7s ease;
        -webkit-transition: all 0.7s ease;
        -ms-transition: all 0.7s ease;
        -o-transition: all 0.7s ease;
    }

    .team-member:hover .hover-content {
        transform: translateX(-0%);
        opacity: 1;
    }

    .team-member .hover-content h3 {
        color: #ffffff;
    }

    .team-member .hover-content .designation {
        margin-bottom: 10px;
        color: #ffffff;
    }

    .team-member .social a {
        position: relative;
        display: inline-block;
        margin: 2px 5px;
        color: #ffffff;
        width: 20px;
        height: 20px;
        line-height: 20px;
        text-align: center;
    }

</style> --}}

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    University Administrators
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">University Administrators</a></p>
            </div>
        </div>
    </div>
</section>

<section class="team-section section-gap">
    <div class="container">

        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>UNIVERSITY </span>ADMINISTRATORS</h2>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($teams as $team)

            <div class="col-md-3 col-sm-6">
                <div class="team-member mb-3">
                    <div class="inner-box">
                        <div class="team-image-box">
                            <a href="{{ route('viewTeam', $team->id) }}"><img src=" {{asset('Team/'.$team->photo)}} " alt=""></a>
                        </div>
                        <div class="desc-content">
                            <h3>{{$team->name}}</h3>
                            <div class="designation">{{$team->designation}}</div>
                        </div>
                        <div class="hover-content">
                            <h3>{{$team->name}}</h3>
                            <div class="designation">{{$team->designation}}</div>
                            <div class="social">
                                <a href="{{$team->facebook}}"><i class="fa fa-facebook"></i></a>
                                <a href="{{$team->x}}"><i class="fa fa-twitter"></i></a>
                                <a href="{{$team->instagram}}"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @endforeach
        </div>
    </div>
</section>


@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Vice-Chancellor of MGCUB - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
