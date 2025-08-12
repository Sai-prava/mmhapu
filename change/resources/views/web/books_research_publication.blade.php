@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Books & Research Publication
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href=""> Publication</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Books & Research Publication</a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area event-page-lists book_research_bg">

    <div class="container mt-60 pb-60">
        <div class="row">
            <div class="col-sm-1 col-md-1 col-xs-1"></div>
            <div class="col-sm-3 col-md-3 col-xs-3">
                <ul>
                    <li class=""><a href="#"
                            class="btn book_research_btn book_research_btn1 mb-50">Books</a></li>
                    <li class=""><a href="journals.php"
                            class="btn book_research_btn book_research_btn2 mb-50">Journals</a></li>
                    <li><a href=" {{ route('monograph') }}" class="btn book_research_btn book_research_btn3">Monograph</a></li>
                </ul>
            </div>
            <div class="col-sm-8 col-md-8 col-xs-8">
                <img src="{{ asset('web/images/Books & Research Publation_1.png') }}"
                    alt="Books & Research Publation.png" class="img img-responsive float-right">
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')
