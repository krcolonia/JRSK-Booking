@if(Auth::check())
	@if(auth()->user()->userrole_id == 1)
	<div class="flex flex-col fixed top-15 right-5 items-end p-2 z-10">
		<a href="">Profile</a>
		<a href="{{ route('admin.createAccount') }}">Create Account</a>
		<a href="{{ route('logout') }}">Logout</a>
	</div>
	@elseif(auth()->user()->userrole_id == 3)
	<div class="flex flex-col fixed top-15 right-5 items-end p-2 z-10">
		<a href="">Profile</a>
		<a href="{{ route('logout') }}">Logout</a>
	</div>
	@endif
@endif