@extends('layouts.backend.awards.navigation')

@section('content')


<div class="container mt-5 mb-5">
    @if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <strong>Whoops!</strong> There were some problems with your input.<br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif

    @if (session('update'))
    <div class="alert alert-warning" role="alert">
        {{ session('update') }}
    </div>
    @endif

    <div class="card p-5">

    <div class="mb-5">
        <h3>View or Update Award</h3>
    </div>
        <form role="form" action="{{route('update-award')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" name="id" class="form-control" value="{{$award->id}}" readonly placeholder="Award ID">
                </div>
            </div>


            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" value="{{$award->title}}" placeholder="Enter Award Title">
                </div>
            </div>

            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">Slug</label>
                <div class="col-sm-10">
                    <input type="text" name="slug" class="form-control" value="{{$award->slug}}" placeholder="Slug">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Order</label>
                <div class="col-sm-10">
                    <input type="number" name="order" class="form-control" value="{{$award->order}}" placeholder="Enter Order Number">
                </div>
            </div>


            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4" placeholder="Award Description">{{$award->description}}</textarea>
                </div>
            </div>

            <div class="row pt-5 pb-5">
                @foreach($award->award_images as $awards)
                <div class="col-md-3 mt-4">
                    <img src="{{asset($awards->url)}}" alt="">
                </div>
                @endforeach
            </div>






            <div class="text-right">

                <a href="{{ url('awards/delete',[$award->slug]) }}" type="button" class="btn btn-danger ml-auto">Delete</a>

                <button type="submit" class="btn btn-warning ml-auto">Update Award Details</button>

            </div>



        </form>
    </div>
</div>



<!-- <div class="container mt-5 mb-5">
    <div class="card p-5">
    <form action="/target" class="dropzone"></form>
    </div>
</div> -->

@endsection