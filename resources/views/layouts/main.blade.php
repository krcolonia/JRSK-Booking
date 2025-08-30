<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('meta_description', 'Default Description')">
	<link rel="icon" href="{{ asset('/images/logo.png') }}">
	<title>JRSK Booking | @yield('title','Default Title')</title>

	@vite(['resources/css/app.css', 'resources/js/app.js'])

	<style>
	body {
		background-image: url("/images/landing-page-bg.png");
		background-size: cover;
		background-position: center;
		background-repeat: no-repeat;
		background-attachment: fixed;
		
	}
	</style>
</head>
<body class="font-coolvetica m-0 p-0">
	<!--
	// TODO -> header design for currently logged in user is a placeholder. rework UI once base functionalities are working.
	-->
	<nav id="top-nav-bar" class="fixed top-0 z-5 flex flex-row align-center h-15 w-full m-0 bg-verdigris">
		<a href="{{ route('index') }}" class="flex"><img src="{{ asset('images/Banner_v2.png') }}" alt="icon"></a>
		<div class="flex flex-row align-center">
			@if(Auth::check())
			<p>logged in as {{ auth()->user()->firstName }}</p>
			@else
			<p>logged out</p>
			@endif
		</div>
	</nav>
	@yield('content')
</body>
</html>