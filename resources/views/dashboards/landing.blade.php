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
<section class="flex flex-col h-200 w-full bg-white">
</section>
@endsection