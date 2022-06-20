@extends('layouts.template')

@section('content')

<p>Edit Alternatives</p>

<div class="card-body">
	<form method="post" action="{{ route('location.update', $location->id) }} id=" myForm">
		@csrf
		@method('PUT')
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">Location Name</label>
			<div class="col-sm-10">
				<input name="location_name" type="text" class="form-control" value="{{ $location->location_name }}" />
			</div>
		</div>

		<div class="row justify-content-end">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" style="color: white">Send</button>
				<a type="submit" class="btn btn-outline-primary" style="color: black" href={{route('location.index')}}>Back</a>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection