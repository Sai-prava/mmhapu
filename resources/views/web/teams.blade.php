@include('web.layouts.header')

<style>
    .team-image-box img {
        max-width: 100%;
        height: 200px;
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
</style>

<style>
    .info {
        background-color: white;
        width: 100%;
        padding: 20px;
    }

    .info .icon {
        display: flex;
        align-items: center;
        margin-bottom: 15px;
    }

    .info .icon i {
        color: #E16734;
        font-size: 20px;
        margin-right: 10px;
    }

    .info .icon span {
        font-weight: bold;
        color: #E16734;
    }

    .info h6 {
        margin: 0;
        color: #666;
    }

    .nav-pills li button {
        font-weight: bold;
    }

    .grievance {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
        max-width: 1000px;
        padding: 0 20px;
    }

    .title {
        align-items: center;
    }

    .title i {
        color: #E16734;
        font-size: 24px;
        background-color: #f3e8ff;
        border-radius: 50%;
        padding: 10px;
        margin-right: 10px;
    }

    .title span {
        font-weight: bold;
        color: #E16734;
        font-size: 20px;
    }

    .button {
        background-color: #f3e8ff;
        border: none;
        border-radius: 20px;
        padding: 10px 20px;
        color: #E16734;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #e1d1ff;
    }
</style>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    {{ $subcategory->name }}
                </h1>
                <p class="text-white link-nav"><a href="index.php">Academics </a> <span class="lnr lnr-arrow-right"></span>
                    <a href="about.php"> Faculties</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">{{ $subcategory->name }}</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2>
                        <span>Department of </span>
                        {{ $subcategory->name }}
                    </h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <div class="desc-wrap marquee_text">
                            <div class="whiteBox" style="float: none;">
                                <div class="vcBox-content text-justify">
                                    <p class="text-justify">{!! $subcategory->description !!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container mt-3">
                    <h6 style="color: #666">Featured</h6>
                    <br>
                    <h3>Department Information and other useful Links</h3>
                    <br>
                    <!-- Nav pills -->
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-info-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-Info" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Info</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Faculty Member</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Student Grievance</button>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-Info" role="tabpanel"
                            aria-labelledby="pills-info-tab">

                            <div class="info">
                                @if ($departmentInfo)
                                    <div class="icon">
                                        <i class="fa fa-user"></i>
                                        <span>Head</span>
                                    </div>
                                    <h6> {{ $departmentInfo->head }} </h6>

                                    <div class="icon mt-2">
                                        <i class="fa fa-map-marker"></i>
                                        <span>Address</span>
                                    </div>
                                    <h6>{{ $departmentInfo->address }}</h6>

                                    <div class="icon mt-2">
                                        <i class="fa fa-phone"></i>
                                        <span>Phone</span>
                                    </div>
                                    <h6>{{ $departmentInfo->phone }}</h6>

                                    <div class="icon mt-2">
                                        <i class="fa fa-envelope"></i>
                                        <span>Email</span>
                                    </div>
                                    <h6>{{ $departmentInfo->email }}</h6>

                                    <div class="icon mt-2">
                                        <i class="fa fa-globe"></i>
                                        <span>Website</span>
                                    </div>
                                    <h6><a href="{{ $departmentInfo->website }}"
                                            target="_blank">{{ $departmentInfo->website }}</a></h6>
                            </div>
                        @else
                            <h6>No Info Available</h6>
                            @endif
                        </div>

                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab">
                            <section class="team-section section-gap">
                                <div class="container">

                                    <div class="row">
                                        @foreach ($teams as $team)
                                            <div class="col-md-3 col-sm-6">
                                                <div class="team-member mb-3">
                                                    <div class="inner-box">
                                                        <div class="team-image-box">
                                                            <a href="{{ route('faculty.viewfaculty', $team->id) }}">
                                                                <img src=" {{ asset('Team/' . $team->photo) }} "
                                                                    alt="">
                                                            </a>
                                                        </div>
                                                        <div class="desc-content">
                                                            <h3>{{ $team->name }}</h3>
                                                            <div class="designation">{{ $team->designation }}</div>
                                                        </div>
                                                        <div class="hover-content">
                                                            <h3>{{ $team->name }}</h3>
                                                            <div class="designation">{{ $team->designation }}</div>
                                                            <div class="social">
                                                                <a href="{{ $team->facebook }}" target="blank"><i
                                                                        class="fa fa-facebook"></i></a>
                                                                <a href="{{ $team->x }}"><i
                                                                        class="fa fa-twitter" target="blank"></i></a>
                                                                <a href="{{ $team->instagram }}" target="blank"><i
                                                                        class="fa fa-instagram"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" role="tabpanel"
                            aria-labelledby="pills-contact-tab">

                            <div class="grievance">
                                <div class="title">
                                    <i class="fa fa-gavel"></i>
                                    <span>Student Grievance Redressal</span>
                                </div>
                                <button class="button">Submit Grievance</button>
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
        document.title = "Vice-Chancellor of MGCUB - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
