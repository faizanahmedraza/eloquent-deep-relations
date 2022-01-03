@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="card my-sm-5">
            <div class="card-header">
                <div class="row">
                    <div class="offset-md-3 col-sm-4 card-title text-end fs-4">Employee Form</div>
                    <div class="offset-md-3 col-sm-2 btn btn-outline-primary align-middle">←Back</div>
                </div>
            </div>
            <div class="card-body">
                <form action="/city/add" method="POST">
                    @csrf
                    <div class="mb-2 row">
                        <label class="col-md-2 form-label">Continent</label>
                        <div class="col-md-10">
                            <select class="form-select" name="continent">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-md-2 form-label">Country</label>
                        <div class="col-md-10">
                            <select class="form-select" name="continent">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-md-2 form-label">Province</label>
                        <div class="col-md-10">
                            <select class="form-select" name="continent">
                                <option value="">Select</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-2 row">
                        <label class="col-md-2 form-label">City</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="city" value="">
                        </div>
                    </div>
                    <div class="mb-2 row">
                       <input type="submit" class="col-md-4 mx-auto btn btn-outline-secondary" value="Save">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection