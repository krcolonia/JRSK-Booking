@extends('layouts.main')

@section('title', 'Landing Page')
@section('meta_description', 'JRSK Landing Page')

@section('content')
<section id="landing-section" class="flex flex-col justify-center items-center h-screen w-full">
	<div class="bg-verdigris h-45 w-85 rounded-xl flex flex-col items-center justify-center">
		<img src="{{ asset('images/Banner_v2.png') }}" alt="icon">
		<p class="fontcolor-pearl">A Hotel Booking System You Can Trust</p>
	</div>
</section>
<section class="flex flex-col w-full bg-white py-10">
	<div class="flex flex-row justify-center gap-5 mb-5">
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p>Kurt Robin Colonia</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p>Jeremee Cayde</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p>Rotsen David</p>
		</div>
		<div class="flex flex-col items-center">
			<img src="{{ asset("/images/Placeholder_Person.jpg") }}" alt="" class="rounded-full h-35">
			<p>Sean Denmar Ysagun</p>
		</div>
	</div>

	<h1 class="text-center">
	We're a group of IT Professionals, dedicated to developing the best online web services.<br>
	JRSK Booking is our take on an Online Hotel Booking Service, and it is our mission to make sure<br>
	that you get a smooth, seamless experience with JRSK Booking.
	</h1>
</section>
@endsection