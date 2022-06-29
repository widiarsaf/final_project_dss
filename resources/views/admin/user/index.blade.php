@extends('layouts.template')

@section('content')
<a type="button" class="btn btn-primary mb-4" href="{{ route('user.create') }}">Add New User</a>
<div class="card">
	<h5 class="card-header">User Table</h5>
	<div class="table-responsive text-nowrap">
		<table class="table">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Email</th>
					<th>Level</th>
					<th>Action</th>

				</tr>
			</thead>
			<tbody class="table-border-bottom-0">
				@php $i = 1 ;@endphp
				@foreach ($user as $u)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$u->username}}</td>
					<td>{{$u->email}}</td>
					@if ($u->level == '1')
					<td>admin</td>
					@else 
					<td>Data Analyst</td>
					@endif
					<td>
						<form action="{{ route('location.destroy',$u->id) }}" method="POST">
							{{-- <a class="btn btn-warning" href=" {{route('location.edit',$loc->id) }}" id="edit{{$loc->id}}"><i
									class="bx bxs-edit"></i>Edit</a> --}}
							@csrf
							@method('DELETE')
							<button type="submit" class="btn btn-danger" id="delete{{$u->id}}"><i
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