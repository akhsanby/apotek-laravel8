@extends('templates/app')
@section('title', 'Data Transaction')
@section('subtitle', 'Add Transaction')
@section('content')

<div class="card shadow mb-4">
	<div class="card-body">
		<p><strong>Date Transaction</strong> {{ date('Y-m-d H:m:s') }} </p> 
		<p><strong>Admin</strong> {{ session('username') }} </p>
	</div>
</div>

<div class="card shadow mb-4">
	<form action="/transaction/store" method="post">
		<div class="card-body">
			@csrf
			<input type="hidden" name="date" value="{{ date('Y-m-d H:m:s') }}" />
			<input type="hidden" name="user_id" value="{{ session('id') }}" />
			<div class="form-group">
				<label class="form-label">Name Customer</label>
				<input type="text" class="form-control" name="name_customer" />
				@error('name_customer') <small class="text-danger"> {{ $message }} </small> @enderror
			</div>
			<div class="row">
				<div class="form-group col-md-6">
					<label class="form-label">Choose Drug</label>
					<select class="choose-drug form-control select2" name="drug_code">
						<option selected disabled>Choose one</option>
						@foreach($drugs as $drug)
						<option value="{{ $drug->code }}" data-price="{{ $drug->price }}">{{ $drug->name_drug }}</option>
						@endforeach
					</select>
					@error('drug_code') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">Qty</label>
					<input type="number" class="form-control qty" name="qty">
					@error('qty') <small class="text-danger"> {{ $message }} </small> @enderror
				</div>
				<div class="form-group col-md-3">
					<label class="form-label">Total</label>
					<input type="text" name="total" class="total form-control" readonly>
				</div>
			</div>
		</div>
		<div class="card-footer">
			<button type="submit" class="btn btn-primary">Add</button>
			<a href="/transaction" class="btn btn-secondary">Back</a>
		</div>
	</form>
</div>
@stop