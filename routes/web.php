<?php

use App\Http\Controllers\ArticleController;
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
    return view('welcome');
});

Route::get('/artikel', [ArticleController::class, 'index']);
Route::get('/artikel/create', [ArticleController::class, 'create']);
Route::get('/artikel/{slug}', [ArticleController::class, 'show']);
Route::post('/artikel', [ArticleController::class, 'store']);
Route::get('/artikel/{id}/edit', [ArticleController::class, 'edit']);
Route::put('/artikel/{id}', [ArticleController::class, 'update']);

