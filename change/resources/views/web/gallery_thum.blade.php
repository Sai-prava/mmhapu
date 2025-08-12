@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Photo Gallery
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="#">About</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Photo Gallery</a>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="gallery-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>Photo</span> Gallery</h2>
                </div>
            </div>

            {{-- <div class="col-lg-12 col-md-12 col-xs-12">
                <form method="post" action="gallery_thum.php">
                    <div class="row gallery-search-box mb-40">
                        <div class="col-md-4">
                            <select name="year" id="year" class="form-control" onchange="getGalleryName()"
                                required="required">
                                <option value="">Select year</option>
                                <option value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="gallery_name" id="gallery_name" class="form-control" required="required">
                                <option value="">Select Gallery Name</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="btn_submit" value="Search"
                                class="btn btn-primary btn-block btn-sm btn">
                        </div>
                        <div class="col-md-2">
                            <a href="gallery_thum.php" class="btn btn-info btn-block btn-sm btn">Remove Search</a>
                        </div>
                    </div>
                </form>
            </div> --}}
            @foreach ($galleries as $gallery)

            <div class="col-lg-3 col-md-3 col-xs-12">
                <a href="{{route('viewGallery',$gallery->id)}}" onclick="viewFun('NTU=')">
                    <div class="single-imgs galleryThum relative">
                        <div class="relative">
                            <img class="img-fluid"
                                src="{{asset('uploads/gallery/'. $gallery->attach)}}"
                                alt="Meeting of the Planning and Monitoring Board"
                                style="min-height: 188px; max-height: 188px;">
                        </div>
                        <h5 class="text-center"> {{$gallery->title}} </h5>
                    </div>
                </a>
            </div>

            @endforeach
            <div class="clearfix"></div>

        </div>
    </div>
</section>

@include('web.layouts.footer')



<form id="frm" method="post" action="gallery.php"><input type="hidden" id="g_name" name="g_name"
        value="" /><button type="submit" style="display: none;"></button>
</form>
<script>
    function viewFun(id) {
        $("#g_name").val(id);
        $('#frm').submit();
    }
</script>
<script type="text/javascript">
    $(document).ready(function() {
        document.title = "Gallery - Mahatma Gandhi Central University, Motihari (Bihar)";
    });

    function getGalleryName() {
        var year = $("#year").val();
        $.ajax({
            url: 'get_data.php',
            data: {
                year: year
            },
            dataType: 'html',
            type: 'post',
            success: function(data) {
                $("#gallery_name").html(data);
            }
        });
    }
</script>
