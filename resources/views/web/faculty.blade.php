@include('web.layouts.header')

<style>
    .faculty a{
        border-radius: 30px;
        width: 15rem;
    }
    .link-subset{
        text-align: center;
    }
</style>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    University Faculties
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href=""> Academics</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">Facalites </a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container-fluid bg-light-grey">
        <div class="container search-light-cont">
            <div class="row search-light-bg-head">
                <div class="page-title">
                    <h2><span>List of Faculties</span>( {{ $facultyCount }} List of Faculties found)</h2>
                </div>
            </div>
            <div class="row mt-3">
                @foreach ($faculties as $faculty)
                    <div class="col-lg-3 mb-3">
                        <div class="card card-depart">
                            <div class="card-body depart">
                                <a class="link-subset">
                                    <div class="card-depart-icon mb-4 mt-1" style="font-size: 30px; color:#E16734">
                                        {!! $faculty->icon !!}
                                    </div>
                                </a>
                                <div class="link-subset mb-3">
                                    <h4 class="card-title">Faculty of {{ $faculty->name }} </h4>
                                </div>
                                <a href="tel:{{ $faculty->phone }}" class="link-subset">
                                    <div class="card-phone mb-2" style="font-size: 18px">
                                        <i class="fa fa-phone"></i>
                                        {{ $faculty->phone }}
                                    </div>
                                </a>
                                <a href="mailto:{{ $faculty->email }}" target="blank" class="link-subset"
                                    style="font-size: 18px">
                                    <div class="card-email mb-3">
                                        <i class="fa fa-envelope"></i>
                                        {{ $faculty->email }}<br />
                                    </div>
                                </a>
                                <div class="faculty" style="text-align: center;">
                                    <a href="{{ route('viewfaculties', $faculty->id) }}"
                                        class="btn btn-outline-primary light-purple">View
                                        Faculty</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

@include('web.layouts.footer')
