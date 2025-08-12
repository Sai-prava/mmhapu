@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Notifications/Office Orders
                </h1>
                <p class="text-white link-nav"><a>Home </a> <span class="lnr lnr-arrow-right"></span><a class="orange-text">Notifications/Office Orders</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Notifications/Office Orders</span></h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <div class="box-tab">
                            <ul>
                                <li><a href="https://mgcubcuet.samarth.edu.in/" class="btn btn-primary">Academic Session
                                        2023-24 <img src="web/images/new.gif" alt="new image" /></a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                        <h6 class="text-rigth mb-10"><a href="admission_archive.php">Archives</a></h6>
                        <ul class="text-justify">
                            @foreach ($notices as $notice)

                            <li class="text-justify mb-10">
                                <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>
                                <a href=" {{asset('file/' . $notice->file)}} " target="_blank"> {{$notice->title}} </a>
                                <img src="web/images/new.gif" alt="new image" />
                            </li>

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
                                    href="admission.php"> Admission</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="examination.php"> Examination</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="syllabus.php">
                                    Syllabus</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="">
                                    Grievances</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="eVimarsh.php">
                                    eVimarsh/eLearing</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="">
                                    Initiative</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="attendance.php"> Attendance</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="">
                                    Evaluation</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="eResources.php"> Resources</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="">
                                    Anti-Ragging</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="library.php">
                                    Library</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Admission - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
