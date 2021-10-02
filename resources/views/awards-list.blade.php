@extends('layouts.backend.awards.navigation')

@section('content')

<div class="container mt-5 mb-5">
    <div class="card p-5">

        <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Function</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 1 Data 1</td>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
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


@endsection