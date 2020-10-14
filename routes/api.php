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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('users/{user}', 'UserController@getProfile');
Route::get('users/{user}/received-votes', 'UserController@getReceivedVotes');

Route::post('users/{user}/received-votes', 'UserController@postUserVote');
Route::patch('users/{user}', 'UserController@patchUser');
Route::post('users/{user}/image', 'UserController@postProfileImage');
Route::delete('users/{user}/image', 'UserController@deleteProfileImage');
