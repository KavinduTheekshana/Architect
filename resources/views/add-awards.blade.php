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
    
    <div class="card p-5">


        <form role="form" action="{{route('save-award')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <input type="text" name="title" class="form-control" placeholder="Enter Award Title">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Order</label>
                <div class="col-sm-10">
                    <input type="number" name="order" class="form-control" placeholder="Enter Order Number">
                </div>
            </div>


            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="4" placeholder="Award Description"></textarea>
                </div>
            </div>

            <!-- 
            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">Cover Image</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div> -->

            <div class="mb-3 row required">
                <label for="staticEmail" class="col-sm-2 col-form-label">Gallery</label>
                <div class="col-sm-10">
                    <input class="form-control" name="image[]" type="file" id="formFileMultiple" multiple>
                </div>
            </div>




            <div class="text-right">
                <button type="submit" class="btn btn-success ml-auto">Save Award Details</button>
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