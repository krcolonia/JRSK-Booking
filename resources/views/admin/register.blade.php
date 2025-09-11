@extends('layouts.main')

@section('title', 'Admin Register')
@section('meta_description', 'JRSK Admin Register')

@section('content')
<div class="flex flex-col justify-center items-center h-screen w-screen">
	@include('layouts.modals')
	<form action="{{ route('register.submit') }}" method="POST">
		@csrf
		<div class="flex flex-col bg-white rounded-lg shadow-md w-120">
			<div class="flex justify-center items-center bg-verdigris rounded-t-lg p-4.5 pb-3.5">
				<h1 class="text-white text-xl font-heavitas">Register</h1>
			</div>
			<div class="flex flex-col p-5">
				<div class="flex flex-row">
					<div class="mr-1">
						<label for="firstName">First Name</label>
						<input
							type="text"
							placeholder="Juan"
							name="firstName"
							class="w-full mb-2 p-2 rounded border-1 border-gray-500"
							required
						>
					</div>
					<div class="ml-1">
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
				<label for="email">E-mail Address</label>
				<input
					type="email"
					placeholder="E-mail Address"
					name="email"
					class="w-full mb-2 p-2 rounded border-1 border-gray-500"
					required
				>
				<div class="flex flex-row w-full justify-between">
					<div class="flex flex-col w-full mr-1">
						<label for="password">Password</label>
						<input
							type="password"
							placeholder="Password"
							name="password"
							class="w-full mb-2 p-2 rounded border-1 border-gray-500"
							minlength="8"
							required
						>
					</div>
					<div class="flex flex-col w-full ml-1">
						<label for="confirm_password">Confirm Password</label>
						<input
							type="password"
							placeholder="Confirm Password"
							name="confirm_password"
							class="w-full mb-2 p-2 rounded border-1 border-gray-500"
							required
						>
					</div>						
				</div>

				<input type="checkbox" class="self-start" name="show_password" id="">

				<button type="submit" class="form-btn active:bg-black p-2 px-5 rounded text-white self-center">Register</button>

				<p class="self-center pt-3">Already have an account? <a href="{{ route('login') }}" class="text-blue-500 underline">Login</a>.</p>
			</div>
		</div>
	</form>
</div>
@endsection