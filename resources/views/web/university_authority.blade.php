@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    University Authority
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Administration</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">University Authorities</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>University</span> Authorities</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <dl class="accordion full-width">
                        @foreach ($titles as $title)
                            <dt>
                                <a href="">{{ $title->title }}</a>
                            </dt>
                            <dd>
                                <div class="executive-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" width="30%">Position</th>
                                                    <th class="text-center" width="30%">Name</th>
                                                    <th class="text-center" width="40%">Designation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($title->positions as $position)
                                                    @foreach ($position->authorities as $index => $authority)
                                                        @if ($index == 0)
                                                            <tr>
                                                                <td rowspan="{{ $position->authorities->count() }}"
                                                                    style="vertical-align: middle;">
                                                                    <b>{{ $position->position }}</b>
                                                                </td>
                                                                <td>{{ $authority->name }}</td>
                                                                <td>{{ $authority->designation }}</td>
                                                            </tr>
                                                        @else
                                                            <tr>
                                                                <td>{{ $authority->name }}</td>
                                                                <td>{{ $authority->designation }}</td>
                                                            </tr>
                                                        @endif
                                                    @endforeach
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </dd>
                        @endforeach
                    </dl>
                </div>
            </div>

            @include('web.layouts.quick-link-about')

        </div>
    </div>
</section>

@include('web.layouts.footer')


{{-- <script type="text/javascript">
    $(document).ready(function() {
        document.title = "University Authority - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script> --}}
