<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use App\Http\Controllers\TodoController;
use App\Http\Controllers\ArticleController;

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

Route::controller(TodoController::class)->prefix('tudu')->name('tudu.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::post('', 'store');
    Route::get('/{id}', 'show');
    Route::put('/{id}', 'update');
    Route::delete('/{id}', 'destroy');
});

Route::controller(ArticleController::class)->prefix('articles')->name('articles.')->group(function () {
    Route::get('', 'index')->name('index');
    Route::get('/create', 'create')->name('create');
    Route::post('', 'store')->name('store');
    Route::get('/{id}', 'show')->name('show');
    Route::put('/{id}', 'update')->name('update');
    Route::delete('/{id}', 'destroy')->name('destroy');
});