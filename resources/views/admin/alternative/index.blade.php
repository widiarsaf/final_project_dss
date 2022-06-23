@extends('layouts.template')

@section('content')
<a type="button" class="btn btn-primary mb-4" href="{{ route('alternative.create') }}">Add New Alternatives</a>
<div class="card">
	<h5 class="card-header">Alternatives Table</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>University Name</th>
					@foreach ($criteria as $c )
					<th>{{$c}}</th>
					@endforeach
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				@foreach ($alternative as $altv)
				<tr>
					<td>{{$altv->university}}</td>
					@foreach ($criteria as $c )
						@if ($c == 'location')
							<th>{{$altv->$c->location_name}}</th>
						@else
							<th>{{$altv->$c}}</th>
						@endif
					@endforeach
					<td>
						<form action="{{ route('alternative.destroy', $altv->id) }}" method="POST">
							<a class="btn btn-warning" href=" {{route('alternative.edit', $altv->id) }}" id="edit{{$altv->id}}"><i
									class="bx bxs-edit"></i>Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger" id="delete{{$altv->id}}"><i
									class="bx bx-trash-alt"></i>Delete</button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<!--/ Basic Bootstrap Table -->
</div>
@endsection