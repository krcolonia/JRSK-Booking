@extends('layouts.main')

@section('title', 'Landing Page')
@section('meta_description', 'JRSK Landing Page')

@section('content')
<section id="landing-section" class="flex flex-col justify-center items-center h-screen w-full">
	<div class="bg-verdigris h-60 w-120 rounded-xl flex flex-col items-center justify-center mb-10">
		<img src="{{ asset('images/Banner_v2.png') }}" alt="icon">
		<!-- <p class="fontcolor-pearl">A Hotel Booking System You Can Trust</p> -->
		<p class="fontcolor-pearl">Administration and Staff Management System</p>
	</div>

	@auth
	<button>Book Now!</button>
	@endauth
</section>

<section class="flex flex-col w-full bg-white py-10 p-15">
	<h1 class="text-center text-3xl font-heavitas mt-1 mb-4">About JRSK</h1>
	<p class="text-center text-xl">
	JRSK Booking as an Online Hotel Booking System originally developed as a project during my Sophomore year in IT<br>
	This version of JRSK Booking is developed using the Laravel 12 Framework, Tailwind CSS, Node.JS, and jQuery with AJAX<br>
	This version will also be having a Mobile Version utilizing REST APIs.
	</p>


	<h1 class="text-center text-3xl font-heavitas mt-16 mb-4">Meet the Team</h1>
	<div class="flex flex-row justify-center gap-8 mb-10">
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-50 w-50">
			<p class="text-xl font-heavitas mt-1 -mb-1">Jeremee Cayde</p>
			<p>Mobile App Developer</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-50 w-50">
			<p class="text-xl font-heavitas mt-1 -mb-1">Rotsen David</p>
			<p>Graphics Designer</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-50 w-50">
			<p class="text-xl font-heavitas mt-1 -mb-1">Sean Ysagun</p>
			<p>System Administrator</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-50 w-50">
			<p class="text-xl font-heavitas mt-1 -mb-1">Kurt Colonia</p>
			<p>Web Developer</p>
		</div>
	</div>
	<p class="text-center text-xl">
	JRSK is a collaborative web and mobile development team focused on building efficient, scalable, and<br>
	user-cenric digital soluitions. Combining expertise across front-end, back-end, and DevOps, JRSK delivers<br>
	high-quality software that balances performance with clean design. The team emphasizes modern technologies,<br>
	best practices, and continuous learning to craft reliable and maintainable web systems tailored to client and<br>
	project needs.
	</p>
</section>
@endsection