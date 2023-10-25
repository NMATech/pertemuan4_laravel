<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Box;

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
    return view('welcome');
});

Route::get('/kedua', function () {
    return view('kedua');
});

Route::get('/percobaan', [Box::class, 'coba']);
Route::get('/box', [Box::class, 'index']);