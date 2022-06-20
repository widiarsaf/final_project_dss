@extends('layouts.template')

@section('content')

<p>Edit Alternatives</p>

<div class="card-body">
	<form method="post" action="{{ route('criteria.update', $criteria->id) }} id=" myForm">
		@csrf
		@method('PUT')
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">Criteria Name</label>
			<div class="col-sm-10">
				<input name="criteria_name" type="text" class="form-control" value="{{ $criteria->criteria_name }}" />
			</div>
		</div>
		<div class="row mb-3">
			<label class="col-sm-2 col-form-label">Attribute</label>
			<div class="col-sm-10">
				<select id="defaultSelect" class="form-select form-select" name="attribute">
					<option value=1  {{$criteria->attribute === '1' ? '2' : ''}}>Cost</option>
					<option value=2  {{$criteria->attribute === '2' ? '1' : ''}}>Benefit</option>
				</select>
			</div>
		</div>

		<div class="row justify-content-end">
			<div class="col-sm-10">
				<button type="submit" class="btn btn-primary" style="color: white">Save</button>
				<a type="submit" class="btn btn-outline-primary" style="color: black" href={{route('criteria.index')}}>Back</a>
			</div>
		</div>
	</form>
</div>
@endsection