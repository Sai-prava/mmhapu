@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white" style="text-transform: unset;">
                    e-Learning : An ICT initiative for E-learning
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Student Section</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">eLearning</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2 style="text-transform: unset;"><span>e-Learning : </span>An ICT initiative for E-learning</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <p class="text-justify"><strong class="orange-text">e-Vimarsh :</strong> An ICT initiative for
                            E-learning . The university has come up with an innovative idea of an Online lecture series
                            by eminent speakers. The series has been named- E Vimarsh. The idea for this initiative came
                            after a committee was formed by the University to facilitate e- learning during closure of
                            classes due to outbreak of Corona pandemic.</p>
                        <div class="row">
                            <div class="col-md-1">
                                <a href="#"><img src="{{ asset('web/images/youtube.png') }}" alt="youtube"></a>
                            </div>
                            <div class="col-md-11">
                                <p class="text-justify"><strong class="orange-text">Online Video lectures:</strong> An
                                    Online lecture series by eminent speakers of the University. See MGCU’s YouTube
                                    channel for video lecture. <a href="#"
                                        style="text-decoration: underline;">Youtube Link</a></p>
                            </div>
                            <div class="col-md-1">
                                <a href="{{ route('eResource') }}"><img src="{{ asset('web/images/PowerPoint-icon.png') }}"
                                        alt="ppt"></a>
                            </div>
                            <div class="col-md-11">
                                <p class="text-justify"><strong class="orange-text">PPT Presentation of
                                        Faculties:</strong> PowerPoint can be a highly effective tool to aid learning.
                                    Department wise PPTs submitted by faculties on relevant topics related their subject
                                    has been uploaded. <a href="{{ route('eResource') }}" class="round-rectangle">View More</a></p>
                            </div>
                        </div>
                        <br />
                        <p>ICT initiatives of MHRD & UGC for teaching/learning. <a href="#"
                                class="round-rectangle">View more</a></p>
                        <p>ICT Initiatives of MHRD (with e-Brochure) <a href="#" class="round-rectangle">View
                                more</a></p>
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
        document.title =
            "e-Learning : An ICT initiative for E-learning - MAULANA MAZHARUL HAQUE ARABIC AND PERSIAN UNIVERSITY (Bihar)";
    });
</script>
