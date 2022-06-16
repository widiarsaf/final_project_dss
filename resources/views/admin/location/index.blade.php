@extends('layouts.template')

@section('content')
<a type="button" class="btn btn-primary mb-4" href="{{ route('location.create') }}">Add New Locations</a>
	<div class="card">
		<h5 class="card-header">Location Table</h5>
		<div class="table-responsive text-nowrap">
			<table class="table">
				<thead>
					<tr>
						<th>ID</th>
						<th>Location Name</th>
						<th>Value</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody class="table-border-bottom-0">
					@foreach ($location as $loc)
					<tr>
						<td>{{$loc->id}}</td>
						<td>{{$loc->location_name}}</td>
						<td>{{$loc->value}}</td>
						<td>
							<form action="{{ route('location.destroy',['location'=>$loc->id]) }}" method="POST">
								<a class="btn btn-warning" href=" {{route('location.edit',$loc->id) }}" id = "edit{{$loc->id}}"><i class="bx bxs-edit"></i>Edit</a>
								@csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger" id = "delete{{$loc->id}}"><i class="bx bx-trash-alt"></i>Delete</button>
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