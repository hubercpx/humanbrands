<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\HomeController;
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

Route::get('/formulario', 'HomeController@getFormulario')->name('get.formulario');
Route::post('/cliente_create/{action}/{id}', 'HomeController@cliente_create')->name('post.cliente');
Route::get('/cliente_delete/{id}', 'HomeController@cliente_delete')->name('delete.cliente');


Route::post('/controlador/{action}/{id}', 'HomeController@api_create')->name('api.cliente');
