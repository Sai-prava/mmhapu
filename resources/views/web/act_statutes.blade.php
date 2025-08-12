@include('web.layouts.header')

<style>
    .table thead tr th {
        background-color: #0B416F;
        color: white;
    }
</style>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Act & Statutes
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> About</a> <span class="lnr lnr-arrow-right"></span> <a href="act_statutes.php"
                        class="orange-text"> Act & Statutes</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Act & Statutes</span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">View/Download</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($act_statutes as $data)
                                        <tr>
                                            <td> <a target="blank"
                                                    href=" {{ asset('uploads/ActStatus/' . $data->file) }} "
                                                    target="_blank"> {{ $data->title }} </a></td>
                                            <td> {{ \Carbon\Carbon::parse($data->date)->format('jS F Y') }} </td>
                                            <td style="padding: 15px">
                                                <center><a target="blank"
                                                        href=" {{ asset('uploads/ActStatus/' . $data->file) }} "
                                                        target="_blank" class="resume-icon"> <i
                                                            class="fa fa-file-pdf-o"></i></a></center>
                                            </td>
                                        </tr>
                                        @php
                                            $i++;
                                        @endphp
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            @include('web.layouts.quick-link-about')
        </div>
</section>

@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Act & Statutes - Mahatma Gandhi Central University, Motihari (Bihar)";
    });
</script>
