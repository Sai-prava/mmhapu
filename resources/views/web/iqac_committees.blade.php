@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Internal Quality Assurance Cell (IQAC)
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="about.php"> IQAC</a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">IQAC
                        Committees</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>COMMITTEES</span> (IQAC)</h2>
                </div>
                <div class="desc-wrap">
                    <h6 class="mb-20"><i class="fa fa-arrow-circle-o-right orange-text" aria-hidden="true"></i> <a href="#" target="_blank">Office Orders</a></h6>
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
                                    @foreach ($committees as $data)

                                    <tr>
                                        <td class="text-center">{{ $i }}</td>
                                        <td> {{ $data->name_address }} </td>
                                        <td class="text-center"> {{ $data->designation }} </td>
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
    </div>
</section>



@include('web.layouts.footer')
