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

@include('layouts.hamburgerMenu')

<div class="flex flex-col mt-15 w-full items-center">
	<h1 class="mb-10">this is the admin dashboard. may not look like it right now but it will be in due time</h1>
	<table id="userTable">
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
			<td><button>Edit</button></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection