@extends('templates/app')
@section('title', 'Data Drug')
@section('subtitle', 'Add Drug')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<form action="/drug/store" method="post" enctype="multipart/form-data">
		<div class="card-body">
			@csrf
			<input type="file" name="icon" class="d-block mb-3">
			@error('icon') <small class="text-danger"> {{ $message }} </small> @enderror
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Code</label>
					<input type="text" class="form-control" name="code" />
					@error('code') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Supplier ID</label>
					<select class="form-control select2" name="supplier_id">
						<option selected disabled>Choose one</option>
						@foreach($suppliers as $supplier)
						<option value="{{ $supplier->id }}">{{ $supplier->id }} - {{ $supplier->name_supplier }}</option>
						@endforeach
					</select>
					@error('supplier_id') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
			<div class="form-group">
				<label class="form-label">Name Drug</label>
				<input type="text" class="form-control" name="name_drug" />
				@error('name_drug') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="form-group">
				<label class="form-label">Producer</label>
				<input type="text" class="form-control" name="producer" />
				@error('producer') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Stock</label>
					<input type="number" class="form-control" name="stock" />
					@error('stock') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-6">
					<label class="form-label">Price</label>
					<input type="number" class="form-control" name="price" />
					@error('price') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Add</button>
			<a href="/drug" class="btn btn-secondary">Back</a>
		</div>
	</form>
</div>
@stop