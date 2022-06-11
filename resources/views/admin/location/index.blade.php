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
					<tr>
						<td>1101</td>
						<td>Albert Cook</td>
						<td>0.0</td>
						<td>
							<div class="dropdown">
								<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
									<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>1101</td>
						<td>Albert Cook</td>
						<td>0.0</td>
						<td>
							<div class="dropdown">
								<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
									<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>
					<tr>
						<td>1101</td>
						<td>Albert Cook</td>
						<td>0.0</td>
						<td>
							<div class="dropdown">
								<button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
									<i class="bx bx-dots-vertical-rounded"></i>
								</button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
									<a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
								</div>
							</div>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
	<!--/ Basic Bootstrap Table -->
</div>
@endsection