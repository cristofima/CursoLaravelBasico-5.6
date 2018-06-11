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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('clientes',function(){
        return view('clientes.index');
    });
    Route::resource('productos','ProductoController');
    Route::get('clientes/create/{numero}/{letra}',function($numero,$letra){
        return view('clientes.create',compact('numero','letra'));
    })->where('numero','[0-9]+');
});
Auth::routes();
Route::get('productos-listar','ProductoController@listJSON')->middleware('BasicAuth');
Route::get('/home', 'HomeController@index')->name('home');
