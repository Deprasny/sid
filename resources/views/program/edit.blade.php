@extends('layouts.admin.master')

@section('title')User
{{ $title }}
@endsection

@push('css')
@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Edit Program</h3>
@endslot
<li class="breadcrumb-item">Tables</li>
<li class="breadcrumb-item">Bootstrap Tables</li>
<li class="breadcrumb-item active">Basic Tables</li>
@endcomponent

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form class="needs-validation" novalidate="" method="POST" action="{{route('biodata.store')}}">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom01">Name</label>
                                <input class="form-control" id="validationCustom01" type="text" value="{{$result->name}}" name="name" value="" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom02">Place</label>
                                <input class="form-control" id="validationCustom02" type="text" value="{{$result->place}}" name="place" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom01">End Date</label>
                                <input class="form-control" id="validationCustom01" type="date" value="{{$result->end_date}}" name="end_date" value="" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom02">Start Date</label>
                                <input class="form-control" id="validationCustom02" type="date" value="{{$result->start_date}}" name="start_date" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom01">City</label>
                                <input class="form-control" id="validationCustom01" type="text" name="city" value="{{$result->city}}" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom02">Province</label>
                                <input class="form-control" id="validationCustom02" type="text" value="{{$result->province}}" name="province" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom01">End Recruitment</label>
                                <input class="form-control" id="validationCustom01" type="date" name="end_rec" value="{{$result->end_rec}}" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom02">Start Recruitment</label>
                                <input class="form-control" id="validationCustom02" type="date" value="{{$result->star_rec}}" name="start_rec" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>
                        <br>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom01">Country</label>
                                <input class="form-control" id="validationCustom01" type="text" name="country" value="{{$result->country}}" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label" for="validationCustom02">Description</label>
                                <input class="form-control" id="validationCustom02" type="text" value="{{$result->description}}" name="description" required="" />
                                <div class="valid-feedback">Looks good!</div>
                            </div>
                        </div>

                        <br>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@push('scripts')
<script src="{{asset('assets/js/bootstrap/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap/bootstrap.min.js')}}"></script>
@endpush

@endsection