<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function() {
	return view('index');
})->name('index'); 

Route::controller(UserController::class)->group(function() {
	Route::get('register', 'registerIndex')->name('register');
	Route::post('register', 'register')->name('register.submit');

	Route::get('login', 'loginIndex')->name('login'); 
	Route::post('login', 'login')->name('login.submit');
	
	Route::get('logout', 'logout')->name('logout');
});