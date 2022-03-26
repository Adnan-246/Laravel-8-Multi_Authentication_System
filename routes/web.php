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
    return view('welcome');
});

// Backend route
Route::get('login/admin', 'App\Http\Controllers\Backend\AdminController@adminLoginForm');
Route::post('admin-login', 'App\Http\Controllers\Backend\AdminController@adminLogin');

Route::group(['middleware'=>'admin'],function(){
    Route::get('admin/dashboard', 'App\Http\Controllers\Backend\DashboardController@adminDashboard');
    Route::get('admin/logout', 'App\Http\Controllers\Backend\AdminController@adminLogout');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
