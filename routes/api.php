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

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization, Content-Type');

/* API ===> V1 */
Route::group(['prefix' => 'v1'],function(){

  /* AUTH */
  Route::group(['prefix' => 'auth'],function(){
      Route::post('login', 'API\V1\AuthController@login')->name('login');
      Route::patch('update', 'API\V1\AuthController@update');
      Route::get('logout', 'API\V1\AuthController@logout');
      Route::get('refresh', 'API\V1\AuthController@refresh');
      Route::get('me', 'API\V1\AuthController@me');
  });

  /* User */
  Route::apiResource('users','API\V1\UserController');
  
});
