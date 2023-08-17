<?php

use \App\Http\Controllers;
//use App\Http\Controllers\ArticleController;
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

// list all articles
Route::get('/', [ArticleController::class, 'index']);

// new and edit form
Route::get('/new', [ArticleController::class, 'edit']);
Route::get('/edit/{id}', [ArticleController::class, 'edit']);

// save article route
Route::post('/edit', [ArticleController::class, 'save']);
