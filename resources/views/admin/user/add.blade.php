@extends('layouts.template')

@section('content')

<div class="col-xxl">
	<div class="card mb-4">
		<div class="card-header d-flex align-items-center justify-content-between">
			<h5 class="mb-0">Add User ocation</h5>
			<small class="text-muted float-end"></small>
		</div>
		<div class="card-body">
			<form method="POST" action="{{ route('user.store') }}">
				@csrf
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Username</label>
					<div class="col-sm-10">
						<input name="username" type="text" class="form-control" placeholder="Enter username" />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Email</label>
					<div class="col-sm-10">
						<input name="email" type="text" class="form-control" placeholder="Enter email" />
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Password</label>
					<div class="col-sm-10">
						<input name="password" type="text" class="form-control" placeholder="Enter password" />
						<div class="form-text">*Enter 12345678 as initial password</div>
					</div>
				</div>
				<div class="row mb-3">
					<label class="col-sm-2 col-form-label">Level / Position</label>
					<div class="col-sm-10">
						<select id="defaultSelect" class="form-select form-select" name="level">
							<option value="1">Admin</option>
						</select>
					</div>
				</div>

				<div class="row justify-content-end">
					<div class="col-sm-10">
						<button type="submit" class="btn btn-primary" style="color: white">Save</button>
						<a type="submit" class="btn btn-outline-primary" style="color: black"
							href={{route('user.index')}}>Back</a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection