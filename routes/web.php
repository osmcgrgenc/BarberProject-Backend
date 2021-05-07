<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\TodosController;
use App\Http\Controllers\WordListController;
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
    return view('pages.home');
});
Route::get('/heroku', function () {
    return view('welcome');
});
Route::resource('todos', TodosController::class);
Route::resource('districts', DistrictController::class);
Route::resource('words', WordListController::class);
