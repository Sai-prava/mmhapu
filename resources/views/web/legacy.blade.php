@include('web.layouts.header')


<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Legacy of Champaran
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a href=""> About</a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">Legacy of Champaran</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Legacy of </span>Champaran</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <p class="text-justify">MGCU is located at Motihari, District- East Champaran, Bihar (INDIA). Mythologically, ‘Champaran’ derives its name from “Forests of Champa” having pervaded this area in the past. Moreover, Motihari is well-known as the “Karmabhoomi” of <strong><i class="orange-text">Father of the Nation</i></strong>, Mahatma Gandhi, where he successfully experimented with the idea of “Satyagraha”, <strong><i class="orange-text">Truth and Ahimsa</i></strong> during the “Neel Andolan” (Indigo Movement) at Champaran in 1917. The establishment of MGCUB commemorates the centenary year of Mahatma Gandhi’s Champaran Satyagraha. It is often said that Champaran made <strong><i class="orange-text">Bapu</i></strong> the charismatic leader of the masses.</p>
                        <p class="text-justify">Named after Mahatma Gandhi, Father of Nation, Mahatma Gandhi Central University of Bihar (MGCUB) is one of the emerging public Central universities of India. The <strong><i class="orange-text">Motto</i></strong> of the University is enshrined in its <strong><i class="orange-text">Logo</i></strong><img src="{{asset('web/images/legacy.png')}}" alt="legacy image">. This Vedic Chant is an invocation of the Almighty towards granting the accomplishment of all our desires and establishment of the truth in our speech. May God bless all the fulfilment of body, mind and spirit thereby leading us to the pinnacle of renown and glory! Imbibing the priceless wisdom of our great heritage, MGCUB is committed towards creating enlightened students who may prove unfailing forces of social change and universal good.</p>
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
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('about')}}"> History of MGCU</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('missionVision')}}"> Vision & Mission</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href=""> Hon'ble Visitor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('chancellor')}}"> Chancellor</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('vc')}}"> Vice Chancellor</a></li>
                <hr>
<!--                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="pro_vc.php"> Pro Vice-Chancellor</a></li>
                <hr>-->
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('legacy')}}"> Legacy of Champaran</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('logo')}}"> Logo</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('actStatutes')}}"> Act & Statutes</a></li>
                <hr>
                <li><i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i> <a href="{{route('ordinances')}}"> Ordinance</a></li>
            </ul>
        </div>
    </div>
</div>        </div>
    </div>
</section>


 @include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function () {
        document.title = "Legacy of Champaran - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
