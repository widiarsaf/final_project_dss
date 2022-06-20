@extends('layouts.template')

@section('content')
<a type="button" class="btn btn-primary mb-4" href="{{ route('criteria.create') }}">Add New Criteria</a>
<div class="card">
	<h5 class="card-header">Criteria Table</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>Criteria Name</th>
					<th>Attribute</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				@foreach ($criteria as $cr)
				<tr>
					<td>{{$cr->criteria_name}}</td>
					@if($cr->attribute ==1)
					<td>Cost</td>
					@elseif(($cr->attribute ==2))
					<td>Benefits</td>
					@endif
					<td>
						<form action="{{ route('criteria.destroy',$cr->id) }}" method="POST">
							<a class="btn btn-warning" href=" {{route('criteria.edit',$cr->id) }}" id="edit{{$cr->id}}"><i
									class="bx bxs-edit"></i>Edit</a>
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger" id="delete{{$cr->id}}"><i
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