@include('web.layouts.header')

<style>
    table.table-bordered {
        border: 1px solid #a4cce9;
    }

    table.table-bordered th,
    table.table-bordered td {
        border: 1px solid #a4cce9;
    }
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
                    MOU<small>s</small>
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="about.php"> IQAC</a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">IQAC
                        MOUs</a></p>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <div class="executive-table">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center">S.No.</th>
                                    <th class="text-center">Name Of The Institute</th>
                                    <th class="text-center">Collaborative Department In The University</th>
                                    <th class="text-center">Country</th>
                                    <th class="text-center">Dated/ Year</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($mous as $data)
                                    <tr>
                                        <td>{{ $i }}.</td>
                                        <td> {{ $data->institute }} </td>
                                        <td> {{ $data->collaborative }} </td>
                                        <td> {{ $data->country }} </td>
                                        <td>{{ \Carbon\Carbon::parse($data->dated)->format('jS F Y') }} </td>
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
    </div>
</section>




@include('web.layouts.footer')
