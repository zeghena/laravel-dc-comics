<?php

use App\Models\Comics;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;
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
  return view('home');
})->name('home');

Route::resource('comics', ComicController::class);
