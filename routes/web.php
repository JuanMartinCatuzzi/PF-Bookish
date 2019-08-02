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
use App\Http\Middleware\CheckAdmin;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/quienes-somos', function (){
  return view('quienes-somos');
});
Route::get('/preguntas',function(){
  return view('preguntas');
});
Route::get('/categorias', 'CategoryController@index');

Route::get('/control-panel', function(){})->middleware('CheckAdmin');  //Revisar
