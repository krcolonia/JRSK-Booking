@extends('layouts.main')
@section('title', 'Staff Dashboard')
@section('meta_description', 'JRSK Staff Dashboard')

@section('content')
<div class="flex flex-row h-screen pt-15" style="background-color: #00000066">
	<aside id="default-sidebar" class="left-0 z-35 w-80 transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
		<!-- <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-800"> -->
		<div class="h-full px-3 py-4 overflow-y-auto bg-verdigris">
			<ul class="space-y-2 font-medium">
				<li>
					<a href="" class="flex items-center p-2 rounded-lg text-white hover:bg-seaFoamGreen group">
						<span class="ms-3">Dashboard</span>
					</a>
					<a href="" class="flex items-center p-2 rounded-lg text-white hover:bg-seaFoamGreen group">
						<span class="ms-3">View Active Bookings</span>
					</a>
					<a href="" class="flex items-center p-2 rounded-lg text-white hover:bg-seaFoamGreen group">
						<span class="ms-3">Edit Available Rooms</span>
					</a>
				</li>
			</ul>
		</div>
	</aside>

	<div class="h-full w-full p-5">		
		<div class="flex flex-col p-5 h-full w-full items-center bg-white rounded-md overflow-y-auto">
			<h1>Staff Dashboard</h1>
		</div>
	</div>
</div>
@endsection