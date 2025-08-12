@include('web.layouts.header')

<style>
    .accordion details {
        margin-bottom: 3px;
        margin-top: 3px;
    }

    .accordion summary {
        cursor: pointer;
        /* padding: 10px; */
        font-weight: bold;
        position: relative;
        list-style: none;
    }

    .accordion summary::after {
        content: "\f054";
        font-family: FontAwesome;
        position: absolute;
        right: 10px;
        transition: transform 0.2s ease;
    }

    .accordion details[open] summary::after {
        transform: rotate(90deg);
    }

    .accordion hr {
        margin: 0;
    }
</style>

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    UNIVERSITY ADMINISTRATORS
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="about.php"> University Administrators</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">{{ $view_team->name }}</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>University </span>Administrators</h2>
                </div>
                {{-- <div class="mb-20">
                    <div class="detials">
                        <div class="desc-wrap marquee_text">
                            <div class="whiteBox" style="float: none;">
                                <img src="{{asset('Team/'.$view_team->photo)}}"
                                    class="img img-responsive" style="width: 300px; height:220px;">
                                <div class="vcBox-content text-justify">
                                    <h5>{{ $view_team->name }}</h5>
                                    <h5>{{$view_team->designation}}</h5>
                                    <h5>{{$view_team->s_description}}</h5>
                                    <br />
                                    <p class="text-justify">{!!$view_team->details!!}</p>
                                </div>
                                <div class="text-justify" style="font-size: 22px; padding: 10px 10px 10px 10px; text-align: center;">
                                    <a href="{{$view_team->facebook}}" style="padding: 5px"><i class="fa fa-facebook-f"></i></a>
                                    <a href="{{$view_team->x}}" style="padding: 5px"><i class="fa fa-twitter"></i></a>
                                    <a href="{{$view_team->instagram}}" style="padding: 5px"><i class="fa fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="faculty-member mb-20" style="padding: 20px;">
                    <div class="details" style="display: flex; align-items: flex-start;">
                        <div class="image" style="flex-shrink: 0; margin-right: 40px; text-align: center;">
                            <img src="{{ asset('Team/' . $view_team->photo) }}" class="img img-responsive"
                                style="width: 200px; height:220px; object-fit: cover; border: 1px solid #ddd; border-radius:5% ;">
                            <div class="name-box"
                                style="margin-top: 10px; background-color: #0B416F; padding: 10px; border: 1px solid #ccc; display: inline-block;">
                                <h5 style="margin: 0; color:#fff;"> {{ $view_team->name }}</h5>
                            </div>
                        </div>
                        <div class="info">
                            <p><strong style="min-width: 90px; display: inline-block;">Designation</strong>:
                                {{ $view_team->designation }}</p>
                            <p><strong style="min-width: 90px; display: inline-block;">Qualification</strong>:
                                {{ $view_team->qualification }}</p>
                            <p><strong style="min-width: 90px; display: inline-block;">Short Desc.</strong>:
                                {{ $view_team->s_description }}</p>
                            <p><strong style="min-width: 90px; display: inline-block;">Mobile</strong>:
                                {{ $view_team->phone }}</p>
                            <p><strong style="min-width: 90px; display: inline-block;">Email</strong>:
                                {{ $view_team->email }}</p>
                            {{-- <p><strong style="min-width: 90px; display: inline-block;">Time Table</strong>: <a href="{{ $view_team->time_table_link }}" style="color: #d9534f;">M.Sc, B.Sc</a></p> --}}
                            <div style="margin-top: 10px;">
                                <a href="{{ asset('Resume/' . $view_team->resume) }}" class="btn btn-primary"
                                    target="blank">Complete CV</a>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="desc-wrap marquee_text">
                        <dl class="accordion full-width">
                            <details>
                                <summary>PROFILE</summary>
                                <div class="executive-table mt-3">
                                    <div class="table-responsive">
                                        {!! $view_team->details !!}
                                    </div>
                                </div>
                            </details>
                            <hr>
                            <details>
                                <summary>STUDY MATERIAL</summary>
                                <div class="executive-table mt-3">
                                    <table class="table table-striped table-bordered">
                                        <thead class="thead-dark">
                                            <tr>
                                                <th>TITLE</th>
                                                <th style="text-align: center;">UPLOADED DATE</th>
                                                <th style="text-align: center;">DOWNLOAD</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($study_material as $data)
                                                <tr>
                                                    <td><b>{{ $data->list }}</b></td>
                                                     <td style="text-align: center;">
                                                        {{ date('m/d/Y', strtotime($data->created_at)) }}</td>
                                                    <td style="text-align: center;">
                                                        <a href="{{ asset('Team/' . $data->pdf) }}" target="_blank"
                                                            style="font-size: 20px;">
                                                            <i class="fa fa-download"></i>
                                                        </a>
                                                    </td>
                                                   
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </details>
                        </dl>
                    </div>
                </div>


            </div>

            @include('web.layouts.quick-link-about')

        </div>
    </div>
</section>


@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "MMHAPU (Bihar)";
    });
</script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('dl.accordion dt').click(function() {
            const currentDd = $(this).next('dd');

            if (currentDd.is(':visible')) {
                currentDd.slideUp(); // Close the section if it's already open
            } else {
                $('dl.accordion dd').slideUp(); // Close all sections
                currentDd.slideDown(); // Open the clicked section
            }
        });
    });
</script>
