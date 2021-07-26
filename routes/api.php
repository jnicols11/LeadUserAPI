<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where the API endpoints are registered.  This is how the application access this layer of the
| application to send and retrieve data for the user
|
*/

// test to make sure API is working
Route::get('/test', function () {
    return ['message' => 'working!'];
});

// User Endpoints
// User Posts
Route::post('/register', 'UserController@createUser')->middleware("Cors");
Route::group(['middleware' => 'cors'], function() {
    Route::post('register', 'UserController@createUser');
});

Route::group(['middleware' => 'cors'], function() {
    Route::post('login', 'UserController@login');
});

Route::group(['middleware' => 'cors'], function() {
    Route::post('updateAccName', 'UserController@updateAccName');
});

Route::group(['middleware' => 'cors'], function() {
    Route::post('updateAccUsername', 'UserController@updateAccUsername');
});

Route::group(['middleware' => 'cors'], function() {
    Route::post('updateAccEmail', 'UserController@updateAccEmail');
});

Route::group(['middleware' => 'cors'], function() {
    Route::post('updateUser', 'UserController@updateUser');
});

// User Gets
Route::group(['middleware' => 'cors'], function() {
    Route::get('getUserByUsernameOrEmail/{name}', 'UserController@getUserByUsernameOrEmail');
});

Route::group(['middleware' => 'cors'], function() {
    Route::get('getUser/{id}', 'UserController@getUser');
});

Route::group(['middleware' => 'cors'], function() {
    Route::get('getAllUsers', 'UserController@getAllUsers');
});
