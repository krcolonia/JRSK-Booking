@extends('layouts.admin')

@section('title', 'Admin Dashboard')
@section('meta_description', 'JRSK Admin Dashboard')

@section('content')

<span class="fixed top-15">
	<h1>this is the admin dashboard. may not look like it right now but it will be in due time</h1>
	@foreach($users as $user)
		<p>{{ $user->lastName }}, {{ $user->firstName }}</p>
	@endforeach
</span>
@endsection