@include('web.layouts.header')

<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="marqueeBox">
                    <marquee direction="left" scrollamount="3" scrolldelay="100" behavior="scroll" onmouseover="this.stop();"
                        onmouseout="this.start();">
                        @foreach ($notices as $notice)
                            <i class="fa fa-arrow-circle-right orange-text" aria-hidden="true"></i>

                            @if ($notice->type == 'file')
                                <a href="{{ asset('file/' . $notice->file) }}" target="_blank">
                                    {{ $notice->title }} |
                                </a>
                            @elseif ($notice->type == 'link')
                                <a href="{{ $notice->url }}" target="_blank">
                                    {{ $notice->title }} |
                                </a>
                            @endif
                        @endforeach
                    </marquee>
                </div>
            </div>
        </div>

    </div>
</section>
<div class="topFourBtn">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-2 col-xs-12">
                <a href="page/azadi-ka-amrit-mahotsav">
                    आजादी का अमृत महोत्सव
                    <br>75 Years of India's Independence
                </a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="page/ebsb">
                    <img src="{{ asset('web/images/ebsb.png') }}" class="img-responsive" alt="EBSB">
                </a>
            </div>

            <div class="col-md-2 col-sm-2 col-xs-12">
                <a href="file/nep2020.pdf" target="_blank">
                    राष्ट्रीय शिक्षा नीति 2020<br>National Education Policy 2020</a>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="https://state.bihar.gov.in/educationbihar/CitizenHome.html" target="_blank">
                    <img src="{{ asset('web/images/edu.png') }}" class="img-responsive" alt="fitindia"></a>
            </div>

            <div class="col-md-2 col-sm-2 col-xs-12">
                <a href="https://www.7nishchay-yuvaupmission.bihar.gov.in/" target="_blank">
                    <center><img src="{{ asset('web/images/7n.png') }}" class="img img-responsive" alt="G20"
                            width="55%"></center>
                </a>
            </div>

        </div>
    </div>
</div>


<div class="sliderPart">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="single-feature">
                    <div class="title latest_bg">
                        <h4>Notifications/ Office Orders</h4>
                    </div>
                    <div class="desc-wrap marquee_text notifBox">
                        @if (count($office_orders_notice) > 0)
                            <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                onmouseover="this.stop();" onmouseout="this.start();" height="255">
                                <ul>
                                    @foreach ($office_orders_notice as $noticetype)
                                        <li>
                                            <i class="fa fa-caret-right"></i>
                                            @if ($noticetype->type == 'file')
                                                <a target="blank" href="{{ asset('file/' . $noticetype->file) }}">
                                                    <span>{{ $noticetype->title }}</span>
                                                </a>
                                            @elseif ($noticetype->type == 'link')
                                                <a target="blank" href="{{ $noticetype->url }}">
                                                    <span>{{ $noticetype->title }}</span>
                                                </a>
                                            @endif


                                            <img src="{{ asset('web/images/new.gif') }}" alt="new image" />
                                        </li>
                                        <hr>
                                    @endforeach
                                </ul>
                            </marquee>
                            <a href="{{ route('web.noticeList', $noticetype->notice_type) }}" class="viewAll-btn">View
                                all</a>

                        @endif
                    </div>
                </div>
            </div>
            <!-- slider section -->
            <div class="col-md-6 col-sm-6 col-xs-12 p0">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        @foreach ($sliders as $index => $slider)
                            <button type="button" data-bs-target="#carouselExampleAutoplaying"
                                data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"
                                aria-current="{{ $index == 0 ? 'true' : '' }}"
                                aria-label="Slide {{ $index + 1 }}"></button>
                        @endforeach
                    </div>
                    <div class="carousel-inner">
                        @foreach ($sliders as $index => $slider)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img style="height: 100%" class="d-block w-100"
                                    src="{{ asset('uploads/slider/' . $slider->attach) }}"
                                    alt="Slide {{ $index + 1 }}">
                            </div>
                        @endforeach
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="single-feature">
                    <div class="title latest_bg">
                        <h4> Latest @ MMHAPU</h4>
                    </div>
                    <div class="desc-wrap marquee_text latestBox">
                        <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                            onmouseover="this.stop();" onmouseout="this.start();">
                            <ul>
                                @foreach ($notices as $notice)
                                    <li>
                                        <i class="fa fa-caret-right"></i>
                                        @if ($notice->type == 'file')
                                            <a target="blank" href="{{ asset('file/' . $notice->file) }}">
                                                <span>{{ $notice->title }}</span>
                                            @elseif ($notice->type == 'link')
                                                <a target="blank" href="{{ $notice->url }}">
                                                    <span>{{ $notice->title }}</span>
                                                </a>
                                        @endif

                                        </a>
                                        <img src="{{ asset('web/images/new.gif') }}" alt="new image" />
                                    </li>
                                    <hr>
                                @endforeach
                            </ul>
                        </marquee>
                        <a href="{{ route('latest') }}" class="viewAll-btn">View all</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="clearfix"></div>
<style type="text/css">
    .modal-content {
        border: 0;
        border-radius: 0;
        margin: 0;
        /* bottom: 25px;*/
        left: 8px;
        right: 0;
        /* height: 100vh;*/
        display: flex;
    }

    @media (min-width: 576px) {
        /*                .modal-dialog {
         max-width: 100%;
         margin: 1.75rem auto;
         }*/
    }
</style>
<!-- pop up image on load page -->
<section class="feature-area">
    <div class="container">
        <div class="row">
            <div class="administrators-area col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="mb-10">
                            <div class="admissoinBox">
                                <h4>University Administrators</h4>
                            </div>
                            <div class="desc-wrap uniAdminBox team-area">
                                <div class="whiteBox whiteBox-bg">
                                    <img src="https://mmhapu.ac.in/uploads/page/governer_1736230153.jpg" alt="Governer"
                                        class="img-responsive" />
                                    <div class="vcBox-content">
                                        <h5>Shri Arif Mohammed Khan</h5>
                                        <h6>The Governor of Bihar, Hon'ble Chancellor</h6>
                                        <a href="https://governor.bih.nic.in/h-e-s-profile/"
                                            target="_blank"style="background-color:#0b416f">Read
                                            more</a>
                                    </div>
                                </div>
                                <div class="whiteBox whiteBox-bg">
                                    <img src="{{ asset('web/images/04.jpg') }}" alt="Shri Dharmendra Pradhan"
                                        class="img-responsive" />
                                    <div class="vcBox-content">
                                        <h5>Shri Sunil Kumar</h5>
                                        <h6>Hon'ble Education Minister</h6>
                                        <a href="https://state.bihar.gov.in/educationbihar/CitizenHome.html"
                                            target="_blank"style="background-color:#0b416f">Read more</a>
                                    </div>
                                </div>
                                @foreach ($teams->take(2) as $team)
                                    <div class="whiteBox whiteBox-bg">
                                        <img src="{{ asset('Team/' . $team->photo) }}" class="img-responsive" />
                                        <div class="vcBox-content">
                                            <h5> {{ $team->name }} </h5>
                                            <h6> {{ $team->designation }} </h6>
                                            <a href="{{ route('viewTeam', $team->id) }}"
                                                style="background-color:#0b416f">Read
                                                more</a>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="about-area col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="single-feature mb-10 uniBox">
                            <div class="admissoinBox">
                                <h4>The university</h4>
                            </div>
                            <div class="desc-wrap theUniBox">
                                <img style="" src="{{ asset('uploads/about-us/' . $about->attach) }}"
                                    alt="address2" class="pull-left img-responsive uniImg">
                                <div class="vcBox-content text-justify">
                                    <p class="text-justify mb-0">{!! Str::limit($about->description, 385) !!}</p>
                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#uniDocumentaryModal">Documentary</a>
                                    <a href="page/history-of-mmhapu" class="btn btn-primary btn-sm"
                                        style="float: right;">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  University VC Video Popup  -->

                    <div class="col-md-12 col-xs-12" style="margin-top:10px">
                        <div class="single-feature mb-10">
                            <div class="admissoinBox">
                                <h4>Vice Chancellor Message</h4>
                            </div>
                            <div class="desc-wrap vcBox">
                                <img src="{{ asset('web/images/vice-chancellor.jpeg') }}" alt="Dr. Mohammad Alamgeer"
                                    class="pull-left img-responsive uniImg" style="height: 90px;">
                                <div class="vcBox-content text-justify">
                                    <h5>Dr. Mohammad Alamgeer</h5>
                                    <p class="text-justify mb-0">Season's Greetings from Maulana Mazharul Haque Arabic
                                        & Persian University, Patna. The University has a distinct identity,...</p>
                                    <a href="#" class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                        data-bs-target="#HVCModal">Hon'ble Vice-Chancellor's </a>
                                    <a href="page/vice-chancellor" class="btn btn-primary btn-sm"
                                        style="float: right;">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="single-feature mb-10">
                            <div class="admissoinBox">
                                <h4>Admission</h4>
                            </div>
                            <div class="desc-wrap marquee_text admsnBox">
                                @if (count($admission_notice) > 0)
                                    <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                        onmouseover="this.stop();" onmouseout="this.start();" height="115">
                                        <ul>
                                            @foreach ($admission_notice as $admission)
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    @if ($admission->type == 'file')
                                                        <a target="blank"
                                                            href="{{ asset('file/' . $admission->file) }}">
                                                            <span>{{ $admission->title }}</span>
                                                        </a>
                                                    @elseif ($admission->type == 'link')
                                                        <a target="blank" href="{{ $admission->url }}">
                                                            <span>{{ $admission->title }}</span>
                                                        </a>
                                                    @endif

                                                    @if ($admission->created_at->isSameYear())
                                                        <img src="{{ asset('web/images/new.gif') }}"
                                                            alt="new image" />
                                                    @endif
                                                </li>
                                                <hr>
                                            @endforeach
                                        </ul>
                                    </marquee>
                                    <a href="{{ route('web.noticeList', $admission_notice[0]->notice_type) }}"
                                        class="viewAll-btn">View all</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-xs-12" style="margin-top:10px">
                        <div class="single-feature mb-10">
                            <div class="admissoinBox">
                                <h4>Examination / Result</h4>
                            </div>
                            <div class="desc-wrap marquee_text resultBox">
                                @if (count($exam_notice) > 0)
                                    <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                        onmouseover="this.stop();" onmouseout="this.start();">
                                        <ul>
                                            @foreach ($exam_notice as $exam)
                                                <li>
                                                    <i class="fa fa-caret-right"></i>
                                                    @if ($exam->type == 'file')
                                                        <a target="blank" href="{{ asset('file/' . $exam->file) }}">
                                                            <span>{{ $exam->title }}</span>
                                                        </a>
                                                    @elseif ($exam->type == 'link')
                                                        <a target="blank" href="{{ $exam->url }}">
                                                            <span>{{ $exam->title }}</span>
                                                        </a>
                                                    @endif
                                                    <img src="{{ asset('web/images/new.gif') }}" alt="new image" />
                                                </li>
                                                <hr>
                                            @endforeach
                                        </ul>
                                    </marquee>
                                    <a href="{{ route('web.noticeList', $exam_notice[0]->notice_type) }}"
                                        class="viewAll-btn">View
                                        all</a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- University Documentary Video Popup -->
            <div class="modal fade" id="uniDocumentaryModal" tabindex="-1"
                aria-labelledby="uniDocumentaryModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="uniDocumentaryModalLabel">University Documentary</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <iframe id="video_frame" width="100%" height="500"
                                src="https://www.youtube.com/embed/kgPj7BpmvRQ" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <div class="single-feature mb-10">
                            <div class="admissoinBox">
                                <h4>Events</h4>
                            </div>
                            <div class="desc-wrap marquee_text latestbo" style="height: 461px;padding:0px;!important">
                                <marquee direction="up" scrollamount="3" scrolldelay="200" behavior="scroll"
                                    onmouseover="this.stop();" onmouseout="this.start();" style="height: 425px">
                                    <ul>
                                        @foreach ($events as $event)
                                            <li>
                                                <a target="blank"
                                                    href="{{ asset('uploads/web-event/' . $event->attach) }}">
                                                    <img src="{{ asset('uploads/web-event/' . $event->attach) }}"
                                                        style="height: 10rem; width:100%">
                                                    <h6 style="padding-left:10px;padding-right:10px">{{ $event->title }}:[ {{ $event->date }} ]
                                                        <img src="{{ asset('web/images/new.gif') }}"
                                                            style="height: auto !important; width: unset; border: none;" />
                                                    </h6>
                                                </a>
                                            </li>
                                            <hr>
                                        @endforeach
                                    </ul>
                                </marquee>
                                <a href="{{ route('events') }}" class="viewAll-btn">View all</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="clearfix"></div>
    </div>
</section>

<div class="fourBtnBox">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="page/nss">National Service Scheme</a>
            </div>
            <div class="col-md-3 col-sm-23 col-xs-12">
                <a href="journals">Journal</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="https://nad.digilocker.gov.in/" target="_blank">DigiLocker NAD</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="Viksit_Bharat">Viksit Bharat</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="{{ route('grievance_redressal') }}">Student Grievance Redressal Committee</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="https://www.abc.gov.in/" target="_blank">Academic Bank of Credits</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="https://nad.gov.in/" target="_blank">National Academic Depository (NAD)</a>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
                <a href="pdf/IDP MGCU" target="_blank">University Development Plan</a>
            </div>
        </div>
    </div>
</div>

<section class="counterSection section-bg-blue pt-20 pb-20">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>Faculties</h6>
                            <i class="fa fa-users"></i>
                            <h2> {{ $overview->faculties }}+ </h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>Departments</h6>
                            <i class="fa fa-building"></i>
                            <h2> {{ $overview->departments }}+ </h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>Centres</h6>
                            <i class="fa fa-building"></i>
                            <h2>{{ $overview->centres }}+</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>Programmes</h6>
                            <i class="fa fa-laptop f-25"></i>
                            <h2>{{ $overview->programmes }}+</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="row">
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>e-Resources</h6>
                            <i class="fa fa-graduation-cap"></i>
                            <h2>{{ $overview->e_resources }}+</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>MOU</h6>
                            <i class="fa fa-graduation-cap"></i>
                            <h2>{{ $overview->mou }}+</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>Students</h6>
                            <i class="fa fa-graduation-cap"></i>
                            <h2>{{ $overview->students }}+</h2>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-12 plr-5">
                        <div class="counterBox">
                            <h6>Scholars</h6>
                            <i class="fa fa-book"></i>
                            <h2>{{ $overview->scholars }}+</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about">
    <div class="container">
        <div class="section-content">
            <div class="row">


                <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox pr-5">
                    <div class="icon-box border-orglight text-center pb-10">
                        <h4 class="icon-box-title mt-0 pt-5 pb-5 boxbg">University Campus Section</h4>
                        <div class="row pl-10 pr-10 pt-5 uniSectionBox">

                            @foreach ($campus as $campuses)
                                <div class="col-md-4 col-sm-4 col-xs-4 p-5">
                                    <div class="icon-box p-5 hvr-grow">
                                        <a class="" href="{{ $campuses->url }}">
                                            {!! $campuses->icon !!}
                                            <h5 class="icon-box-text">{{ $campuses->heading }}</h5>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>



                <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox pr-5">
                    <div class="icon-box border-orglight text-center pb-10">
                        <h4 class="icon-box-title mt-0 pt-5 pb-5 boxbg">Administration</h4>
                        <div class="row pl-15 pr-5 pt-5 uniSectionBox">

                            @foreach ($administration as $administrations)
                                <div class="col-md-4 col-sm-4 col-xs-4 p-5">
                                    <div class="icon-box p-5 hvr-grow">
                                        <a class="" href="{{ $administrations->url }}">
                                            {!! $administrations->icon !!}
                                            <h5 class="icon-box-text"> {{ $administrations->heading }} </h5>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox pr-5">
                    <div class="icon-box border-orglight text-center pb-10">
                        <h4 class="icon-box-title mt-0 pt-5 pb-5 boxbg">Student Section</h4>
                        <div class="row pl-15 pr-5 pt-5 uniSectionBox">

                            @foreach ($student as $students)
                                <div class="col-md-4 col-sm-4 col-xs-4 p-5">
                                    <div class="icon-box p-5 hvr-grow">
                                        <a class="" href="{{ $students->url }}">
                                            {!! $students->icon !!}
                                            <h5 class="icon-box-text"> {{ $students->heading }} </h5>
                                        </a>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>


                <div class="col-md-3 col-sm-3 col-xs-12 mb-10 administartionBox">
                    <div class="single-feature">
                        <div class="title latest_bg p-5">
                            <h4 style="text-align: left">Content / Research <span><a href="page/research"
                                        class="float-right content_research_view_all">View All</a></span></h4>
                        </div>
                        <div class="abt_box">
                            <div class="row pl-15 pr-5">
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://ugcmoocs.inflibnet.ac.in/" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/ugc_moocs.png') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://epgp.inflibnet.ac.in/" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/epgp.png') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://www.swayamprabha.gov.in/" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/swayam_prabha.png') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://shodhganga.inflibnet.ac.in/" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/sodhganga.gif') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://swayam.gov.in/" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/swayam.png') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://shodhshuddhi.inflibnet.ac.in/" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/sodh_shuddhi.png') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a href="https://vidyamitra.inflibnet.ac.in/" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/vidhya_mitra.png') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <a href="" target="_blank"><img
                                            src="{{ asset('web/images/imp_logos/vidwan.png') }}"
                                            class="img img-responsive img-thumbnail content_img"></a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="feature-area section-bg-gray pt-20 pb-20">
    <div class="container">
        <div class="row">

            <div class="col-lg-3 col-md-3 col-xs-12">
                <div class="single-feature">
                    <div class="title latest_bg">
                        <h4>News media</h4>
                    </div>
                    <div class="desc-wrap newsImg_box vcBox-content">
                        <!--<h5>text to be added</h5>-->
                        <img src="{{ asset('uploads/news/' . $viewNews->image) }}" class="img-responsive"
                            style="width:100%">
                        <a href="{{ route('news') }}" class="newsall-btn"
                            style="background-color:#0b416f !important;">View all</a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-12">
                <div class="single-feature">
                    <div class="title facebookBg">
                        <h4>
                            <i class="fa fa-facebook"></i> Facebook
                        </h4>
                    </div>
                    <div class="desc-wrap" style="padding: 0px !important;">
                        <iframe
                            src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fprofile.php%3Fid%3D61562943564042&tabs=timeline&width=400&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId"
                            width="100%" height="350" style="border:none;overflow:hidden" scrolling="no"
                            frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-12">
                <div class="single-feature">
                    <div class="title twitterBg">
                        <h4> <i class="fa fa-twitter"></i> Twitter</h4>
                    </div>
                    <div class="desc-wrap" style="padding: 0px !important;">
                        <a class="twitter-timeline" data-width="100%" data-height="350" data-theme="light"
                            href="https://twitter.com/MmhapuPatna?ref_src=twsrc%5Etfw">Tweets by MMHAPU</a>
                        <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-xs-12">
                <div class="single-feature">
                    <div class="title bg-dark-blue">
                        <h4>
                            <i class="fa fa-youtube"></i> Youtube
                        </h4>
                    </div>
                    <div class="desc-wrap" style="padding: 0px !important;">
                        <iframe width="100%" height="350" src="https://www.youtube.com/embed/kgPj7BpmvRQ"
                            frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                    </div>
                </div>
            </div>

        </div>
    </div>
    </div>
</section>






@include('web.layouts.footer')





<script type="text/javascript">
    $(document).ready(function() {
        document.title = "WELCOME MMHAPU";
    });

    $('.slider').each(function() {
        var $this = $(this);
        var $group = $this.find('.slide_group');
        var $slides = $this.find('.slide');
        var bulletArray = [];
        var currentIndex = 0;
        var timeout;

        function move(newIndex) {
            var animateLeft, slideLeft;

            advance();

            if ($group.is(':animated') || currentIndex === newIndex) {
                return;
            }

            bulletArray[currentIndex].removeClass('active');
            bulletArray[newIndex].addClass('active');

            if (newIndex > currentIndex) {
                slideLeft = '100%';
                animateLeft = '-100%';
            } else {
                slideLeft = '-100%';
                animateLeft = '100%';
            }

            $slides.eq(newIndex).css({
                display: 'block',
                left: slideLeft
            });
            $group.animate({
                left: animateLeft
            }, function() {
                $slides.eq(currentIndex).css({
                    display: 'none'
                });
                $slides.eq(newIndex).css({
                    left: 0
                });
                $group.css({
                    left: 0
                });
                currentIndex = newIndex;
            });
        }

        function advance() {
            clearTimeout(timeout);
            timeout = setTimeout(function() {
                if (currentIndex < ($slides.length - 1)) {
                    move(currentIndex + 1);
                } else {
                    move(0);
                }
            }, 4000);
        }

        $('.next_btn').on('click', function() {
            if (currentIndex < ($slides.length - 1)) {
                move(currentIndex + 1);
            } else {
                move(0);
            }
        });

        $('.previous_btn').on('click', function() {
            if (currentIndex !== 0) {
                move(currentIndex - 1);
            } else {
                move(3);
            }
        });

        $.each($slides, function(index) {
            var $button = $('<a class="slide_btn">&bull;</a>');

            if (index === currentIndex) {
                $button.addClass('active');
            }
            $button.on('click', function() {
                move(index);
            }).appendTo('.slide_buttons');
            bulletArray.push($button);
        });

        advance();
    });


    /*load model */
    $(document).ready(function() {
        $('.myModal').modal('show');

        setTimeout(function() {
            $('.myModal').removeAttr(".myModal", true);
        }, 5000);

    });



    // document.addEventListener("DOMContentLoaded", function() {
    //     var modalTrigger = document.querySelector("[data-target='#modalVideo']");
    //     modalTrigger.addEventListener("click", function(event) {
    //         event.preventDefault(); // Prevent default link behavior
    //         var modal = document.getElementById("modalVideo");
    //         var videoFrame = modal.querySelector("#video_frame");
    //         var videoUrl = "https://www.youtube.com/watch?v=36ip7Xw0JjI&t=57s"; // Replace with your YouTube    video URL
    //         videoFrame.src = videoUrl;
    //     });
    // });
</script>
