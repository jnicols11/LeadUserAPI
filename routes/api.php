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
Route::post('/register', 'UserController@createUser');
Route::post('/login', 'UserController@login');
Route::post('/updateAccName', 'UserController@updateAccName');
Route::post('/updateAccUsername', 'UserController@updateAccUsername');
Route::post('/updateAccEmail', 'UserController@updateAccEmail');

Route::post('/updateUser', 'UserController@updateUser');

// User Gets
Route::get('/getUserByUsernameOrEmail/{name}', 'UserController@getUserByUsernameOrEmail');
Route::get('/getUser/{id}', 'UserController@getUser');
Route::get('/getAllUsers', 'UserController@getAllUsers');
