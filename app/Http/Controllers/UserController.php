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

class UserController extends Controller
{
	public function loginIndex() {
		return view('login'); // TODO -> replace with public login rather than admin
	}

	public function registerIndex() {
		return view('register'); // TODO -> replace with public register rather than admin
	}

    public function register(Request $request) {
		$validator = Validator::make($request->all(), [
			'firstName' => 'required|string|max:255',
			'lastName' => 'required|string|max:255',
			'email' => ['required', 'email', Rule::unique('users', 'email')],
			'password' => 'required|string|min:8',
			'confirm_password' => 'required|same:password'
		]);

		if($validator->fails()) {
			return back()->withErrors(['msg' => 'Validation Error: '. $validator->errors()->first()]);
		}

		User::create([
			'firstName' => $request->firstName,
			'lastName' => $request->lastName,
			'userrole_id' => 3, // ? registered users are Guests by default
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		return redirect()->route('login')->with(['message' => 'User Registered Successfully']);
	}

	public function login(Request $request) {
		$request->validate([
			'email' => 'required',
			'password' => 'required',
		]);

		$credentials = $request->only('email', 'password');

		if(Auth::attempt($credentials)) {
			// return view('index');
			return redirect()->route('index');
		}

		return back()->withErrors('Credentials Invalid!');
	}

	public function logout() {
		Session::flush();
		Auth::logout();

		// return view('index');
		return redirect()->route('index');
	}
}
