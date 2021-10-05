<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

@push('description')
<nav id="second-menu-gallery-content" class="nav flex-column second-menu-nav">
    <ul class="temp-ul">
        <li>
            <a class="nav-link" href="{{ url('gallery',$single_project->slug) }}">{{$single_project->title}}
            </a>
        </li>
    </ul>

    <p>
    {{$single_project->description}}
    </p>
</nav>
@endpush


<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0">
    <div class="gray-bg">
        <div class="color">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">

                    @foreach($single_project->project_images as $project)
                    <div class="swiper-slide">
                        <img src="{{asset($project->url)}}" alt="" />
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