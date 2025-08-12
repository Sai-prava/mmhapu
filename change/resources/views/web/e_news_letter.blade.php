@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    e-News Letter
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Publication</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">e-News Letter</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area event-page-lists parisar_pratibimb_bg">
    <img src="{{ asset('web/images/Parisar Pratibimb.png') }}" alt="e-News Letter" class="img img-responsive" style="width: 100%;">
    <div class="container">
        <div class="row">
            <div class="col-sm-1 col-md-1 col-xs-1"></div>
            <div class="col-sm-11 col-md-11 col-xs-11">
                <div class="detials pt-50 pb-60">
                    <ul class="custom-list-style parisar_pratibimb_list">
                        @foreach ($enews_letter as $data)
                        <li class="mb-10"><i class="fa fa-dot-circle-o"></i> {{ $data->name }} <span>&nbsp;<a
                                    href=" {{ asset('uploads/enews-letter/'. $data->file) }} "
                                    class="annual_report_view_btn">Click to View</a></span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


@include('web.layouts.footer')
