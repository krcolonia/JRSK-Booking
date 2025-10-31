@extends('layouts.main')

@section('title', 'Admin Dashboard')
@section('meta_description', 'JRSK Admin Dashboard')

@section('content')
<style>
	#defaultSidebar {
		filter: brightness(75%);
	}

	tr, th, td {
		border: 1px solid black;
		padding: 5px;
	}

	th {
		background-color: #54BAB9;
		color: white;
	}

	label {
		user-select: none;
		-moz-user-select: none;
	}
</style>
<div class="flex flex-row h-screen pt-15" style="background-color: #00000066">
	<aside id="default-sidebar" class="left-0 z-35 w-80 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
		<div class="h-full px-3 py-4 overflow-y-auto bg-verdigris">
			<ul class="space-y-2 font-medium">
				<li>
					<a id="dashboard" href="{{ route('admin.dashboard') }}" class="flex items-center p-2 rounded-lg text-white bg-verdigris dash-sidebar-item">
						<i class="fa fa-bar-chart"></i><span class="ms-3">Dashboard</span>
					</a>
					<a id="view-users" href="{{ route('admin.viewUsers') }}" class="flex items-center p-2 rounded-lg text-white bg-verdigris dash-sidebar-item">
						<i class="fa fa-users"></i><span class="ms-3">View User List</span>
					</a>
					<a id="create-account" href="{{ route('admin.createAccount') }}" class="flex items-center p-2 rounded-lg text-white bg-verdigris dash-sidebar-item">
						<i class="fa fa-user-plus"></i><span class="ms-3">Create User Account</span>
					</a>
				</li>
			</ul>
		</div>
	</aside>

	<div class="h-full w-full p-5 shadow-md">
		<div class="flex flex-col h-full w-full items-center bg-white rounded-xl overflow-y-auto">
			<div class="flex justify-center items-center bg-verdigris w-full p-4.5 pb-3.5">
				<h1 class="text-white text-xl font-heavitas" id="header"></h1>
			</div>
			<div class="p-5">
				@yield('dashboardContent')
			</div>		
		</div>
	</div>
	
</div>

<script>
	const current = window.location.href.substring(window.location.href.lastIndexOf('/') + 1)
	
	const currentElement = document.getElementById(current)
	currentElement.style.filter = 'saturate(170%) contrast(110%)'

	const headerElement = document.getElementById('header')
	switch(current) {
		case 'dashboard':
			headerElement.innerHTML = 'Admin Dashboard';
			break;
		case 'view-users':
			headerElement.innerHTML = 'View User List';
			break;
		case 'create-account':
			headerElement.innerHTML = 'Create Account for Users';
			break;
	}
</script>
@endsection