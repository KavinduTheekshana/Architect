<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

@push('description')
<nav id="second-menu-gallery" class="nav flex-column second-menu-nav">
    <ul class="temp-ul">
        @foreach($awards as $award)
        <li>
            <a class="nav-link {{ Request::segment(2) === $award->slug ? 'active' : null }}" href="{{ url('award/'.$award->slug) }}">{{$award->title}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
@endpush


<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0 col-fw">
    <div class="gray-bg">
        <div class="color">
            <div class="about">
                <div class="container p-0">
                    <div class="center m-auto p-0 hoverimage">
                        <img src="{{asset('app/image/galleries/Awards Cover_V3.jpg')}}" id="cover_image_gallery" style="height: 494px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<!-- @push('swipper-scripts')
<script>
    $(document).ready(function() {
        var href_cover = $("#cover_image_gallery").attr('src');
        $("li").hover(function() {
            var href = $(this).attr('cover');
            $("#cover_image_gallery").attr("src", href)

        }, function() {
            $("#cover_image_gallery").attr("src", href_cover)
        });
    });
</script>
@endpush -->

@endsection

<!-- ---------------- footer ------------ -->