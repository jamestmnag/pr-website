<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|~
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[PagesController::class, 'index']);
Route::get('/about', [PagesController::class,'about']);
// Route::get('/layouts', [PagesController::class,'layouts']);
Route::get('/crude/update',  [PostsController::class,'post']);
Route::get('/crude/entry',  [PostsController::class,'entry']);
Route::get('/crude/modify',  [PostsController::class,'modify']);


