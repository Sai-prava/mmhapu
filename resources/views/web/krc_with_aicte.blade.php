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
                    Vocational College With AICTE Recognition
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home</a><span class="lnr lnr-arrow-right"></span><a
                        href="">Academics</a><span class="lnr lnr-arrow-right"></span><a href="">
                        Vocational College</a><span class="lnr lnr-arrow-right"></span><a class="orange-text">Vocational College With AICTE
                        Recognition</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>Vocational College </span>With AICTE Recognition</h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                    <th class="text-center">S.No.</th>
                                        <th class="text-center">File No.</th>
                                        <th class="text-center">Name of the Vocational College</th>
                                        <th class="text-center">Management</th>
                                        <th class="text-center">Affiliating Body</th>
                                        <th class="text-center">Course Name</th>
                                        <th class="text-center">Intake</th>
                                        <th class="text-center">Session</th>
                                        <th class="text-center">District</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Incharge of Vocational College</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Code</th>
                                        <th class="text-center">AICTE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i = 1;
                                    @endphp
                                    @foreach ($krc_with_aicte as $data)
                                        <tr>
                                             <td> {{ $i }} </td>
                                            <td> {{ $data->file_no }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td> {{ $data->management }} </td>
                                            <td> {{ $data->affiliating }} </td>
                                            <td> {{ $data->course_name }} </td>
                                            <td> {{ $data->intake }} </td>
                                            <td> {{ $data->session }} </td>
                                            <td> {{ $data->district }} </td>
                                            <td> {{ $data->address }} </td>
                                            <td> {{ $data->email }} </td>
                                            <td> {{ $data->incharge }} </td>
                                            <td> {{ $data->contact }} </td>
                                            <td> {{ $data->code }} </td>
                                            <td style="padding: 15px">
                                                <center><a target="blank"
                                                        href=" {{ asset('uploads/krc/' . $data->resume) }} "
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


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Statutory Administrative Officers";
    });
</script>
