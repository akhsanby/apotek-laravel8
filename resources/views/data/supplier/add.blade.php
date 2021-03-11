@extends('templates/app')
@section('title', 'Data Supplier')
@section('subtitle', 'Add Supplier')
@section('content')

<div class="card shadow mb-4">
	<form action="/supplier/store" method="post">
		<div class="card-body">
			@csrf
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Name Supplier</label>
					<input type="text" class="form-control" name="name_supplier" />
					@error('name_supplier') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Address</label>
					<input type="text" class="form-control" name="address" />
					@error('address') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">City</label>
					<input type="text" class="form-control" name="city" />
					@error('city') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Phone</label>
					<input type="text" class="form-control" name="phone" />
					@error('phone') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Add</button>
			<a href="/supplier" class="btn btn-secondary">Back</a>
		</div>
	</form>
</div>
@stop