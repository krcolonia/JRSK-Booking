@extends('layouts.adminstaff')

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

<div class="flex flex-row h-screen pt-15">
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

	<div class="h-full w-full p-5">
		<div class="flex flex-col p-5 h-full w-full items-center bg-white rounded-md overflow-y-auto">
			<h1>Admin Dashboard</h1>
			<table id="adminsTable" class="m-5 rounded-md w-5/6">
				<tr>
					<th colspan="4">Admin Users</th>
				</tr>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-mail Address</th>
					<th>Role</th>
				</tr>
				@foreach($admins as $admin)
				<tr>
					<td>{{ $admin->firstName }}</td>
					<td>{{ $admin->lastName }}</td>
					<td>{{ $admin->email }}</td>
					<td class="text-center">{{ $admin->rolename }}</td>
				</tr>
				@endforeach
			</table>

			<table id="adminsTable" class="m-5 rounded-md w-5/6">
				<tr>
					<th colspan="4">Staff Users</th>
				</tr>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-mail Address</th>
					<th>Role</th>
				</tr>
				@foreach($staffs as $staff)
				<tr>
					<td>{{ $staff->firstName }}</td>
					<td>{{ $staff->lastName }}</td>
					<td>{{ $staff->email }}</td>
					<td class="text-center">{{ $staff->rolename }}</td>
				</tr>
				@endforeach
			</table>

			<table id="adminsTable" class="m-5 rounded-md w-5/6">
				<tr>
					<th colspan="4">Guest Users</th>
				</tr>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>E-mail Address</th>
					<th>Role</th>
				</tr>
				@foreach($users as $user)
				<tr>
					<td>{{ $user->firstName }}</td>
					<td>{{ $user->lastName }}</td>
					<td>{{ $user->email }}</td>
					<td class="text-center">{{ $user->rolename }}</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
	
</div>
@endsection