@extends('layouts.main')

@section('title', 'Landing Page')
@section('meta_description', 'JRSK Landing Page')

@section('content')
<section id="landing-section" class="flex flex-col justify-center items-center h-screen w-full">
	<div class="bg-verdigris h-45 w-85 rounded-xl flex flex-col items-center justify-center mb-10">
		<img src="{{ asset('images/Banner_v2.png') }}" alt="icon">
		<!-- <p class="fontcolor-pearl">A Hotel Booking System You Can Trust</p> -->
		<p class="fontcolor-pearl">Administration and Staff Management System</p>
	</div>

	@auth
	<button>Book Now!</button>
	@endauth
</section>
<!-- <section class="flex flex-col w-full bg-white py-10 p-15">  
	<div class="flex flex-row justify-center gap-8 mb-10">
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p class="text-2xl">Kurt Colonia</p>
			<p>Laravel Developer</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p class="text-2xl">Jeremee Cayde</p>
			<p>Mobile App Developer</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p class="text-2xl">Rotsen David</p>
			<p>Original UI/UX Design</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p class="text-2xl">Sean Ysagun</p>
			<p>ER and Flow Diagrams</p>
		</div>
	</div>

	<h1 class="text-center">
	JRSK Booking as an Online Hotel Booking System originally developed as a project during my Sophomore year in IT<br>
	This version of JRSK Booking is developed using the Laravel 12 Framework, Tailwind CSS, Node.JS, and jQuery with AJAX<br>
	This version will also be having a Mobile Version utilizing REST APIs.
	</h1>
</section> -->
@endsection