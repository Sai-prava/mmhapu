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
                    B.Ed
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home</a><span class="lnr lnr-arrow-right"></span><a
                        href="">Academics</a><span class="lnr lnr-arrow-right"></span><a href="">
                        Colleges</a><span class="lnr lnr-arrow-right"></span><a class="orange-text">B.Ed</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>B.Ed</span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No.</th>
                                        <th class="text-center">File No.</th>
                                        <th class="text-center">Name of B.Ed Colleges</th>
                                        <th class="text-center">Management</th>
                                        <th class="text-center">Affiliting Body</th>
                                        <th class="text-center">Course Name</th>
                                        <th class="text-center">Intake</th>
                                        <th class="text-center">District</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Website</th>
                                        <th class="text-center">Director/Principal</th>
                                        <th class="text-center">Contact No.</th>
                                        <th class="text-center">Code</th>
                                        <th class="text-center">NCTE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($Bed as $data)
                                        <tr>
                                            <td> {{ $i }} </td>
                                            <td> {{ $data->file_no }} </td>
                                            <td> {{ $data->college_name }} </td>
                                            <td> {{ $data->management }} </td>
                                            <td> {{ $data->affiliting }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td> {{ $data->intake }} </td>
                                            <td> {{ $data->district }} </td>
                                            <td> {{ $data->address }} </td>
                                            <td> {{ $data->email }} </td>
                                            <td> {{ $data->website }} </td>
                                            <td> {{ $data->director }} </td>
                                            <td> {{ $data->contact }} </td>
                                            <td> {{ $data->code }} </td>
                                            <td style="padding: 15px">
                                                <center><a target="blank"
                                                        href=" {{ asset('uploads/bed/' . $data->resume) }} "
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
            {{-- @include('web.layouts.quick-link-about') --}}
        </div>
</section>

@include('web.layouts.footer')


{{-- <script type="text/javascript">
    $(document).ready(function() {
        document.title = "Statutory Administrative Officers";
    });
</script> --}}
