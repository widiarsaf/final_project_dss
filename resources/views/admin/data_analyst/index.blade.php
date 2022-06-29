@extends('layouts.template')

@section('content')
<div class="card">
	<div class="table-responsive text-nowrap">
		<form method="POST" action="{{ route('dataAnalyst_calculation') }}">
			<div style="display: flex;justify-content: center; gap: 40px" class="mt-5">
				<div class="col-md-5">
					@csrf
					<h3>Weight Criteria</h3>
					@foreach ($criteria as $c)
					<div class="mb-2">
						<label for="">{{$c->criteria_name}}</label>
						<br>
						<input type="text" name="weight[{{$c->criteria_name}}]" class="form-control" required>
					</div>
					@endforeach
				</div>
				<div class="col-md-5">
					<h3>Location Choose</h3>
					<div>
						@php $val = 3 @endphp
						@for ($i = 0; $i<5; $i++) <label for="">Option {{$i+1}}</label>
							<select id="defaultSelect" class="form-select form-select mb-3" name="option[{{$i+1}}]" required>
								@foreach($location as $loc)
								<option value="{{$loc->id}}">{{$loc->location_name}}</option>
								@endforeach
							</select>
							@endfor
					</div>
				</div>
			</div>
			<center><button type="submit" class="btn btn-primary btn mt-3 mb-3"
					style="border:none;">Process</button></center>
		</form>
	</div>
</div>
<!--/ Basic Bootstrap Table -->
</div>
@endsection