@include('web.layouts.header')


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Vice Chancellor
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="about.php"> Administration</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Directory</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Vice </span>Chancellor</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <div class="desc-wrap marquee_text">
                            <div class="whiteBox" style="float: none;">
                                <img src="{{ asset('web/images/vc.jpg') }}" alt="Prof. Sanjay Srivastava"
                                    class="img img-responsive" style="width: 300px; height:220px;">
                                <div class="vcBox-content text-justify">
                                    <h5>Prof. Sanjay Srivastava</h5>
                                    <h5>Vice-Chancellor</h5>
                                    <h5>Mahatma Gandhi Central University, Bihar</h5>
                                    <h5>Email : vc@mgcub.ac.in</h5>
                                    <h5>Mahatma Gandhi Central University, Bihar</h5>
                                    <br />
                                    <p class="text-justify">Before joining MGCU, Motihari, as its Vice Chancellor, Prof.
                                        Sanjay Srivastava was
                                        Professor at Political Science department of Banaras Hindu University. He taught
                                        international relations and his research interests include India’s foreign
                                        policy,
                                        conflict resolution and peace, and Indian politics. He also took part in
                                        curriculum
                                        development, research supervision and administrative activities of the
                                        university.</p>
                                    <p class="text-justify">Prof. Srivastava was a Fulbright Visiting scholar at the
                                        School of Communication,
                                        American University, Washington D.C (during 2016-17). In 2018, hon’ble President
                                        of India nominated Prof. Srivastava on the BHU Court (the highest advisory body
                                        of
                                        the Banaras Hindu University, 2018-21).</p>
                                    <p class="text-justify">In 2022, hon’ble President of India nominated Prof.
                                        Srivastava as his nominee on
                                        the Executive Council of Jamia Millia Islamia, New Delhi. He is also on the
                                        Finance
                                        Committee of the Jamia Millia Islamia, New Delhi (2022-25). He has been
                                        associated with the accreditation work of the NAAC and served in many important
                                        committees of the UGC. He is advisor at ICSSR and Member of the Academic
                                        Council of (HRDC) JNU (2019-21). Recently, Prof. Srivastava was appointed Vice
                                        Chairman of the BHU School Board (2019-22). He has the honor to be on the
                                        Management Committee of the Arya Mahila PG College, BHU, Varanasi, as BHU’s
                                        nominee (2019-21). Prof. Srivastava also worked as Chairman of the BHU
                                        Information Cell.</p>
                                    <p class="text-justify">Prof. Srivastava was ICCR Chair of Contemporary Indian
                                        Studies at Yerevan State
                                        University, Armenia (2013-14), where he was involved in public diplomacy (PD)
                                        activities of the Indian embassy and delivered lectures on various issues
                                        including
                                        India’s foreign policy and PD programs and the prestigious ICCR Lecture. He was
                                        the invited speaker to the Public Diplomacy Symposium, Syracuse University
                                        (2016). He was also an invited fellow at the International Studies Association
                                        annual conference in Baltimore (MD) in 2017. The IIE organized his lectures at
                                        the
                                        Barry University, Miami; College of Southern Nevada, Las Vegas. He has
                                        undergone leadership training under the LEAP program of MHRD- at University of
                                        Cambridge and IIT Kharagpur (2019). He contributes to the CPD Blog of USC. He
                                        has led many major research projects; the recent one is on evaluating
                                        effectiveness
                                        of public diplomacy programs of India, a first research of its type using
                                        experimental research design.</p>
                                    <p class="text-justify">Prof. Srivastava was awarded UGC’s Career Award (Research
                                        Award) (2004) given
                                        to the meritorious teachers. He was Salzburg Seminar Fellow (2005) and has
                                        participated in several national and international conferences. He has also
                                        published on issues of international relations in various compendiums and
                                        national
                                        and international journals. He has been visiting professor to many reputed
                                        institutions including Diplomatic Academy of Armenia and the Faculty of
                                        International Relations at Yerevan State University.</p>
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
        document.title = "Vice-Chancellor of MGCUB - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
