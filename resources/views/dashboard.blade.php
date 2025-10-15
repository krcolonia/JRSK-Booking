@auth
	@if(auth()->user()->userrole_id == 1)
		<!-- if admin user --> 
		@include('dashboards.adminDashboard')
	@elseif(auth()->user()->userrole_id == 2)
		<!-- if staff user -->
		@include('dashboards.staffDashboard')
	@elseif(auth()->user()->userrole_id == 3)
		<!-- if guest user -->
		@include('dashboards.guestDashboard')
	@endif
@else
	<!-- If no user is logged in -->
	@include('dashboards.landing')
@endauth
