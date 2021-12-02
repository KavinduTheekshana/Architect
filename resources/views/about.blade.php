<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

<!-- -------------------- body ---------- -->



<div class="col col-md-12 col-lg-12 p-0 about-mob d-none">
  <div class="justify-content-center align-items-cente mt-4">
    <h6 class="align-middle">
      DAMITH S MUNASINGHE ASSOCIATES (DSMA),
    </h6>
    <p class="description">
      is a registered organization with a qualified young team of
      Architects, Interior designers, Landscape Architects,
      Engineers, Green Consultants and Quantity Surveyors. The
      DSMA provides a total solution of Architectural, Interior
      designing, Structural Engineering, MEP Engineering and
      Quantity Surveying. They are always specific and committed
      to encourage Clients towards the use of environmentally
      friendly practices and aesthetically unique design
      attributes. (DSMA) is a renowned architectural firm
      specializing in the innovative and progressive design of
      commercial, industrial, Institutional, Recreational,
      Residential projects in Sri Lanka. The architectural Firm is
      set up as a design studio. It provides a philosophy
      dedicated service to produce the possible best quality
      product. DSMA takes every project as a fresh job and crafts
      an artifact with a unique character and a meaning after
      considering carefully the client’s need.
    </p>

    <div class="team team-mob">
      <div class="row">


        @foreach($members as $member)
        <div class="image-details col-sm-4 col-md-3">
          <img src="{{asset($member->image)}}" alt="" />
          <div class="details">
            <p>{{$member->title}}</p>
            <p>{{$member->name}}</p>
          </div>
        </div>
        @endforeach

      </div>












    </div>
  </div>
</div>

<div class="col col-md-10 p-0 about-pc">
  <div class="gray-bg">
    <div class="color">
      <div class="about">
        <div class="container p-0">
          <div class="col-md-10 center m-auto p-0">
            <div class="justify-content-center align-items-cente">
              <h6 class="align-middle">
                DAMITH S MUNASINGHE ASSOCIATES (DSMA),
              </h6>
              <p class="description">
                is a registered organization with a qualified
                young team of Architects, Interior designers,
                Landscape Architects, Engineers, Green Consultants
                and Quantity Surveyors. The DSMA provides a total
                solution of Architectural, Interior designing,
                Structural Engineering, MEP Engineering and
                Quantity Surveying. They are always specific and
                committed to encourage Clients towards the use of
                environmentally friendly practices and
                aesthetically unique design attributes. (DSMA) is
                a renowned architectural firm specializing in the
                innovative and progressive design of commercial,
                industrial, Institutional, Recreational,
                Residential projects in Sri Lanka. The
                architectural Firm is set up as a design studio.
                It provides a philosophy dedicated service to
                produce the possible best quality product. DSMA
                takes every project as a fresh job and crafts an
                artifact with a unique character and a meaning
                after considering carefully the client’s need.
              </p>


            </div>
          </div>


          <div class="col-md-11 center m-auto p-0">
            <div class="team team-pc" style="height: 286px;overflow: auto;">
              <div class="row ml4 mr-0 mt-3">

                @foreach($members as $member)
                <div class="single-image" style="width: 25%; margin-bottom: 25px;cursor: pointer;">
                  <img src="{{asset($member->image)}}" alt="" />
                  <p class="" style="text-align: center;">{{$member->title}}</p>
                  <p class="" style="text-align: center;">{{$member->name}}</p>
                </div>
                @endforeach

              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@push('services-scripts')

<!-- <div class="services" style="z-index: 99;">

  <div class="services-btn-section">
    <div class="services-btn">
      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
        <img src="{{asset('app/image/logo.png')}}" alt="">
      </button>
    </div>
    <p>Services</p>
  </div>
</div>

<div class="modal  fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-services modal-dialog-centered" role="document">
    <div class="modal-content" style="background-color: transparent;border: none;">

      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>

      <div class="swiper mySwiper" style="width: 100%;">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="{{asset('app/image/services-1.png')}}" style="width: 100%;" alt="">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('app/image/services-2.png')}}" style="width: 100%;" alt="">
          </div>
        </div>
        <div class="swiper-button swiper-button-next"></div>
        <div class="swiper-button swiper-button-prev"></div>
      </div>


    </div>
  </div>
</div> -->
@endpush


@push('swipper-scripts')
<script>
    var swiper = new Swiper(".mySwiper", {
      keyboard: {
          enabled: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
</script>
@endpush



@endsection

<!-- ---------------- footer ------------ -->