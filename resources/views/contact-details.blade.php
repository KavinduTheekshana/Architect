<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Details') }}
        </h2>
    </x-slot>



    <div class="container mt-5 pb-5">


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
            <form role="form" action="{{route('contact-details-address-update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Address</label>
                    <div class="col-sm-10">
                        <input type="text" name="address" class="form-control" value="{{$contacts->address}}" placeholder="Enter Address Here">
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-success ml-auto">Update Address</button>
                </div>
            </form>
        </div>


        <br>
        <hr>
        <br>

        <div class="card p-5">
            <form role="form" action="{{route('contact-details-telephone-update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Telephone 01</label>
                    <div class="col-sm-10">
                        <input type="text" name="telephone1" class="form-control" value="{{$contacts->telephone1}}" placeholder="Enter Telephone Number 01">
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Telephone 02</label>
                    <div class="col-sm-10">
                        <input type="text" name="telephone2" class="form-control" value="{{$contacts->telephone2}}" placeholder="Enter Telephone Number 02">
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Telephone 03</label>
                    <div class="col-sm-10">
                        <input type="text" name="telephone3" class="form-control" value="{{$contacts->telephone3}}" placeholder="Enter Telephone Number 03">
                    </div>
                </div>

                <div class="text-right">
                    <button type="submit" class="btn btn-warning ml-auto">Update Phone Numbers</button>
                </div>
            </form>
        </div>

        <br>
        <hr>
        <br>

        <div class="card p-5">
            <form role="form" action="{{route('contact-details-email-update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email 01</label>
                    <div class="col-sm-10">
                        <input type="email" name="email1" class="form-control" value="{{$contacts->email1}}" placeholder="Enter Email 01">
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email 02</label>
                    <div class="col-sm-10">
                        <input type="email" name="email2" class="form-control" value="{{$contacts->email2}}" placeholder="Enter Email 02">
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email 03</label>
                    <div class="col-sm-10">
                        <input type="email" name="email3" class="form-control" value="{{$contacts->email3}}" placeholder="Enter Email 03">
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary ml-auto">Update Email Address</button>
                </div>
            </form>
        </div>


        <br>
        <hr>
        <br>


        <div class="card p-5 mb-5">
            <form role="form" action="{{route('contact-details-social-update')}}" method="POST" enctype="multipart/form-data">
                @csrf
        <div class="mb-3 row required">
            <label for="staticEmail" class="col-sm-2 col-form-label">Facebook</label>
            <div class="col-sm-10">
                <input type="text" name="facebook" class="form-control" value="{{$contacts->facebook}}" placeholder="Enter Facebook URL">
            </div>
        </div>

        <div class="mb-3 row required">
            <label for="staticEmail" class="col-sm-2 col-form-label">Linkedin</label>
            <div class="col-sm-10">
                <input type="text" name="linkedin" class="form-control" value="{{$contacts->linkedin}}" placeholder="Enter Linkedin URL">
            </div>
        </div>

        <div class="mb-3 row required">
            <label for="staticEmail" class="col-sm-2 col-form-label">Instagram</label>
            <div class="col-sm-10">
                <input type="text" name="instagram" class="form-control" value="{{$contacts->instagram}}" placeholder="Enter Instagram URL">
            </div>
        </div>

        <div class="mb-3 row required">
            <label for="staticEmail" class="col-sm-2 col-form-label">Twitter</label>
            <div class="col-sm-10">
                <input type="text" name="twitter" class="form-control" value="{{$contacts->twitter}}" placeholder="Enter Twitter URL">
            </div>
        </div>

        <div class="mb-3 row required">
            <label for="staticEmail" class="col-sm-2 col-form-label">Youtube</label>
            <div class="col-sm-10">
                <input type="text" name="youtube" class="form-control" value="{{$contacts->youtube}}" placeholder="Enter Youtube URL">
            </div>
        </div>

        <div class="mb-3 row required">
            <label for="staticEmail" class="col-sm-2 col-form-label">Whatsapp</label>
            <div class="col-sm-10">
                <input type="text" name="whatsapp" class="form-control" value="{{$contacts->whatsapp}}" placeholder="Enter Whatsapp Number">
            </div>
        </div>





        <div class="text-right">
            <button type="submit" class="btn btn-dark ml-auto">Update Social Media Links</button>
        </div>



        </form>
        </div>
    </div>



</x-app-layout>