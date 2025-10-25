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

class AdminController extends Controller
{
    public function createAccount() {
		$roles = DB::table('userRoles')->get();
		return view('admin.dashboard.createAccount', [
			'roles' => $roles
		]);
	}

	public function createAccountSubmit(Request $request) {
		$validator = Validator::make($request->all(), [
			'firstName' => 'required|string|max:255',
			'lastName' => 'required|string|max:255',
			'role' => 'required|integer',
			'email' => ['required', 'email', Rule::unique('users', 'email')],
			'password' => 'required|string|min:8',
			'c_password' => 'required|string|same:password',
		]);

		if($validator->fails()) {
			return back()->withErrors(['msg' => 'Validation Error: '.$validator->errors()->first()]);
		}

		User::create([
			'firstName' => $request->firstName,
			'lastName' => $request->lastName,
			'userrole_id' => $request->role,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		return back()->with('message', 'User created successfully');
	}
}
