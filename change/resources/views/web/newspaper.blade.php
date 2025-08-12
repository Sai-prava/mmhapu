@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Gallery Details
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="gallery.php">Gallery</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">
                        @if (count($news) > 0)
                            {{ $news[0]->newspaperTitle->title }}
                        @else
                            {{ __('News Paper') }}
                        @endif
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="gallery-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2>
                        @if (count($news) > 0)
                        {{$news[0]->newspaperTitle->title}}
                        @else
                            {{ __('News Paper') }}
                        @endif
                    </h2>
                </div>
            </div>
            @foreach ($news as $data)

            <div class="col-lg-4 col-md-4 col-xs-12">
                <a href=" {{asset('uploads/news/'. $data->image)}} " class="img-gal">
                    <div class="single-imgs relative">
                        <div class="overlay overlay-bg"></div>
                        <div class="relative">
                            <img class="img-fluid" src=" {{asset('uploads/news/'. $data->image)}} " style="height: 250px; object-fit:cover; width:100%;">
                        </div>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</section>
<div class="clearfix"></div>

@include('web.layouts.footer')
