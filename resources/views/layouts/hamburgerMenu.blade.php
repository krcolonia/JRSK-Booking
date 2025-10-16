<div id="hamburgerMenu" class="flex flex-col fixed -top-15 right-0 items-end p-1 pb-3 px-5 z-10 bg-verdigris text-white rounded-bl-xl transition-all ease-in-out delay-25 drop-shadow-md">
	@if(Auth::check())
		<a href="">Profile</a>
		@if(auth()->user()->userrole_id == 1)
			<a href="{{ route('admin.createAccount') }}">Create an Account</a>
		@elseif(auth()->user()->userrole_id == 2)
			<!-- staff options here -->
		@elseif(auth()->user()->userrole_id == 3)
			<!-- guest options here -->
		@endif
		<a href="{{ route('logout') }}">Logout</a>
	@else
		<a href="{{ route('login') }}">Login</a>
	@endif
</div>

<script>
	let hamburgerBtn = document.getElementById('hamburgerBtn')
	let hamburgerMenu = document.getElementById('hamburgerMenu')

	hamburgerBtn.addEventListener('click', function() {
		if(hamburgerMenu.classList.contains('top-15')) {
			hamburgerMenu.classList.remove('top-15');
			hamburgerMenu.classList.add('-top-15')
		}
		else {
			hamburgerMenu.classList.add('top-15');
			hamburgerMenu.classList.remove('-top-15')
		}
	});
</script>