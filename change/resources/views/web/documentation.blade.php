@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Documentation
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href=""> Publication</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Documentation</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area event-page-lists">
    <img src="{{ asset('web/images/documentation.png') }}" alt="Documentation" class="img img-responsive"
        style="width: 100%;">
    <div class="container mt-60">
        <div class="row">
            <div class="col-sm-1 col-md-1 col-xs-1"></div>
            <div class="col-sm-3 col-md-3 col-xs-3">
                <ul>
                    @foreach ($documentation as $data)
                        <li class=""><a href="{{ asset('uploads/Documentation/'. $data->file) }}"
                               target="blank" class="btn documentation_btn  mb-40" style="background-color: {{ $data->color }};">{{$data->btn_text}}</a></li>
                    @endforeach
                </ul>
            </div>
            <div class="col-sm-8 col-md-8 col-xs-8">
                <img src="{{ asset('web/images/search_files.png') }}" alt="Documentation"
                    class="img img-responsive float-right" style="opacity: 0.5">
            </div>
        </div>
    </div>
    <img src="{{ asset('web/images/documentation1.png') }}" alt="Annual Magazine" class="img img-responsive"
        style="width: 100%;">
</section>



@include('web.layouts.footer')


{{-- <script type="text/javascript">
    $(document).ready(function () {
        document.title = "Documentation - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script> --}}
