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
                    fazil
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home</a><span class="lnr lnr-arrow-right"></span><a
                        href="">Academics</a><span class="lnr lnr-arrow-right"></span><a href="">
                        Madarsa</a><span class="lnr lnr-arrow-right"></span><a class="orange-text">FAZIL</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>FAZIL</span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No.</th>
                                        <th class="text-center">Name of the Madrasa</th>
                                        <th class="text-center">Management</th>
                                        <th class="text-center">Regulating Body</th>
                                        <th class="text-center">Subject</th>
                                        <th class="text-center">Intake</th>
                                        <th class="text-center">District</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Incharge of Madrasa</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Code</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i =1;
                                    @endphp
                                    @foreach ($fazil as $data)
                                        <tr>
                                            <td> {{ $i }} </td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->managment }}</td>
                                            <td>{{ $data->regulating }}</td>
                                            <td>{{ $data->course }}</td>
                                            <td>{{ $data->intake }}</td>
                                            <td>{{ $data->district }}</td>
                                            <td>{{ $data->address }}</td>
                                            <td>{{ $data->email }}</td>
                                            <td>{{ $data->incharge }}</td>
                                            <td>{{ $data->contact }}</td>
                                            <td>{{ $data->code }}</td>
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
