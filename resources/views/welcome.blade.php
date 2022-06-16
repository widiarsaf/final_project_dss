<form method="POST" action="{{ route('process') }}">
	@csrf
	<h1>Weight Criteria</h1>
	<div>
		<label for="">Location</label>
		<input type="text" name = "location">
	</div>
	<div>
		<label for="">National Rank</label>
		<input type="text" name ="national_rank">
	</div>
	<div>
		<label for="">Quality of Educations</label>
		<input type="text" name = "quality_educations">
	</div>
	<div>
		<label for="">Alumni Employment</label>
		<input type="text" name = "alumni_employment">
	</div>
	<div>
		<label for="">Quality Faculty</label>
		<input type="text" name = "quality_faculty">
	</div>
	<div>
		<label for="">Reserach Performance</label>
		<input type="text" name = "research_performance">
	</div>

	<h1>Location Choose</h1>
		<div>
			<label for="">1st Option</label>
			<select id="defaultSelect" class="form-select form-select" name="first_option">
				@foreach($location as $loc)
				<option value="{{$loc->id}}">{{$loc->location_name}}</option>
				@endforeach
			</select>
		</div>
		<div>
			<label for="">2nd Option</label>
			<select id="defaultSelect" class="form-select form-select" name="second_option">
				@foreach($location as $loc)
				<option value="{{$loc->id}}">{{$loc->location_name}}</option>
				@endforeach
			</select>
		</div>
		<div>
			<label for="">3rd Option</label>
			<select id="defaultSelect" class="form-select form-select" name="third_option">
				@foreach($location as $loc)
				<option value="{{$loc->id}}">{{$loc->location_name}}</option>
				@endforeach
			</select>
		</div>
		<button type="submit">Process</button>
	
</form>
<a href="{{route('reset')}}"><button>reset</button></a>