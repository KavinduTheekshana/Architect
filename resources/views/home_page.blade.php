<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home Page Update') }}
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
            <img src="app/image/layout.jpg" style="width: 450px;" class="m-auto" alt="">
            <form role="form" action="{{route('asign-gallery')}}" method="POST" class="mt-5" enctype="multipart/form-data">
                @csrf
                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Image Holder</label>
                    <div class="col-sm-10">
                        <select name="holder" class="form-control" id="exampleFormControlSelect1">
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                            <option value="e">E</option>
                            <option value="f">F</option>
                            <option value="g">G</option>
                            <option value="h">H</option>
                            <option value="i">I</option>
                            <option value="j">J</option>
                            <option value="k">K</option>
                            <option value="l">L</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Image Gallery</label>
                    <div class="col-sm-10">
                        <select name="gallery" class="form-control" id="exampleFormControlSelect1">
                            @foreach($projects as $project)
                            <option value="{{$project->slug}}">{{$project->title}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>


                <div class="mb-3 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Cover Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="image" type="file" id="formFileMultiple">
                    </div>
                </div>


                <div class="text-right">
                    <button type="submit" class="btn btn-success ml-auto">Asign Gallery</button>
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
                        <th>Holder</th>
                        <th>Gallery Title</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($home as $single)
                    <tr>
                        <td>{{$single->id}}</td>

                        <td> <img src="{{asset($single->image)}}" class="avatar" alt=""></td>
                        <td class="uppercase">{{$single->holder}}</td>
                        <td>{{$single->title}}</td>




                    </tr>

            
                    @endforeach
                </tbody>
            </table>

        </div>












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