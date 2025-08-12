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
                    Student Grievance Redressal Committee
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a class="orange-text">Student Grievance Redressal Committee</a></p>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-lg-9">
                <div class="page-title">
                    <h2><span>Student Grievance Redressal Committee</span></h2>
                </div>
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
                                    $i = 1;
                                @endphp
                                @foreach ($grievanceRedressal as $data)
                                    <tr>
                                        <td> {{ $i }} </td>
                                         <td> {{ $data->name }} </td>
                                        <td> {{ $data->designation }} </td>
                                        <td> {{ $data->email }} </td>
                                        <td>{{ $data->contact }} </td>
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
            @include('web.layouts.quick-link-about')
        </div>
    </div>
</section>




@include('web.layouts.footer')
