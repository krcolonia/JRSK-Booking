@extends('layouts.adminstaff')

@section('title', 'Admin Dashboard')
@section('meta_description', 'JRSK Admin Dashboard')

@section('content')
<style>
	#userTable tr, th, td {
		border: 1px solid black;
		padding: 5px;
	}

	#userTable th {
		background-color: #54BAB9;
		color: white;
	}
</style>

<div class="flex flex-row h-screen">
	<aside id="default-sidebar" class="left-0 z-35 w-80 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
		<!-- <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800"> -->
		<div class="h-full px-3 py-4 overflow-y-auto bg-verdigris">
			<ul class="space-y-2 font-medium">
				<li>
					<a href="" class="flex items-center p-2 rounded-lg text-white hover:bg-seaFoamGreen group">
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

	<div class="flex flex-col m-5 p-5 h-screen w-full items-center bg-white rounded-md">
	<h1>Admin Dashboard</h1>
	<table id="userTable" class="m-5 rounded-md">
		<tr>
			<th>ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>E-mail Address</th>
			<th>Role</th>
		</tr>
		@foreach($users as $user)
		<tr>
			<td class="text-center">{{ $user->id }}</td>
			<td>{{ $user->firstName }}</td>
			<td>{{ $user->lastName }}</td>
			<td>{{ $user->email }}</td>
			<td class="text-center">{{ $user->rolename }}</td>
		</tr>
		@endforeach
	</table>
</div>
</div>
@endsection