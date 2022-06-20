@extends('layouts.template')

@section('content')

<div class="col-xxl">
	<div class="card mb-4">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5 class="mb-0">Add New Criteria</h5>
			<small class="text-muted float-end"></small>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('criteria.store') }}">
				@csrf
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Criteria Name</label>
					<div class="col-sm-10">
						<input name="criteria_name" type="text" class="form-control" placeholder="Enter criteria name..." />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Attribute</label>
					<div class="col-sm-10">
						<select id="defaultSelect" class="form-select form-select" name="attribute">
							<option value=1>Cost</option>
							<option value=2>Benefit</option>
						</select>
					</div>
				</div>
				<div class="row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" style="color: white">Send</button>
						<a type="submit" href="{{route('criteria.index')}}"class="btn btn-outline-primary" style="color: black">Back</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection