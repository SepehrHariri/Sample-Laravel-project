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
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Route::get('/email/verify', function () {
//    return view('auth.verify-email');
//})->middleware('auth')->name('verification.notice');


Route::get('/secret', function() {
    return 'secret';
})->middleware('auth', 'password.confirm');

Route::get('/', function () {
    alert()->error('Welcome', 'Message!')->persistent('OK');
    return view('welcome');
});

Route::get('/articles/{article}', \App\Http\Livewire\Articles\Index::class);


