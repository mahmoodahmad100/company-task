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

  /* Company */
  // Route::apiResource('companies','API\V1\CompanyController');

  /* Department */
  Route::apiResource('departments','API\V1\DepartmentController');

  /* Manager */
  Route::apiResource('managers','API\V1\ManagerController');

  /* Employee */
  Route::apiResource('employees','API\V1\EmployeeController');
});



/* API ===> V2 */
Route::group(['prefix' => 'v2'],function(){

  /* Department */
  Route::get('departments','API\V2\DepartmentController@index');

});
