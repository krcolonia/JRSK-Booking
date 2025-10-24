<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class DashboardController extends Controller
{
    public function index() {

		// ? Check if user is currently logged in
		if(auth()->check()) {
			switch(auth()->user()->userrole_id) {
				case 1:
					$admins = DB::table('users')
						->leftJoin('userRoles', 'userRoles.id', '=', 'users.userrole_id')
						->where('users.userrole_id', 1)
						->select('users.*', 'userRoles.name as rolename')
						->get();

					$staffs = DB::table('users')
						->leftJoin('userRoles', 'userRoles.id', '=', 'users.userrole_id')
						->where('users.userrole_id', 2)
						->select('users.*', 'userRoles.name as rolename')
						->get();

					$users = DB::table('users')
						->leftJoin('userRoles', 'userRoles.id', '=', 'users.userrole_id')
						->where('users.userrole_id', 3)
						->select('users.*', 'userRoles.name as rolename')
						->get();

					return redirect()->route('admin.dashboard', [
						'admins' => $admins,
						'staffs' => $staffs,
						'users' => $users
					]);
				case 2:
					return redirect()->route('staff.dashboard');
			}
		}
		return view('dashboards.landing');
		
	}
}
