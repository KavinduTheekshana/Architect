<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')




<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0 col-fw">
    <div class="gray-bg">
        <div class="color" style="background: #000;">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach($services as $service)
                    <div class="swiper-slide">
                        <img src="{{asset($service->image)}}" style="width: 100%;
                            height: fit-content;
                            margin: auto;" alt="" />
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