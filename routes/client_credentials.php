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

Route::middleware('client_credentials')->get('/my', function (Request $request) {
	return array('user_id' => 1);
});

Route::get('oauth/token', 'AuthController@auth');

Route::middleware('client_credentials')->get('/groups/add', 'Api\GroupApiController@create')->name('groupscreate');
Route::middleware('client_credentials')->get('/groups/delete', 'Api\GroupApiController@delete')->name('groupsdelete');

/*
Route::middleware('client_credentials')->get('/groups/add', function (Request $request) {
        return array('user_id' => 1);
});
*/
