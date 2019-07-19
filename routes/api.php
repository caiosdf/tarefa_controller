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

route::get('mostraAluno/{id}','AulaController@showAluno');
route::get('listaAluno','AulaController@listAluno');
route::post('criaAluno','AulaController@createAluno');
route::put('atualizaAluno/{id}','AulaController@updateAluno');
route::delete('deletaAluno/{id}','AulaController@deleteAluno');

route::get('mostraBoletim/{id}','BoletimController@showBoletim');
route::get('listaBoletim','BoletimController@listBoletim');
route::post('criaBoletim','BoletimController@createBoletim');
route::put('atualizaBoletim/{id}','BoletimController@updateBoletim');
route::delete('deletaBoletim/{id}','BoletimController@deleteBoletim');
