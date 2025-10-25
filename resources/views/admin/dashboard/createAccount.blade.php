@extends('dashboards.adminDashboard')

@section('title', 'Admin Register')
@section('meta_description', 'JRSK Admin Account Creation Page')

@section('dashboardContent')
<div class="flex flex-col justify-center items-center w-full">
	@include('layouts.components.modals')
	<form action="{{ route('admin.createAccount.submit') }}" method="POST"> <!-- TODO: Replace form action -->
		@csrf
		<div class="flex flex-row">
			<div class="grow-1 pr-1">
				<label for="firstName">First Name</label>
				<input
					type="text"
					placeholder="Juan"
					name="firstName"
					class="w-full mb-2 p-2 rounded border-1 border-gray-500"
					required
				>
			</div>
			<div class="grow-1 pl-1">
				<label for="email">Last Name</label>
				<input
					type="text"
					placeholder="Dela Cruz"
					name="lastName"
					class="w-full mb-2 p-2 rounded border-1 border-gray-500"
					required
				>
			</div>
		</div>
		<label for="role">User Role</label>
		<select name="role" class="w-full mb-2 p-2 py-3 rounded border-1 border-gray-500">
			<option value="" selected>Select user's role</option>
			@foreach($roles as $role)
			<option value="{{ $role->id }}">{{ $role->name }}</option>
			@endforeach
		</select>
		<label for="email">E-mail Address</label>
		<input
			type="email"
			placeholder="E-mail Address"
			name="email"
			class="w-full mb-2 p-2 rounded border-1 border-gray-500"
			required
		>
		<label for="password">Password</label>
		<input
			type="password"
			placeholder="Password"
			name="password"
			class="w-full mb-2 p-2 rounded border-1 border-gray-500"
			required
		>
		<label for="c_password">Confirm Password</label>
		<input
			type="password"
			placeholder="Confirm Password"
			name="c_password"
			class="w-full mb-2 p-2 rounded border-1 border-gray-500"
			required
		>
		<div class="flex justify-center m-3">
			<button type="submit" class="form-btn active:bg-black p-2 px-5 rounded text-white self-center">Create Account</button>
		</div>
	</form>
</div>
@endsection