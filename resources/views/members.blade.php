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
            <form role="form" action="{{route('save-member')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" value="" placeholder="Enter Name Here">
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Job Title</label>
                    <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" value="" placeholder="Enter Job Title Here">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Order</label>
                    <div class="col-sm-10">
                        <input type="number" name="order" class="form-control" placeholder="Enter Order Number">
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="image" type="file" id="formFileMultiple">
                    </div>
                </div>


                <div class="text-right">
                    <button type="submit" class="btn btn-success ml-auto">Add User</button>
                </div>
            </form>
        </div>




        <div class="card p-5 mt-5">
            <h4 class="mb-4">Asigned Projects</h4>

            <table id="table_id" class="display mt-5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Title</th>
                        <th>Order</th>
                        <th>Ststus</th>
                        <th>Function</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($members as $member)
                    <tr>
                        <td>{{$member->id}}</td>

                        <td> <img src="{{asset($member->image)}}" class="avatar" alt=""></td>
                        <td class="uppercase">{{$member->name}}</td>
                        <td>{{$member->title}}</td>
                        <td>{{$member->order}}</td>
                        @if($member->status==1)
                        <td><span class="badge bg-primary">Enable</span></td>
                        @else
                        <td><span class="badge bg-warning">Disabled</span></td>
                        @endif

                        <td>
                            @if($member->status==1)
                            <a href="member/disable/{{$member->id}}" type="button" class="btn btn-warning"><i class="fas fa-lock"></i></a>
                            @else
                            <a href="member/enable/{{$member->id}}" type="button" class="btn btn-primary"><i class="fas fa-unlock"></i></a>
                            @endif
                            <a href="member/view-member/{{$member->id}}" type="button" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                            <a href="member/delete/{{$member->id}}" type="button" id="btn_delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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