<?php

use App\Models\Todos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/todos', function () {
    return Todos::all();
});
Route::get('/todos/{id}', function ($id) {
    return Todos::all()->where('id', $id);
});
Route::post('/todos', function ($request) {
    Todos::created($request->all());
    return;
});
Route::delete('/todos/{id}', function ($id) {
    return $id;
});
