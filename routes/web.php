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



Route::get('/layout', function () {
    return view('admin.admin_layout');
})->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get('/exam', function () {
    return view('exams');
})->middleware('auth');

Route::get('/calender', function () {
    return view('calender');
})->middleware('auth');


Route::get('/calender', function () {
    return view('calender');
})->middleware('auth');




/* fixed issue route no longer needed as directed
Route::get('/app', function () {
    return view('layouts.app');
});*/

Route::resource('profile', 'App\Http\Controllers\UserProfilesController');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('Authenticated');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('Authenticated');
