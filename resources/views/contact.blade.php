<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

<!-- -------------------- body ---------- -->
<div class="col col-md-12 col-lg-10 p-0 col-fw flex-fill">
  <div class="gray-bg contact-gray display-content" style="height: 100% !important;">
    <div class="color">
      <div class="contact">
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2602890309076!2d79.87648801477255!3d6.859375695043009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25b8173f1cef1%3A0xa1240a91216a72fc!2s79%20Kadawatha%20Rd%2C%20Colombo%2010350!5e0!3m2!1sen!2slk!4v1632737020193!5m2!1sen!2slk" width="100%" height="100%" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="contact-details">
          <div class="container">

            <div class="row">
              <div class="col-md-12 p-0 m-0">
                <h6>Contact Details</h6>
              </div>

            </div>


            <div class="row">
              <div class="col-md-3 col-sm-3 col-3 p-0 m-0">
                <p>Address :</p>
              </div>
              <div class="col-md-9 col-sm-9 col-9 p-0 m-0">
                <p class="upper">
                  {!!$contact->address!!}
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-sm-3 col-3 p-0 m-0">
                <p>Tel :</p>
              </div>
              <div class="col-md-9 col-sm-9 col-9 p-0 m-0">
                <p>
                  {{$contact->telephone1}}<br />
                  {{$contact->telephone2}}1<br />
                  {{$contact->telephone3}}
                </p>
              </div>
            </div>

            <div class="row">
              <div class="col-md-3 col-sm-3 col-3 p-0 m-0">
                <p>Email :</p>
              </div>
              <div class="col-md-9 col-sm-9 col-9 p-0 m-0">
                <a href="mailto: {{$contact->email1}}">
                  <p>
                    {{$contact->email1}}
                </a>
                <br />
                <a href="mailto: {{$contact->email2}}"> {{$contact->email2}} </a><br />
                <a href="mailto: {{$contact->email3}}"> {{$contact->email3}}</a>
                </p>
              </div>
            </div>

            <div class="row social-icon">
              <a href="{{$contact->facebook}}" target="_blank"> <img src="{{asset('app/image/icon/facebook.svg')}}" alt=""></a>
              <a href="{{$contact->linkedin}}" target="_blank"><img src="{{asset('app/image/icon/linkedin.svg')}}" alt=""></a>
              <a href="{{$contact->instagram}}" target="_blank"><img src="{{asset('app/image/icon/instagram (2).svg')}}" alt=""></a>
              <a href="{{$contact->twitter}}" target="_blank"><img src="{{asset('app/image/icon/twitter.svg')}}" alt=""></a>
              <a href="{{$contact->youtube}}" target="_blank"><img src="{{asset('app/image/icon/youtube.svg')}}" alt=""></a>
              <a href="https://api.whatsapp.com/send?phone={{$contact->whatsapp}}" target="_blank"><img src="{{asset('app/image/icon/whatsapp.svg')}}" alt=""></a>

            </div>



          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@push('chat-scripts')

<script type="text/javascript">
  window.$crisp = [];
  window.CRISP_WEBSITE_ID = "bde850bf-5183-4e7f-95e4-9b79760fe98b";
  (function() {
    d = document;
    s = d.createElement("script");
    s.src = "https://client.crisp.chat/l.js";
    s.async = 1;
    d.getElementsByTagName("head")[0].appendChild(s);
  })();
</script>

@endpush
@endsection

<!-- ---------------- footer ------------ -->