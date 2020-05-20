<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// BACKEND DASHBOARD
Route::get('/dashboard', function () {
    return view('Backend.master');
});

// BACKEND USERS
Route::get('/dashboard/users', function () {
    return view('Backend.users.index');
});


// BACKEND TASKS
Route::get('/dashboard/tasks', function () {
    return view('Backend.tasks.index');
});







// FRONTEND TASKS
Route::get('/tasks', function () {
    return view('Frontend.tasks.index');
});

Route::get('/tasks/create', function () {
    return view('Frontend.tasks.create');
});


// FRONTEND ACCOUNT
Route::get('/account/settings', function () {
	return view('Frontend.account.settings');
});

Route::get('/account/password', function () {
	return view('Frontend.account.password');
});


// FRONTEND HOME
Route::get('/', function () {
    return view('Frontend.home.index');
});

Route::get('/login', function () {
    return view('Frontend.home.login');
});

Route::get('/register', function () {
    return view('Frontend.home.register');
});
