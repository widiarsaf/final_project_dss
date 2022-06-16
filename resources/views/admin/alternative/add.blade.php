@extends('layouts.template')

@section('content')

<div class="col-xxl">
	<div class="card mb-4">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5 class="mb-0">Add New Alternatives</h5>
			<small class="text-muted float-end"></small>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('alternative.store') }}">
				@csrf
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">University</label>
					<div class="col-sm-10">
						<input name="university" type="text" class="form-control" placeholder="Enter criteria name..." />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Location</label>
					<div class="col-sm-10">
						<select id="defaultSelect" class="form-select form-select" name="location">
							@foreach($location as $loc)
							<option value="{{$loc->id}}">{{$loc->location_name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">national_rank</label>
					<div class="col-sm-10">
						<input name="national_rank" type="number" class="form-control" placeholder="Enter value..." />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">quality_educations</label>
					<div class="col-sm-10">
						<input name="quality_educations" type="number" class="form-control" placeholder="Enter value..." />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">alumni_employment</label>
					<div class="col-sm-10">
						<input name="alumni_employment" type="number" class="form-control" placeholder="Enter value..." />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">quality_faculty</label>
					<div class="col-sm-10">
						<input name="quality_faculty" type="number" class="form-control" placeholder="Enter value..." />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">research_performance</label>
					<div class="col-sm-10">
						<input name="research_performance" type="number" class="form-control" placeholder="Enter value..." />
					</div>
				</div>

				<div class="row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" style="color: white">Send</button>
						<a type="submit" href="{{route('alternative.index')}}" class="btn btn-outline-primary"
							style="color: black">Back</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection