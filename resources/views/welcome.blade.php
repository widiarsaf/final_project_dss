<form action="">
	<h1>Weight Criteria</h1>
	<div>
		<label for="">Location</label>
		<input type="text">
	</div>
	<div>
		<label for="">National Rank</label>
		<input type="text">
	</div>
	<div>
		<label for="">Quality of Educations</label>
		<input type="text">
	</div>
	<div>
		<label for="">Alumni Employment</label>
		<input type="text">
	</div>
	<div>
		<label for="">Quality Faculty</label>
		<input type="text">
	</div>
	<div>
		<label for="">Reserach Performance</label>
		<input type="text">
	</div>

	<h1>Location Choose</h1>
		<div>
			<label for="">1st Option</label>
			<select id="defaultSelect" class="form-select form-select" name="location">
				@foreach($location as $loc)
				<option value="{{$loc->id}}">{{$loc->location_name}}</option>
				@endforeach
			</select>
		</div>
		<div>
			<label for="">2nd Option</label>
			<select id="defaultSelect" class="form-select form-select" name="location">
				@foreach($location as $loc)
				<option value="{{$loc->id}}">{{$loc->location_name}}</option>
				@endforeach
			</select>
		</div>
		<div>
			<label for="">3rd Option</label>
			<select id="defaultSelect" class="form-select form-select" name="location">
				@foreach($location as $loc)
				<option value="{{$loc->id}}">{{$loc->location_name}}</option>
				@endforeach
			</select>
		</div>
</form>