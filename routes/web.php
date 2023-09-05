<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view ('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\CrudController::class, 'index'])->name('home');

Route::post('/create', [App\Http\Controllers\CrudController::class, 'create'])->name('crud.create');