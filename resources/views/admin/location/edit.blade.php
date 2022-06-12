@extends('layouts.template')

@section('content')

<p>Edit Alternatives</p>

<div class="card-body">
			<form method="POST" action="{{ route('location.update', $location->id) }}">
			@csrf
            @method('PUT')
			<div class="row mb-3">
					<label class="col-sm-2 col-form-label" >ID</label>
					<div class="col-sm-10">
						<input name="location_id" type="text" class="form-control"  value="{{ $location->id }}"/>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" >Location Name</label>
					<div class="col-sm-10">
						<input name="location_name" type="text" class="form-control"  value="{{ $location->location_name }}" />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label" >Value</label>
					<div class="col-sm-10">
						<input name="location_value" type="text" class="form-control"  value="{{ $location->value }}" />
					</div>
				</div>
				
				<div class="row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" style="color: white">Send</button>
						<!-- <a type="submit" class="btn btn-outline-primary" style="color: black">Back</a> -->
					</div>
				</div>
			</form>
		</div>

@endsection