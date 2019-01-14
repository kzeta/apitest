<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


 
Route::get('articulo', 'ApiController@index');
Route::get('articulo/{articulo}', 'ApiController@mostrar');
Route::post('articulo', 'ApiController@crear');
Route::put('articulo/{articulo}', 'ApiController@actualizar');
Route::delete('articulo/{articulo}', 'ApiController@eliminar');

Route::post('registered', 'Auth\RegisterController@register');