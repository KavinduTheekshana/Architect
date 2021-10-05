<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

@push('description')
<nav id="second-menu-gallery-content" class="nav flex-column second-menu-nav">
    <ul class="temp-ul">
        <li>
            <a class="nav-link" href="{{ url('award',$single_award->slug) }}">{{$single_award->place}}
            </a>
        </li>
    </ul>

    <p>
    {{$single_award->description}}
    </p>
</nav>
@endpush


<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0">
    <div class="gray-bg">
        <div class="color">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach($single_award->award_images as $award)
                    <div class="swiper-slide">
                        <img src="{{asset($award->url)}}" alt="" />
                    </div>
                    @endforeach

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>




@push('swipper-scripts')
<script>
    var swiper = new Swiper(".mySwiper", {
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush

@endsection

<!-- ---------------- footer ------------ -->