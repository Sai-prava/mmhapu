@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Annual Report
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Publication</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Annual Report</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area event-page-lists annual_report_bg">
    <img src=" {{ asset('web/images/annual_reports.png') }} " alt="Annual Report " class="img img-responsive"
        style="width: 100%;">
    <div class="container">
        <div class="row pb-60">
            <div class="col-sm-12 col-md-12 col-xs-12 text-center list_style mb-30">
                <h3 class="main_title_bg">Bilingual</h3>
                @foreach ($bilingual as $data)
                    <p class="mt-20"><i class="fa fa-caret-right"></i> {{ $data->name }}<span>&nbsp;<a
                                href=" {{ asset('uploads/reports/' . $data->file) }} "
                                class="annual_report_view_btn">Click to View</a></span></p>
                @endforeach
            </div>
            <div class="col-sm-6 col-md-6 col-xs-6 text-center list_style">
                <h3 class="main_title_bg">English</h3>
                @foreach ($english as $data)
                    <p class="mt-20"><i class="fa fa-caret-right"></i> {{ $data->name }}<span>&nbsp;<a
                                href=" {{ asset('uploads/reports/' . $data->file) }} "
                                class="annual_report_view_btn">Click to View</a></span></p>
                @endforeach
            </div>
            <div class="col-sm-6 col-md-6 col-xs-6 text-center list_style">
                <h3 class="main_title_bg">Hindi</h3>
                @foreach ($hindi as $data)
                    <p class="mt-20"><i class="fa fa-caret-right"></i> {{ $data->name }}<span>&nbsp;<a
                                href=" {{ asset('uploads/reports/' . $data->file) }} "
                                class="annual_report_view_btn">Click to View</a></span></p>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>



@include('web.layouts.footer')


{{-- <script type="text/javascript">
    $(document).ready(function () {
        document.title = "Annual Report - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script> --}}
