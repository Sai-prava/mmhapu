@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    How to Reach
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="#"> Contact Us</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">How to Reach</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>How to </span>Reach</h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <div class="row">
                        <div class="col-md-8">
                        <p class="text-justify">Patna, the capital of Bihar, is situated on the Southern bank of the Ganges River. It is also known as Patliputra. It is famous for its historical significance as the ancient capital of the Indian empire and its cultural heritage.</p>
                    </div>
                    <div class="col-md-8">
                    <h4 style="color:red">By Train</h4>
                        <p class="text-justify">Patna has three railway stations (Patna Junction, Patliputra Junction & Rajendra Nagar Terminal Railway Station) of its own with regular trains to all major destinations. You can thus opt for trains to Patna from all corners of the country.</p>
                    </div>
                     </div>
                      </div>
                      </div>  
                 
                <div class="mb-20">
                    <div class="detials">
                        <div class="row">
                            <div class="col-md-8">
                                <h5>From Patna Junction</h5>
                                <p class="text-justify">3.9. KM from Patna Junction<br>
                                 <a href="https://maps.app.goo.gl/SqgFen59A6MeTpYs8">Google Map Link: </a>

                                </p>
                            </div>
                               <div class="col-md-8">
                                <h5>From Patliputra Junction</h5>
                                <p class="text-justify">12 KM from Patliputra Junction<br>
                                 <a href="https://maps.app.goo.gl/oPBE12ouMAtgMqoHA">Google Map Link: </a>
                                </p>
                            </div>
                              <div class="col-md-8">
                                <h5>From Rajendra Nager Terminal</h5>
                                <p class="text-justify">4.8 KM from Rajendra Nagar Terminal<br>
                                 <a href="https://maps.app.goo.gl/XUvUSvpXFh9GyWQr5">Google Map Link: </a>
                                </p>
                            </div>
                            <div class="col-md-4" style="margin-top:-350px">
                                <div class="whiteBox" style="float: none;">
                                    <img src="{{ asset('web/images/address2.jpg') }}" alt="address2"
                                        class="img-responsive" style="width:450px;height:250px">
                                </div>
                            </div>
                            <div class="col-md-8">
                    <h4 style="color:red">By Bus</h4>
                        <p class="text-justify">Patna is well connected with National High Ways & State High Ways. You can avail Bus service to and from the ISBT, Bairrya, Patna and Govt. Bus Stand, Gandhi Maidan patna .</p>
                    </div>
                    <div class="col-md-8">
                                <h5>ISBT, Bairrya Patna</h5>
                                <p class="text-justify">7.8 Km from ISBT Patliputra Bus Stand, Bairrya, Patna<br>
                                 <a href="https://maps.app.goo.gl/Uam9feEsWHRdJNTk8">Google Map Link: </a>

                                </p>
                            </div>
                               <div class="col-md-8">
                                <h5>Govt. Bus Stand, Gandhi Maidan Patna</h5>
                                <p class="text-justify">5.9. KM from Gandhi Maidan, Patna<br>
                                 <a href="https://maps.app.goo.gl/fMGAidwY54bVB3JJ6">Google Map Link: </a>
                                </p>
                            </div>
  
                                                <div class="col-md-8">
                    <h4 style="color:red">By Air</h4>
                        <p class="text-justify">The nearest Airport is Patna Airport (Lok Nayak Jayprakash International Airport) which is about 6.9 km from the University HQ. Frequent Bus/Taxi Services is available to and from the Airport. Frequent Flights to various national and international destinations take off from all the Airport. </p>
                    </div>
                    <div class="col-md-8">
                                 <a href="https://maps.app.goo.gl/WvbGdkWiWdHFbBUb7">Google Map Link: </a>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @include('web.layouts.quick-link-contact')
        </div>
    </div>
</section>



@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "How to Reach - MMHAPU (Bihar)";
    });
</script>
