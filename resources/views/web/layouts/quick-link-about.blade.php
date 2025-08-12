<div class="col-sm-3 col-md-3 col-xs-12">
    <div class="single-feature">
        <div class="title MGCUB_bg">
            <h4>Quick Links</h4>
        </div>
        <div class="desc-wrap marquee_text">
            <ul class="custom-list-style">
                @foreach (App\Models\Quicklink::all() as $quicklink)
                    <li>
                        <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>
                        <a href="{{ url($quicklink->url) }}"> {{ $quicklink->title }} </a>
                    </li>
                    <hr>
                @endforeach
            </ul>
        </div>
    </div>
</div>
