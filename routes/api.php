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

Route::get('/maps/{id}', 'MapsController@getById');

Route::get('/maps/{mapId}/areas', 'AreasController@getMapAreas');

Route::resource('/cards', 'CardsController', [
    'except' => ['edit', 'show', 'store']
]);

Route::resources(array(
    'maps' => 'MapsController',
    'areas' => 'AreasController'
));

Route::get('/tests', 'CardEventsController@tests');

Route::get('/card-events', 'CardEventsController');

Route::post('/tails', 'Log\TailController');