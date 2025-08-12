@include('web.layouts.header')

<style type="text/css">
    .fancy-collapse-panel .panel-default>.panel-heading {
        padding: 0;

    }

    .fancy-collapse-panel .panel-heading a {
        padding: 12px 35px 12px 15px;
        display: inline-block;
        width: 100%;
        font-size: 13px;
        background-color: #eeeeee;
        color: #000000;
        position: relative;
        text-decoration: none;
        margin-bottom: 5px;
    }

    .fancy-collapse-panel .panel-heading a:after {
        font-family: "FontAwesome";
        content: "\f147";
        position: absolute;
        right: 20px;
        font-size: 13px;
        font-weight: 400;
        top: 50%;
        line-height: 1;
        margin-top: -10px;
    }

    .fancy-collapse-panel .panel-heading a.collapsed:after {
        content: "\f196";
    }
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    e-Learning : An ICT initiative for E-learning - PPT Presentations
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Student Section</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">eLearning / eResource</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>e-Learning : </span>An ICT initiative for E-learning - PPT Presentations</h2>
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
                                                            @foreach ($eLearning->where('title_id', $title->id) as $record)
                                                                <li><i class="fa fa-arrow-circle-right orange-text"
                                                                        aria-hidden="true"></i>
                                                                    <a
                                                                        href="{{ asset('uploads/eLearning/' . $record->file) }}">
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
        </div>
    </div>
</section>


@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Attendance - MAULANA MAZHARUL HAQUE ARABIC AND PERSIAN UNIVERSITY (Bihar)";
    });
</script>
