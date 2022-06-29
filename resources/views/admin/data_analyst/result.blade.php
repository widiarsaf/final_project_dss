@extends('layouts.template')

@section('content')


<div class="card mt-2 mb-2 p-4">
	<h3 class="mt-2 mb-2">Determine Matrix</h3>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>Id</th>
					<th>University</th>
					@foreach ($criteria_name_pluck as $c)
					<th>{{$c}}</th>
					@endforeach
				</tr>
			</thead>
			<tbody>

				@foreach ($determine_matrix_table as $arr)
				<tr>
					@foreach ($arr as $key => $value)
					<td>{{$value}}</td>
					@endforeach
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div class="card mt-2 mb-2 p-4">
	<h3 class="mt-2 mb-2">Normalized Matrix</h3>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>University</th>
					@foreach ($criteria_name_pluck as $c)
					<th>{{$c}}</th>
					@endforeach
				</tr>
			</thead>
			<tbody>

				@foreach ($normalize_matrix_table as $arr)
				<tr>
					@foreach ($arr as $key => $value)
					@if ($key == 'university')
					<td>{{$value}}</td>
					@endif
					@endforeach
					@foreach ($arr as $key => $value)
					@if ($key != 'university')
					<td>{{$value}}</td>
					@endif
					@endforeach
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div class="card mt-2 mb-2 p-4">
	<h3 class="mt-2 mb-2">Weighted Normalized Matrix</h3>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>University</th>
					@foreach ($criteria_name_pluck as $c)
					<th>{{$c}}</th>
					@endforeach
				</tr>
			</thead>
			<tbody>

				@foreach ($weighted_normalized_table as $arr)
				<tr>
					@foreach ($arr as $key => $value)
					@if ($key == 'university')
					<td>{{$value}}</td>
					@endif
					@endforeach
					@foreach ($arr as $key => $value)
					@if ($key != 'university')
					<td>{{$value}}</td>
					@endif
					@endforeach
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

<div class="card mt-2 mb-2 p-4">
	<h3 class="mt-2 mb-2">Min, Max, Yi Matrix</h3>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<td>University</td>
					<td>Max Value</td>
					<td>Min Value</td>
					<td>Yi Value</td>
				</tr>
			</thead>
			<tbody>

				@foreach ($yi_table as $arr)
				<tr>
				@foreach ($arr as $key => $value)
				<td>{{$value}}</td>
				@endforeach
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>


<div class="card mt-2 mb-2 p-4">
	<h3 class="mt-2 mb-2">Ranking</h3>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>Rank</th>
					<th>University Name</th>
				</tr>
			</thead>
			<tbody>
				@php $no = 1; @endphp
				@foreach ($results as $result)
				<tr>
					<td># {{$no++}}</td>
					<td>{{$result->university}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>

@endsection