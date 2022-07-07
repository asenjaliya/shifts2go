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

Route::get('/', function () {
    return view('admin.dashboard.index');
});

Route::get('/login', function () {
    return view('admin.auth.login');
});

//Contractor

Route::get('/contractor/index', function () {
    return view('admin.contractor.index');
});
Route::get('/contractor/create', function () {
    return view('admin.contractor.create');
});
Route::get('/contractor/edit', function () {
    return view('admin.contractor.edit');
});
Route::get('/contractor/view', function () {
    return view('admin.contractor.view');
});
