<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

@push('description')
<nav id="second-menu-gallery" class="nav flex-column second-menu-nav">
    <ul class="temp-ul">
        @foreach($publications as $publication)
        <li>
            <a class="nav-link {{ Request::segment(2) === $publication->slug ? 'active' : null }}" href="{{ url('publication/'.$publication->slug) }}">{{$publication->title}}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
@endpush


<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0 col-fw">
    <div class="gray-bg">
    <div class="color" style="background-color: #fff;">
            <div class="about">
                <div class="container p-0">
                    <div class="center m-auto p-0 hoverimage">
                        <img src="{{asset('app/image/galleries/Publications Cover_new.jpg')}}" id="cover_image_gallery" style="height: 494px; float: right;" alt="">
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