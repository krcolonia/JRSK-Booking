<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
	public function loginIndex() {
		return view('admin.login'); // TODO -> replace with public login rather than admin
	}

	public function registerIndex() {
		return view('admin.register'); // TODO -> replace with public register rather than admin
	}

    public function register(Request $request) {
		$validator = Validator::make($request->all(), [
			'firstName' => 'required|string|max:255',
			'lastName' => 'required|string|max:255',
			'email' => ['required', 'email', Rule::unique('users', 'email')],
			'password' => 'required|string|min:8',
		]);

		if($validator->fails()) {
			return back()->with(['message' => 'Validation Error.']);
		}

		$user = User::create([
			'firstName' => $request->firstName,
			'lastName' => $request->lastName,
			'email' => $request->email,
			'password' => Hash::make($request->password),
		]);

		return back();
	}
}
