<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

@push('description')
<nav id="second-menu-gallery-content" class="nav flex-column second-menu-nav">
    <ul class="temp-ul">
        <li>
            <a class="nav-link" href="{{ url('publication',$single_publication->slug) }}">{{$single_publication->place}}
            </a>
        </li>
    </ul>

    <p>
    {{$single_publication->description}}
    </p>
</nav>
@endpush


<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0 col-fw">
    <div class="gray-bg">
        <div class="color">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach($single_publication->publications_images as $publication)
                    <div class="swiper-slide">
                        <img src="{{asset($publication->url)}}" alt="" />
                    </div>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
</div>




@push('swipper-scripts')
<script>
    var swiper = new Swiper(".mySwiper", {
        keyboard: {
          enabled: true,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush

@endsection

<!-- ---------------- footer ------------ -->