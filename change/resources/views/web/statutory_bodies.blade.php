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
                    Statutory Administrative Officers
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home</a><span class="lnr lnr-arrow-right"></span><a
                        href="">Administration</a><span class="lnr lnr-arrow-right"></span><a class="orange-text">Statutory Administrative Officers</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Statutory Administrative </span>Officers</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Resume</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i =1;
                                    @endphp
                                    @foreach ($administativeOfficers as $data)
                                        <tr>
                                            <td> {{ $data->designation }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td> {{ $data->email }} </td>
                                            <td> {{ $data->contact }} </td>
                                            <td style="padding: 15px">
                                                <center><a target="blank" href=" {{ asset('uploads/administrative/'. $data->resume) }} " target="_blank"  class="resume-icon"> <i class="fa fa-file-pdf-o"></i></a></center>
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


{{-- <script type="text/javascript">
    $(document).ready(function() {
        document.title = "Statutory Administrative Officers";
    });
</script> --}}
