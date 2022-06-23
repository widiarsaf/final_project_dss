<form method="POST" action="{{ route('process') }}">
	@csrf
	<h1>Weight Criteria</h1>
	@foreach ($criteria as $c)
		<div>
			<label for="">{{$c->criteria_name}}</label>
			<input type="text" name="weight[{{$c->criteria_name}}]" >
		</div>
	@endforeach
	<h1>Location Choose</h1>
		<div>
			@php $val = 3 @endphp
			@for ($i = 0; $i<5; $i++)
			<label for="">Option {{$i+1}}</label>
			<select id="defaultSelect" class="form-select form-select" name="option[{{$i+1}}]">
				@foreach($location as $loc)
				<option value="{{$loc->id}}">{{$loc->location_name}}</option>
				@endforeach
			</select>
			@endfor
		</div>
		
		<button type="submit">Process</button>
	
</form>
<a href="{{route('reset')}}"><button>reset</button></a>