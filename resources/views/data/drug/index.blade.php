@extends('templates/app')
@section('title', 'Data Drug')
@section('subtitle', 'Drugs List')
@section('content')
<!-- DataTales Example -->
<div class="card shadow mb-4">
	<div class="card-body">
		@if (session('created'))
			<div class="alert alert-success">
				{{ session('created') }}
			</div>
		@elseif (session('updated'))
			<div class="alert alert-success">
				{{ session('updated') }}
			</div>
		@elseif (session('deleted'))
			<div class="alert alert-success">
				{{ session('deleted') }}
			</div>
		@endif
		<div class="table-responsive">
			<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
				<thead>
					<tr>
						<th>Icon</th>
						<th>Code</th>
						<th>Supplier ID</th>
						<th>Name Drug</th>
						<th>Producer</th>
						<th>Stock</th>
						<th>Price</th>
						<th>Option</th>
					</tr>
				</thead>
				<tbody>
					@foreach($drugs as $drug)
					<tr>
						<td>
							<img width="60" height="60" src="{{ asset('storage/' . $drug->icon) }}">
						</td>
						<td>{{ $drug->code }}</td>
						<td>{{ $drug->supplier_id }} - {{ $drug->supplier->name_supplier }}</td>
						<td>{{ $drug->name_drug }}</td>
						<td>{{ $drug->producer }}</td>
						<td>{{ $drug->stock }}</td>
						<td>Rp. {{ $drug->price }}</td>
						<td>
							<a href="/drug/show/{{ $drug->id }}" class="btn btn-info">detail</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop