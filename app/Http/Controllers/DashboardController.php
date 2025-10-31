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
					return redirect()->route('admin.dashboard');
				case 2:
					return redirect()->route('staff.dashboard');
			}
		}
		return view('landing');
		
	}
}
