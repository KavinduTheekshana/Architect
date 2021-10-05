<!-- ---------- header -------------------->


@extends('layouts.frontend.main')

@section('content')

              <!-- -------------------- body ---------- -->
             
              <div class="col col-md-12 col-lg-10 p-0 gallery-content-full">
                <div class="gallery">
                  <div class="glt1">
                    <div class="glt1-1">
                    <a href="{{ url('gallery',$holder_a->slug) }}">
                        <img class="image-holder" src="{{asset($holder_a->image)}}" alt=""
                      /></a>
                    </div>
                    <div class="glt1-2">
                    <a href="{{ url('gallery',$holder_e->slug) }}">
                        <img class="image-holder" src="{{asset($holder_e->image)}}" alt=""
                      /></a>
                     
                    </div>
                  </div>
                  <div class="glt2">
                    <div class="glt2-1">
                      <div class="glt2-1-1">
                      <a href="{{ url('gallery',$holder_b->slug) }}">
                        <img class="image-holder" src="{{asset($holder_b->image)}}" alt=""
                      /></a>
                      </div>
                      <div class="glt2-1-2">
                      <a href="{{ url('gallery',$holder_c->slug) }}">
                        <img class="image-holder" src="{{asset($holder_c->image)}}" alt=""
                      /></a>
                      </div>
                    </div>
                    <div class="glt2-2">
                      <div class="glt2-2-1">
                      <a href="{{ url('gallery',$holder_f->slug) }}">
                        <img class="image-holder" src="{{asset($holder_f->image)}}" alt=""
                      /></a>
                      </div>
                      <div class="glt2-2-2">
                      <a href="{{ url('gallery',$holder_g->slug) }}">
                        <img class="image-holder" src="{{asset($holder_g->image)}}" alt=""
                      /></a>
                      </div>
                    </div>
                  </div>
                  <div class="glt3">
                    <div class="glt3-1">
                    <a href="{{ url('gallery',$holder_d->slug) }}">
                        <img class="image-holder" src="{{asset($holder_d->image)}}" alt=""
                      /></a>
                    </div>
                    <div class="glt3-2">
                    <a href="{{ url('gallery',$holder_h->slug) }}">
                        <img class="image-holder" src="{{asset($holder_h->image)}}" alt=""
                      /></a>
                    </div>
                    <div class="glt3-3">
                    <a href="{{ url('gallery',$holder_l->slug) }}">
                        <img class="image-holder" src="{{asset($holder_l->image)}}" alt=""
                      /></a>
                    </div>
                  </div>
                  <div class="glb1">
                    <div class="glb1-1">
                    <a href="{{ url('gallery',$holder_i->slug) }}">
                        <img class="image-holder" src="{{asset($holder_i->image)}}" alt=""
                      /></a>
                    </div>
                    <div class="glb1-2">
                    <a href="{{ url('gallery',$holder_j->slug) }}">
                        <img class="image-holder" src="{{asset($holder_j->image)}}" alt=""
                      /></a>
                    </div>
                    <div class="glb1-3">
                    <a href="{{ url('gallery',$holder_k->slug) }}">
                        <img class="image-holder" src="{{asset($holder_k->image)}}" alt=""
                      /></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
              @endsection
              
          <!-- ---------------- footer ------------ -->