@include('web.layouts.header')
<style>
    .label {
    font-size: 18px;
    font-weight: bold;
    color: #555;
    margin-bottom: 15px;
}

.years {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    justify-content: flex-start;
    margin-bottom: 20px;
}

.year-btn {
    background-color: #0B416F;
    color: white;
    border: none;
    padding: 8px 15px;
    font-size: 14px;
    cursor: pointer;
    border-radius: 5px;
    transition: background-color 0.3s;
}

.year-btn:hover {
    background-color: #0056b3;
}

/* PDF Viewer */
.pdf-viewer {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 30px;
        padding: 10px;
        background-color: #f9f9f9;
        border: 2px solid #ddd;
        border-radius: 8px;
        max-width: 820px;
        width: 100%;
        margin-left: auto;
        margin-right: auto;
        overflow: hidden;
        /* Prevent any content overflow */
    }

    .pdf-viewer iframe {
        width: 100%;
        max-width: 800px;
        max-height: 100%;
        border: none;
        overflow: hidden !important;
    }

    @media (max-width: 767px) {
        .years {
            justify-content: center;
            flex-wrap: wrap;
        }

        .year-btn {
            font-size: 12px;
            padding: 6px 12px;
            margin: 5px;
        }

        .pdf-viewer iframe {
            height: 300px;
            width: 100%;
        }
    }

    @media (max-width: 576px) {
        .pdf-viewer {
            padding: 8px;
        }

        .pdf-viewer iframe {
            height: 250px;
        }

        .year-btn {
            font-size: 10px;
            padding: 4px 10px;
        }
    }
</style>
<section class="banner-area relative about-banner" id="home">
    <div class="overlay overlay-bg"></div>
    <div class="container">
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Calender
                </h1>
                <p class="text-white link-nav"><a href="">Home </a> <span class="lnr lnr-arrow-right"></span> <a
                        href="">Calender</a></p>
            </div>
        </div>
    </div>
</section>

<section class="events-list-area section-gap event-page-lists">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-xs-12">
                <div class="page-title">
                    <h2><span>Calender</span></h2>
                </div>
                <div class="court-section">
                    <div class="years">
                        <span style="font-size:19px; font:bold;">Years : </span>
                        @forelse ($calenders as $calender)
                            <button class="year-btn btn-sm" data-year="{{ $calender->year }}">{{ $calender->year }}</button>
                        @empty
                            <span>No calenders available</span>
                        @endforelse
                    </div>
                </div>

                @if ($calenders->isNotEmpty() && $calenders->first()->calender)
                    <div class="pdf-viewer">
                        <iframe id="pdfViewer"
                            src="{{ asset('uploads/calender/' . $calenders->first()->calender) }}"
                            width="800px"
                            height="670px">
                        </iframe>
                    </div>
                @else
                    <div class="pdf-viewer">
                        <p>No calendar available for viewing.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.year-btn').on('click', function () {
            const year = $(this).data('year');

            $.ajax({
                url: "{{ route('getCalenderByYear') }}",
                type: "GET",
                data: { year: year },
                success: function (response) {
                    if (response && response.calender) {
                        const pdfPath = "{{ asset('uploads/calender/') }}/" + response.calender;
                        $('#pdfViewer').attr('src', pdfPath);
                    } else {
                        alert('No calendar found for the selected year.');
                    }
                },
                error: function () {
                    alert('An error occurred while fetching the calendar.');
                }
            });
        });
    });
</script>
@include('web.layouts.footer')
