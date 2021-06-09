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

Route::get('/', [\App\Http\Controllers\Controller::class, "index"]);
Route::get('/getkeyword', [\App\Http\Controllers\Controller::class, "getKeyword"]);
Route::get('/getimage', [\App\Http\Controllers\Controller::class, "getImage"]);
Route::post('/getkeywordsfrombase64', [\App\Http\Controllers\Controller::class, "getKeywordsFromBase64"]);
