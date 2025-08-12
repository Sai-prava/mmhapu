@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Harmony
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Publication</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Monograph</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Monograph</span></h2>
                </div>
                <div class="mb-20">
                    <div class="detials">
                        <ul class="custom-list-style text-justify">
                            @foreach ($monograph as $data)
                                <li class="mb-10"><i class="fa fa-check"></i>{{ $data->name }}<span>&nbsp;<a href="{{ asset('uploads/Monograph/' . $data->file) }}" class="round-rectangle" target="_blank">Click to View</a></span>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            @include('web.layouts.quick-link-about')
        </div>
    </div>
</section>

@include('web.layouts.footer')
