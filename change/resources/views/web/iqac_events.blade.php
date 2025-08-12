@include('web.layouts.header')

<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    IQAC Event
                </h1>
                <p class="text-white link-nav">
                    <a href="index.php">Home </a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a href="#">IQAC</a>
                    <span class="lnr lnr-arrow-right"></span>
                    <a class="orange-text">Event</a>
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
                    <h2><span>IQAC</span> Event</h2>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-xs-12">
                <form method="post" action="{{ route('iqac_event_filter') }}">
                    @csrf
                    <div class="row gallery-search-box mb-40">
                        <div class="col-md-4">
                            <select name="year_id" id="year" class="form-control">
                                <option value="">Select year</option>
                                @foreach ($years as $title)
                                    <option value="{{$title->id}}"> {{ $title->year }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-4">
                            <select name="event_name" id="event_name" class="form-control">
                                <option value="">Select Event Name</option>
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" name="btn_submit" value="Search"
                                class="btn btn-primary btn-block btn-sm btn">
                        </div>
                        <div class="col-md-2">
                            <a href="{{route('iqac_event')}}" class="btn btn-info btn-block btn-sm btn">Remove Search</a>
                        </div>
                    </div>
                </form>
            </div>

            @foreach ($eventTitle as $title)
                <div class="col-lg-3 col-md-3 col-xs-12">
                    <a href="{{ route('viewEvent', $title->id) }}" onclick="viewFun('NTU=')">
                        <div class="single-imgs galleryThum relative">
                            <div class="relative">
                                <img class="img-fluid" src="{{ asset('iQAC Event/' . $title->image) }}"
                                    style="min-height: 188px; max-height: 188px;">
                            </div>
                            <h5 class="text-center"> {{ $title->title }} </h5>
                        </div>
                    </a>
                </div>
            @endforeach
            <div class="clearfix"></div>

        </div>
    </div>
</section>

@include('web.layouts.footer')

<script>
    $(document).ready(function() {
        $(document).on('change', '#year', function() {
            var year = $(this).val();
            $.ajax({
                type: "POST",
                url: '{{ route('viewTitle') }}',
                data: {
                    'title': year,
                    _token: "{{ csrf_token() }}"
                },
                dataType: 'json',
                success: function(response) {
                    $('#event_name').empty();
                    // $('#event_name').html(
                    //     '<option value="">Select Event</option>');
                    $.each(response, function(key, value) {
                        $('#event_name').append('<option value="' + value.title +
                            '">' + value.title + '</option>');
                    });
                },
            });
        });
    });
</script>
