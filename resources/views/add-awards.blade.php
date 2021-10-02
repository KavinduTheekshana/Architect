@extends('layouts.backend.awards.navigation')

@section('content')


    <div class="container mt-5 mb-5">
        <div class="card p-5">


            <form>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Title</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Enter Award Title">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Slug</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" placeholder="Automatically Genarated Slug Here">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Award Description"></textarea>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Cover Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFile">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Gallery</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="file" id="formFileMultiple" multiple>
                    </div>
                </div>




                <div class="text-right">
                    <button type="button" class="btn btn-success ml-auto">Save Award Details</button>
                </div>



            </form>
        </div>
    </div>

    @endsection



