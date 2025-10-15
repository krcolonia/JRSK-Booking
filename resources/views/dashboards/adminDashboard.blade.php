@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('meta_description', 'JRSK Admin Dashboard')

@section('content')
<style>
	#userTable tr, th, td {
		border: 1px solid black;
		padding: 5px;
	}
</style>

<div class="flex flex-col p-5 h-80 w-full items-center bg-white rounded-md">
	<h1>Admin Dashboard</h1>
	<table id="userTable" class="m-5">
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
@endsection