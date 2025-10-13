<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
	return view('dashboard');
})->name('index'); 

Route::controller(UserController::class)->group(function() {
	Route::get('register', 'registerIndex')->name('register');
	Route::post('register', 'register')->name('register.submit');

	Route::get('login', 'loginIndex')->name('login'); 
	Route::post('login', 'login')->name('login.submit');
	
	Route::get('logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function() {
	Route::get('admin/dashboard', 'index')->name('admin.dashboard');
	Route::group(['middleware' => 'auth'], function() {
		Route::get('admin/create-account', 'createAccount')->name('admin.createAccount');
		Route::post('admin/create-account', 'createAccountSubmit')->name('admin.createAccount.submit');
	});
});