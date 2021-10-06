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

            <form role="form" action="{{route('save-user')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="" placeholder="Enter Name Here">
                    </div>
                </div>
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" name="email" class="form-control" value="" placeholder="Enter Email Address Here">
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
                    <button type="submit" class="btn btn-dark ml-auto">Add New User</button>
                </div>
            </form>
        </div>




        <div class="card p-5 mt-5">
            <h4 class="mb-4">Users List</h4>

            <table id="table_id" class="display mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>User Type</th>
                        <th>Function</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>

                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                
                        @if($user->type==1)
                        <td><span class="badge bg-warning">Admin</span></td>
                        @else
                        <td><span class="badge bg-primary">Editor</span></td>
                        @endif

                        <td>
                        @if($user->type==0)
                        <a href="user/view-kpXZbznHlU/{{$user->id}}" type="button" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            <a href="member/delete/{{$user->id}}" type="button" id="btn_delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            @endif
                            @if($user->type==1)
                            <a href="user/profile" type="button" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            <a href="#" type="button" id="btn_delete" class="btn btn-danger disabled"><i class="fas fa-trash"></i></a>
                            @endif
                        </td>




                    </tr>


                    @endforeach
                </tbody>
            </table>

        </div>





    </div>

    @push('data-table-scripts')
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
    @endpush

</x-app-layout>