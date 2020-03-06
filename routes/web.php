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

Route::get('/', 'IndexControler@index');
Route::get('/p1', 'IndexControler@p1');
Route::get('article/{id}', 'IndexControler@show')->name('articleShow');
Route::get('page/add', 'IndexControler@add');
Route::post('page/add', 'IndexControler@store')->name('articleStore');
Route::delete('page/delete/{article}', function(\App\Article $article){
    $article->delete();
    return redirect('/');
})->name('articleDelete');
Route::resource('articles', 'ArticleController');
