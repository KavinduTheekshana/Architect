<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Members') }}
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


        @if (session('delete'))
    <div class="alert alert-danger" role="alert">
        {{ session('delete') }}
    </div>
    @endif




        <div class="card p-5">
            <form role="form" action="{{route('update-member')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{$member->name}}" placeholder="Enter Name Here">
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Job Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="{{$member->title}}" placeholder="Enter Job Title Here">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                        <input type="number" name="order" value="{{$member->order}}" class="form-control" placeholder="Enter Order Number">
                    </div>
                </div>
                
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Image</label> 
                    <div class="col-sm-10">
                        <input class="form-control" name="image" type="file" id="formFileMultiple">
                    </div>
                </div>

                <div class="mb-3">
                <img src="{{asset($member->image)}}" style="width: 150px; height: 150px; object-fit: cover;" alt="">
                </div>


                <div class="text-right">
                    <a href="{{ url('members/delete',[$member->id]) }}" type="button" class="btn btn-danger ml-auto">Delete</a>

                <button type="submit" class="btn btn-warning ml-auto">Update Member Details</button>
                </div>
            </form>
        </div>






    </div>


 

</x-app-layout>