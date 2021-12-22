@extends('layouts.admin.master')

@section('title')User
{{ $title }}
@endsection

@push('css')
@endpush

@section('content')
@component('components.breadcrumb')
@slot('breadcrumb_title')
<h3>Create Program</h3>
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
								<label class="form-label" for="validationCustom01">Street Adress</label>
								<input class="form-control" id="validationCustom01" type="text" name="street_address" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Phone Number</label>
								<input class="form-control" id="validationCustom02" type="text" name="phone_number" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">District</label>
								<input class="form-control" id="validationCustom01" type="text" name="district" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Province</label>
								<input class="form-control" id="validationCustom02" type="text" name="province" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Country</label>
								<input class="form-control" id="validationCustom01" type="text" name="country" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Zip</label>
								<input class="form-control" id="validationCustom02" type="text" name="zip" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Education</label>
								<input class="form-control" id="validationCustom01" type="text" name="education" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Start Year</label>
								<input class="form-control" id="validationCustom02" type="date" name="start_year" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">End year</label>
								<input class="form-control" id="validationCustom01" type="date" name="end_year" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Education Level</label>
								<input class="form-control" id="validationCustom02" type="text" name="education_id" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Job Name</label>
								<input class="form-control" id="validationCustom01" type="text" name="job_name" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Institution</label>
								<input class="form-control" id="validationCustom02" type="text" name="institution" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Start Date</label>
								<input class="form-control" id="validationCustom01" type="date" name="start_date" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">End Date</label>
								<input class="form-control" id="validationCustom02" type="date" name="end_date" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Street Address Job</label>
								<input class="form-control" id="validationCustom01" type="text" name="street_address_job" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">District Job</label>
								<input class="form-control" id="validationCustom02" type="text" name="ditrict_job" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Province Job</label>
								<input class="form-control" id="validationCustom01" type="text" name="province_job" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Country Job</label>
								<input class="form-control" id="validationCustom02" type="text" name="country_job" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Zip Job</label>
								<input class="form-control" id="validationCustom01" type="text" name="zip_job" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Phone Job</label>
								<input class="form-control" id="validationCustom02" type="text" name="phone_job" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
						</div>
						<br>
						<div class="row g-3">
							<div class="col-md-6">
								<label class="form-label" for="validationCustom01">Email Job</label>
								<input class="form-control" id="validationCustom01" type="text" name="email_job" value="" required="" />
								<div class="valid-feedback">Looks good!</div>
							</div>
							<div class="col-md-6">
								<label class="form-label" for="validationCustom02">Photo</label>
								<input class="form-control" id="validationCustom02" type="text" name="img" required="" />
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