@extends('layouts.backend.projects.navigation')

@section('content')
    <div class="container mt-5 mb-5">

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
            <div class="row mb-4">
                <div class="d-flex">
                    <h3 class="">{{ $project->title }}</h3>

                </div>
            </div>





            <table id="table_id" class="display">
                <thead>
                    <tr>

                        <th>Image</th>
                        <th>Functions</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($project->project_images as $project_image)
                        <tr>

                            <td><img width="150px" src="{{ asset($project_image->url) }}" alt="Avatar"></td>
                            <td>
                                <a href="{{ route('delete-project-image', ['id' => $project_image->id]) }}" type="button"
                                    id="btn_delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>


        <div class="card p-5  mt-5">

            <h3 class="">Upload Project Image</h3>

            <form role="form" action="{{route('update-project-image')}}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3 row required">

                    <div class="col-sm-10">
                        <input type="text" name="id" class="form-control" value="{{$project->id}}" readonly hidden>
                        <input type="text" name="slug" class="form-control" value="{{$project->slug}}" placeholder="Slug" hidden>
                    </div>
                </div>




                <div class="mb-3 mt-4 row required">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Image</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="cover" type="file" id="formFileMultiple">
                    </div>
                </div>


                <div class="text-right">


                    <button type="submit" class="btn btn-warning ml-auto">Upload Product Image</button>

                </div>


            </form>





        </div>
    </div>


    @push('data-table-scripts')
        <script>
            $(document).ready(function() {
                $('#table_id').DataTable();
            });
        </script>
    @endpush


    @push('sweet-alert-scripts')
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
    @endpush
@endsection
