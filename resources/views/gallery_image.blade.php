<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

@push('description')
<nav id="second-menu-gallery" class="nav flex-column second-menu-nav">
  <ul class="temp-ul">
    @foreach($projects as $project)
    <li id="gallery_list" cover="{{$project->cover_image}}">
      <a class="nav-link {{ Request::segment(2) === $project->slug ? 'active' : null }}" href="{{ url('gallery/'.$project->slug) }}">{{$project->title}}
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
          <div class="center m-auto p-0 hoverimage" >
            <img src="Image/10.jpg" id="cover_image_gallery" style="height: 494px;" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




@push('swipper-scripts')
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
@endpush

@endsection

<!-- ---------------- footer ------------ -->