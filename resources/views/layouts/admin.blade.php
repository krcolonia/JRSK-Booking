<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="@yield('meta_description', 'Default Description')">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
	<nav id="top-nav-bar" class="fixed top-0 z-40 flex flex-row justify-between h-15 w-full m-0 bg-verdigris">
		<a href="{{ route('index') }}" class="flex"><img src="{{ asset('images/Banner_v2.png') }}" alt="icon"></a>
		<div class="flex flex-row items-center fontcolor-pearl">
			@if(Auth::check())
			<p class="pr-2">logged in as {{ auth()->user()->firstName }}, {{ App\Models\Userrole::select('name')->where('id', auth()->user()->userrole_id)->first()->name }} Role</p>
			@else
			<p class="pr-2">logged out. login <a href="{{ route('login') }}" class="underline text-blue-700">here</a></p>
			@endif
			<button class="h-fulll w-15 m-0 p-0">
				<i class="fa fa-bars text-white"></i>
			</button>
		</div>
	</nav>
	<!-- <aside id="default-sidebar" class="fixed top-15 left-0 z-35 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
		<div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800">
			<ul class="space-y-2 font-medium">
				<li>
					<a href="" class="flex items-center p-2 rounded-lg text-white hover:bg-gray-700 group">
						<span class="ms-3">Dashboard</span>
					</a>
				</li>
			</ul>
		</div>
	</aside> -->
	<section id="main-section">
		@yield('content')
	</section>
</body>
</html>