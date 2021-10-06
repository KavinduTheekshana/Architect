<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
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

        <div class="mb-5">
            <h3>Add New User</h3>
        </div>

            <form role="form" action="{{route('update-user')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="text" name="id" class="form-control" value="{{$user->id}}" readonly>
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="{{$user->name}}" readonly placeholder="Enter Name Here">
                    </div>
                </div>
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" value="{{$user->email}}" readonly placeholder="Enter Email Address Here">
                    </div>
                </div>
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" value="" placeholder="Enter Password Here">
                    </div>
                </div>
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Re Enter Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password_confirmation" class="form-control" value="" placeholder="Re Enter Password Here">
                    </div>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-dark ml-auto">Update User</button>
                </div>
            </form>
        </div>




       




    </div>

    

</x-app-layout>