@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    FIT INDIA Movement
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">FIT INDIA Movement</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists fit_india_bg pb-100">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <center><img src="{{asset('uploads/logo/logo1.png')}}" class="img img-responsive" alt="mmhapu" style="height: 120px"></center>
            </div>
            <div class="col-md-8">
                <h1 class="fit_india_h1">FIT INDIA Movement</h1>
                <h5 class="fit_india_h5">MAULANA MAZHARUL HAQUE ARABIC AND PERSIAN UNIVERSITY, Bihar</h5>
            </div>
            <div class="col-md-2">
                <center><img src="{{asset('web/images/fit_india.png')}}" class="img img-responsive" alt="FIT INDIA Movement"></center>
            </div>
        </div>
    </div>
    <img src="{{asset('web/images/fit_india_header.png')}}" class="img img-responsive">
    <div class="container">
        <div class="row mt-25">
            <div class="col-sm-2 col-md-2 col-xs-2 azadi">
                <ul>
                    <li class=""><a href="page/fit-india-movement-committes" class="btn fi_btn fit_india_btn1 mb-15">Committees</a></li>
                    <li class=""><a href="" class="btn fi_btn fit_india_btn2 mb-15">Resources</a></li>
                    <li><a href="" class="btn fi_btn fit_india_btn3 mb-15">programme</a></li>
                    <li><a href="" class="btn fi_btn fit_india_btn4 mb-15">Photo gallery</a></li>
                    <li><a href="" class="btn fi_btn fit_india_btn5">Reports</a></li>
                </ul>
            </div>
            <div class="col-sm-10 col-md-10 col-xs-10 fit_india_middlebox">
                <p class="text-justify">FIT INDIA Movement was launched on 29th August, 2019 by Honourable Prime Minister with a view to make fitness an integral part of our daily lives. The mission of the Movement is to bring about behavioural changes and move towards a more physically active lifestyle. Towards achieving this mission, Fit India proposes to undertake various initiatives and conduct events to achieve the following objectives:</h5>
                <ul>
                    <li><i class="fa fa-square"></i> To promote fitness as easy, fun and free.</li>
                    <li><i class="fa fa-square"></i> To spread awareness on fitness and various physical activities that promote fitness through focused campaigns.</li>
                    <li><i class="fa fa-square"></i> To encourage indigenous sports.</li>
                    <li><i class="fa fa-square"></i> To make fitness reach every school, college/university, panchayat/village, etc.</li>
                    <li><i class="fa fa-square"></i> To create a platform for citizens of India to share information, drive awareness and encourage sharing of personal fitness stories.</li>
                </ul>
            </div>
        </div>
    </div>
</section>




@include('web.layouts.footer')



 <script type="text/javascript">
    $(document).ready(function () {
        document.title = "FIT INDIA Movement - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
