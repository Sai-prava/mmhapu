@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Newspaper Clippings
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="#">Publications</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Newspaper Clippings</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="gallery-area section-gap">
    <div class="container mt-50">
        <div class="row">
            @foreach ($newses as $news)

            <div class="col-lg-3 col-md-3 col-xs-12">
                <a href="{{ route('news.single',$news->id) }}">
                    <div class="single-imgs galleryThum relative">
                        <div class="relative">
                            <img class="img-fluid" src="{{asset('uploads/news/'. $news->attach)}}" alt="01-12-2022"
                                style="min-height: 200px; max-height: 200px;">
                        </div>
                        <h5 class="text-center">{{ $news->title }} <span>( {{$news->date}} )</span></h5>
                    </div>
                </a>
            </div>

            @endforeach
        </div>
    </div>
</section>


@include('web.layouts.footer')



<script type="text/javascript">
    $(document).ready(function() {
        document.title = "News Paper Clippings - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
