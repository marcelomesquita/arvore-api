<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::namespace('Api')->group(function () {
    Route::prefix('assuntos')->group(function() {
        Route::get('/', 'AssuntoController@pesquisar');
    });

    Route::prefix('bancas')->group(function() {
        Route::get('/', 'BancaController@pesquisar');
    });

    Route::prefix('orgaos')->group(function() {
        Route::get('/', 'OrgaoController@pesquisar');
    });

    Route::prefix('programas')->group(function() {
        Route::get('/', 'ProgramaController@pesquisar');
    });
});
