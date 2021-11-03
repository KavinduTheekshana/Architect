<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')




<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0 col-fw">
    <div class="gray-bg">
    <div class="color" style="background: #000;">
                    <div class="swiper mySwiper">
                      <div class="swiper-wrapper service-slider">

                    @foreach($services as $service)
                    <div class="swiper-slide" style="width: 100px;">
                        <img src="{{asset($service->image)}}" alt="" />
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