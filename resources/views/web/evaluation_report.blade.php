@include('web.layouts.header')

<style>
    .accordion-item {
        border-bottom: 1px solid #dee2e6 !important;
    }
</style>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Evaluation Report of the Departments
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> IQAC</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Evaluation Report of the Departments</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Evaluation Report of the </span>Departments</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                @php
                                    $groupedEvaluations = $evaluations->groupBy('title.title');
                                @endphp

                                @foreach ($groupedEvaluations as $title => $group)
                                    <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6">
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#flush-collapse{{ $loop->index }}"
                                                        aria-expanded="false"
                                                        aria-controls="flush-collapse{{ $loop->index }}">
                                                        {{ $title }}
                                                    </button>
                                                </h2>
                                                <div id="flush-collapse{{ $loop->index }}"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            @foreach ($group as $item)
                                                                <li><i class="fa fa-arrow-circle-right orange-text"
                                                                        aria-hidden="true"></i>
                                                                    <a target="blank"
                                                                        href="{{ asset('uploads/evaluation/' . $item->file) }}">
                                                                        {{ $item->name }}
                                                                    </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
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
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="syllabus.php">
                                    Syllabus</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="attendance.php">
                                    Attendance</a></li>
                            <hr>
                            <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a
                                    href="scholarship_schemes.php"> Scholarship Schemes</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')
