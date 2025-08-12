@include('web.layouts.header')

<style>
    /*    nav > .nav.nav-tabs{

            border: none;
            color:#0b416f;
            background:#575656;
            border-radius:0;
        }
        nav > div a.nav-item.nav-link,
        nav > div a.nav-item.nav-link.active
        {
            border: none;
            padding: 18px 25px;
            color:#fff;
            border-radius:0;
        }
        nav > div a.nav-item.nav-link.active:after
        {
            content: "";
            position: relative;
            bottom: -58px;
            left: -25%;
            border: 15px solid transparent;
            border-top-color: #0B416F;
        }
        .tab-content{
            background: #fdfdfd;
            line-height: 25px;
            border: 1px solid #ddd;
            border-top:5px solid #E16734;
            border-bottom:5px solid #E16734;
            padding:30px 40px !important;
        }

        nav > div a.nav-item.nav-link:hover,
        nav > div a.nav-item.nav-link:focus
        {
            border: none;
            background: #0B416F;
            color:#fff;
            border-radius:0;
            transition:background 0.20s linear;
        }*/
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    University Administrations
                </h1>
                <p class="text-white link-nav"><a href="index.php">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="about.php"> Administration</a> <span class="lnr lnr-arrow-right"></span> <a
                        class="orange-text">University Administrations</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-9 col-xs-12">
                <div class="page-title">
                    <h2><span>University</span> Officers</h2>
                </div>
                <dl class="accordion full-width">
                    @foreach ($title as $data)
                        <dt>
                            <a href="">{{ $data->title }}</a>
                        </dt>
                        <dd>
                            <div class="executive-table">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Designation</th>
                                                <th class="text-center">Name</th>
                                                <th class="text-center">Image</th>
                                                <th class="text-center">Resume</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($officers->where('title_id', $data->id) as $officer)
                                                <tr>
                                                    <td> {{ $officer->designation }} </td>
                                                    <td> {{ $officer->name }} </td>
                                                    <td> <img class="rotate-image" src="{{ asset('uploads/universityOfficer/'. $officer->image) }}" /></td>
                                                    <td>
                                                        <center><a href=" {{asset('uploads/universityOfficer/'. $officer->resume)}} " target="blank" class="resume-icon"><i
                                                                    class="fa fa-file-pdf-o"></i></a></center>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </dd>
                    @endforeach
                </dl>
            </div>
            @include('web.layouts.quick-link-about')
        </div>
    </div>
</section>
@include('web.layouts.footer')


<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Directory-MMHAPU";
    });
</script>
