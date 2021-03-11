@extends('templates/app')
@section('title', 'Data Transaction')
@section('subtitle', 'Detail Transaction')
@section('content')

<div class="card shadow mb-4">
	<div class="card-header d-flex">
		<a class="btn btn-secondary" href="/transaction">back</a>
		<form action="/transaction/delete/{{ $transaction->id }}" method="post">
			@method("delete")
			@csrf
			<button type="submit" class="btn btn-danger ml-2" onclick="return confirm('Are you sure?');">delete</button>
		</form>
	</div>
	<div class="card-body">
		<div class="row">
			<ul class="list-group col-md-3 font-weight-bolder">
				<li class="list-group-item">Date Transaction</li>
				<li class="list-group-item">Admin</li>
				<li class="list-group-item">Name Customer</li>
				<li class="list-group-item">Drug Code</li>
				<li class="list-group-item">Qty</li>
				<li class="list-group-item">Total Price</li>
				<li class="list-group-item">Created At</li>
				<li class="list-group-item">Updated At</li>
			</ul>
			<ul class="list-group col-md-5">
				<li class="list-group-item">{{ $transaction->date }}</li>
				<li class="list-group-item">{{ $transaction->user->username }}</li>
				<li class="list-group-item">{{ $transaction->name_customer }}</li>
				<li class="list-group-item">{{ $transaction->drug_code }}</li>
				<li class="list-group-item">{{ $transaction->qty }}</li>
				<li class="list-group-item">Rp. {{ $transaction->total }}</li>
				<li class="list-group-item">{{ $transaction->created_at }}</li>
				<li class="list-group-item">{{ $transaction->updated_at }}</li>
			</ul>
		</div>
	</div>
</div>
@stop