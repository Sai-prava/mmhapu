@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Facilities
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="#" class="orange-text"> Facilities</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>Facilities</span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <dl class="accordion full-width">
                        @foreach ($facilities as $data)
                            <dt>
                                <a href="">{{ $data->title }}</a>
                            </dt>
                            <dd>
                                <p class="text-justify"> {!! $data->description !!} </p>
                                @if (!empty(json_decode($data->images)))
                                    <div class="row facilityImages">
                                        @foreach (json_decode($data->images) as $image)
                                            <div class="col-md-6 col-sm-6 col-xs-12 mb-10">
                                                <img src="{{ asset('Facility/' . $image) }}"
                                                    class="img img-responsive img-thumbnail" style="height: 280px">
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </dd>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')


{{-- <script type="text/javascript">
    $(document).ready(function () {
        document.title = "University facilities - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script> --}}
