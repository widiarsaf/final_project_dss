@extends('layouts.template')

@section('content')

<div class="col-xxl">
	<div class="card mb-4">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5 class="mb-0">Add New Location</h5>
			<small class="text-muted float-end"></small>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('location.store') }}">
			@csrf	
			<div class="row mb-3">
					<label class="col-sm-2 col-form-label" >ID</label>
					<div class="col-sm-10">
						<input name="location_id" type="text" class="form-control"  placeholder="01"/>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" >Location Name</label>
					<div class="col-sm-10">
						<input name="location_name" type="text" class="form-control"  placeholder="Ex. USA, UK, TURKEY.." />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" >Value</label>
					<div class="col-sm-10">
						<input name="location_value" type="text" class="form-control"  placeholder="0.0" />
					</div>
				</div>
				
				<div class="row justify-content-end">
					<div class="col-sm-10">
<<<<<<< HEAD
						<a href=""><button type="submit" class="btn btn-primary">Send</button></a>
						<a href=""><button type="submit" class="btn btn-outline-primary">Back</button></a>
=======
						<button type="submit" class="btn btn-primary" style="color: white">Send</button>
						<!-- <a type="submit" class="btn btn-outline-primary" style="color: black">Back</a> -->
>>>>>>> 05840ef893504fbd360d059e39b6a2b15dd0a0e9
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection