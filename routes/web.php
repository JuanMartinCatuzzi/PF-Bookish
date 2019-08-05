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

//Páginas de nosotros
Route::get('/quienes-somos', function (){
  return view('quienes-somos');
});
Route::get('/preguntas',function(){
  return view('preguntas');
});

//Páginas de productos
Route::get('/categorias', 'CategoryController@index');
Route::get('/comprar-regular', 'CategoryController@comprarRegular');
Route::get('/comprar-intensivo', 'CategoryController@comprarIntensivo');
Route::post('/comprar', 'CategoryController@comprar');
Route::post('/compra-realizada', 'CartController@store');


Route::get('/ver-ventas', 'CartController@administrarVentas');
Route::post('marcar-entregado', 'CartController@marcarComoEntregado');

Route::get('/admin-categorias', 'CategoryController@administrarCategorias');
Route::post('/agregar-categoria', 'CategoryController@store');
Route::get('/admin-categoria-{id}', 'CategoryController@show');

Route::get('/eliminar-categoria-{id}', 'CategoryController@destroy');
