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
                    Anti-Raging
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home</a><span class="lnr lnr-arrow-right"></span><a
                        href="">Student Section</a><span class="lnr lnr-arrow-right"></span><a class="orange-text">Anti-Raging</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>Anti-Raging</span></h2>
                </div>
                <div class="desc-wrap marquee_text">
                    <div class="executive-table">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th class="text-center">S.No.</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Contact</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i =1;
                                    @endphp
                                    @foreach ($antiRaging as $data)
                                        <tr>
                                            <td> {{ $i }} </td>
                                            <td> {{ $data->name }} </td>
                                            <td> {{ $data->designation }} </td>
                                            <td> {{ $data->email }} </td>
                                            <td> {{ $data->contact }} </td>

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
        document.title = "Statutory Administrative Officers";
    });
</script>
