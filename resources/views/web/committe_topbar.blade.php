@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Committees
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span><a
                        class="orange-text">Committees</a></p>
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
                <dl class="accordion full-width">
                    @foreach ($title as $data)
                        <dt>
                            <a href="">{{ $data->title }}</a>
                        </dt>
                        <dd>
                            <div class="executive-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Designation</th>
                                                <th class="text-center">Position</th>
                                                <th class="text-center">Email</th>
                                                <th class="text-center">Contact</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($committes->where('title_id', $data->id) as $committe)
                                                <tr>
                                                    <td> {{ $committe->name }} </td>
                                                    <td> {{ $committe->designation }} </td>
                                                    <td> {{ $committe->position }} </td>
                                                    <td> {{ $committe->email }} </td>
                                                    <td> {{ $committe->contact }} </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </dd>
                    @endforeach
                </dl>
            </div>
            @include('web.layouts.quick-link-about')
        </div>
    </div>
</section>
@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Directory-MMHAPU";
    });
</script>
