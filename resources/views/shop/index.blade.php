@extends('layouts.master')

@push('styles')
    <link rel="stylesheet" type="text/css" href="/assets/css/dataTables.min.css">
@endpush

@section('content')
    <div class="container">
        <div class="card my-sm-5">
            <div class="card-header">
                <div class="row">
                    <div class="offset-md-3 col-sm-4 card-title text-end fs-4">SHOPS</div>
                    <div class="offset-md-3 col-sm-2 btn btn-outline-primary align-middle">←Back</div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type="text/javascript" src="/assets/js/dataTables.min.js"></script>
    <script>
        $(function () {
           $(".table").DataTable();
        });
    </script>
@endpush