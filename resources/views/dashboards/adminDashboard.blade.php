@extends('layouts.main')

@section('title', 'Admin Dashboard')
@section('meta_description', 'JRSK Admin Dashboard')

@section('content')
<style>
	tr, th, td {
		border: 1px solid black;
		padding: 5px;
	}

	th {
		background-color: #54BAB9;
		color: white;
	}
</style>

<div class="flex flex-row h-screen pt-15" style="background-color: #00000066">
	<aside id="default-sidebar" class="left-0 z-35 w-80 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
		<!-- <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800"> -->
		<div class="h-full px-3 py-4 overflow-y-auto bg-verdigris">
			<ul class="space-y-2 font-medium">
				<li>
					<a href="{{ route('admin.dashboard') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-seaFoamGreen group">
						<span class="ms-3">Dashboard</span>
					</a>
					<a href="" class="flex items-center p-2 rounded-lg text-white hover:bg-seaFoamGreen group">
						<span class="ms-3">View User List</span>
					</a>
					<a href="{{ route('admin.createAccount') }}" class="flex items-center p-2 rounded-lg text-white hover:bg-seaFoamGreen group">
						<span class="ms-3">Create User Account</span>
					</a>
				</li>
			</ul>
		</div>
	</aside>

	<div class="h-full w-full p-5">
		<div class="flex flex-col p-5 h-full w-full items-center bg-white rounded-md overflow-y-auto">
			@yield('dashboardContent')			
		</div>
	</div>
	
</div>
@endsection