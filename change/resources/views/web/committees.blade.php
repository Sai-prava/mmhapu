@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Committees
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> IQAC</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">IQAC Committees</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Committees</span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <dl class="accordion full-width">
                        @foreach ($committeesTitles as $title)
                            <dt>
                                <a href="#">{{ $title->title }}</a>
                            </dt>
                            <dd style="display: none;">
                                <div class="executive-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">S.No.</th>
                                                    <th class="text-center">Name & Address</th>
                                                    <th class="text-center">Designation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @if (isset($committeesCells[$title->id]))
                                                    @foreach ($committeesCells[$title->id] as $data)
                                                        <tr>
                                                            <td class="text-center">{{ $i }}.</td>
                                                            <td>{{ $data->name }}</td>
                                                            <td class="text-center">{{ $data->designation }}</td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="3" class="text-center">No data available</td>
                                                    </tr>
                                                @endif
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
<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <!-- Cells Section -->
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Cells</span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <dl class="accordion full-width">
                        @foreach ($cellsTitles as $title)
                            <dt>
                                <a href="#">{{ $title->title }}</a>
                            </dt>
                            <dd style="display: none;">
                                <div class="executive-table">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">S.No.</th>
                                                    <th class="text-center">Name & Address</th>
                                                    <th class="text-center">Designation</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @php
                                                    $i = 1;
                                                @endphp
                                                @if (isset($cells[$title->id]) && count($cells[$title->id]) > 0)
                                                    @foreach ($cells[$title->id] as $data)
                                                        <tr>
                                                            <td class="text-center">{{ $i }}.</td>
                                                            <td>{{ $data->name }}<br>{{ $data->address }}</td>
                                                            <td class="text-center">{{ $data->designation }}</td>
                                                        </tr>
                                                        @php
                                                            $i++;
                                                        @endphp
                                                    @endforeach
                                                @else
                                                    <tr>
                                                        <td colspan="3" class="text-center">No data available</td>
                                                    </tr>
                                                @endif
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </dd>
                        @endforeach
                    </dl>
                </div>
            </div>
        </div>
</section>


@include('web.layouts.footer')

<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Committees & Cells - MAULANA MAZHARUL HAQUE ARABIC & PERSIAN UNIVERSITY (Bihar)";
    });
</script>
