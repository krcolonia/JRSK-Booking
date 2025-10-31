@extends('dashboards.adminDashboard')

@section('dashboardContent')
<table id="adminsTable" class="m-5 rounded-md w-5/6">
	<tr>
		<th colspan="4">Admin Users</th>
	</tr>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>E-mail Address</th>
		<th>Role</th>
	</tr>
	@foreach($admins as $admin)
	<tr>
		<td>{{ $admin->firstName }}</td>
		<td>{{ $admin->lastName }}</td>
		<td>{{ $admin->email }}</td>
		<td class="text-center">{{ $admin->rolename }}</td>
	</tr>
	@endforeach
</table>
<table id="adminsTable" class="m-5 rounded-md w-5/6">
	<tr>
		<th colspan="4">Staff Users</th>
	</tr>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>E-mail Address</th>
		<th>Role</th>
	</tr>
	@foreach($staffs as $staff)
	<tr>
		<td>{{ $staff->firstName }}</td>
		<td>{{ $staff->lastName }}</td>
		<td>{{ $staff->email }}</td>
		<td class="text-center">{{ $staff->rolename }}</td>
	</tr>
	@endforeach
</table>
<table id="adminsTable" class="m-5 rounded-md w-5/6">
	<tr>
		<th colspan="4">Guest Users</th>
	</tr>
	<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>E-mail Address</th>
		<th>Role</th>
	</tr>
	@foreach($users as $user)
	<tr>
		<td>{{ $user->firstName }}</td>
		<td>{{ $user->lastName }}</td>
		<td>{{ $user->email }}</td>
		<td class="text-center">{{ $user->rolename }}</td>
	</tr>
	@endforeach
</table>
@endsection