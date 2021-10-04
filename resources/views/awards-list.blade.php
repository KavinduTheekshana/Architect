@extends('layouts.backend.awards.navigation')

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

        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Image</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Order</th>
                    <th>Functions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($awards as $award)
                <tr>
                    <td>{{$award->id}}</td>
                    <td><img src="{{asset($award->award_images->first()->url)}}" alt="Avatar" class="avatar"></td>
                    <td>{{$award->title}}</td>

                    @if($award->status==1)
                    <td><span class="badge bg-primary">Enable</span></td>
                    @else
                    <td><span class="badge bg-warning">Disabled</span></td>
                    @endif

                    <td>{{$award->order}}</td>
                    <td>
                        @if($award->status==1)
                        <a href="disable/{{$award->id}}" type="button" class="btn btn-warning"><i class="fas fa-lock"></i></a>
                        @else
                        <a href="enable/{{$award->id}}" type="button" class="btn btn-primary"><i class="fas fa-unlock"></i></a>
                        @endif
                        <a href="#" type="button" class="btn btn-dark"><i class="fas fa-eye"></i></a>
                        <a href="delete/{{$award->id}}" type="button" id="btn_delete" class="btn btn-danger"><i class="fas fa-trash"></i></a>
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


<!-- @push('sweet-alert-scripts')
<script>
    $("#btn_delete").click(function() {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });
</script>
@endpush -->

@endsection