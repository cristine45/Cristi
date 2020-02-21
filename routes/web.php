<?php

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

use App\Http\Controllers\IndexControler;

Route::get('/', 'IndexControler@index' );
Route::get('/p1', 'IndexControler@p1' );
Route::get('article/{id}', 'IndexControler@show') ->name('articleShow');

?>