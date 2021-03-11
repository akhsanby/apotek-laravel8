@extends('templates/app')
@section('title', 'Data Supplier')
@section('subtitle', 'Suppliers List')
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
						<th>Name Supplier</th>
						<th>Address</th>
						<th>City</th>
						<th>Phone</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					@foreach($supplier as $supplier)
					<tr>
						<td>{{ $supplier->name_supplier }}</td>
						<td>{{ $supplier->address }}</td>
						<td>{{ $supplier->city }}</td>
						<td>{{ $supplier->phone }}</td>
						<td>
							<a class="btn btn-info" href="/supplier/show/{{ $supplier->id }}">detail</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@stop