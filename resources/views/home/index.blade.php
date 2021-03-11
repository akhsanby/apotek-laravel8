@extends('templates/app')
@section('title', 'Home')
@section('subtitle', 'Home')
@section('content')
<!-- Content Row -->
<div class="row">
	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-primary shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
						Total Drugs</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $drug }}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-pills fa-2x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-success shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-success text-uppercase mb-1">
						Total Suppliers</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $supplier }}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-truck fa-2x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Earnings (Monthly) Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-info shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-info text-uppercase mb-1">
						Total Transactions</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $transaction }}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-hand-holding-usd fa-fw fa-2x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Pending Requests Card Example -->
	<div class="col-xl-3 col-md-6 mb-4">
		<div class="card border-left-warning shadow h-100 py-2">
			<div class="card-body">
				<div class="row no-gutters align-items-center">
					<div class="col mr-2">
						<div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
						Total Users</div>
						<div class="h5 mb-0 font-weight-bold text-gray-800">{{ $user }}</div>
					</div>
					<div class="col-auto">
						<i class="fas fa-fw fa-users fa-2x"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop