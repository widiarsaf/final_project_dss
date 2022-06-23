@extends('layouts.template')

@section('content')

<div class="col-xxl">
	<div class="card mb-4">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5 class="mb-0">Edit Alternatives</h5>
			<small class="text-muted float-end"></small>
		</div>
		<div class="card-body">
			<form method="post" action="{{ route('alternative.update', $alternative->id) }}">
				@csrf
				@method('PUT')
				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">University</label>
					<div class="col-sm-9">
						<input name="university" type="text" class="form-control" placeholder="Enter criteria name..." value="{{$alternative->university}}" />
					</div>
				</div>
				@foreach ($criteria as $c )
				@if ($c == 'location')
				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">Location</label>
					<div class="col-sm-9">
						<select id="defaultSelect" class="form-select form-select" name="{{$c}}">
							@foreach($location as $loc)
							<option value="{{$loc->id}}" {{$loc->id ===  $alternative->id_location ? 'selected' : ''}}>{{$loc->location_name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				@else
				<div class="row mb-3">
					<label class="col-sm-3 col-form-label">{{$c}}</label>
					<div class="col-sm-9">
						<input name="{{$c}}" type="number" class="form-control" placeholder="Enter value..." value="{{$alternative->$c}}"/>
					</div>
				</div>

				@endif
				@endforeach

			

				<div class="row justify-content-end">
					<div class="col-sm">
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