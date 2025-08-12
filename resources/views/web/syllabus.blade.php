@include('web.layouts.header')

<style>
    .accordion-item {
        border-bottom: 1px solid #dee2e6 !important;
    }
</style>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Syllabus
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Student Section</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Syllabus</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>List of </span>Syllabus</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="row">
                        <div class="container">
                            <div class="row">
                                @foreach ($titles as $title)
                                    <div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6">
                                        <div class="accordion" id="accordionExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse{{ $title->id }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse{{ $title->id }}">
                                                        {{ $title->title }}
                                                    </button>
                                                </h2>
                                                <div id="collapse{{ $title->id }}"
                                                    class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <ul>
                                                            @foreach ($syllabus->where('title_id', $title->id) as $record)
                                                                <li><i class="fa fa-arrow-circle-right orange-text"
                                                                        aria-hidden="true"></i>
                                                                    <a
                                                                        href="{{ asset('uploads/syllabus/' . $record->file) }}">
                                                                        {{ $record->name }} </a>
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @include('web.layouts.quick-link-about')
        </div>
    </div>
</section>

@include('web.layouts.footer')
