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
Route::match(['post', 'options'], "login", "UserController@login")->middleware("Cors");
Route::post('/updateAccName', 'UserController@updateAccName')->middleware("Cors");
Route::post('/updateAccUsername', 'UserController@updateAccUsername')->middleware("Cors");
Route::post('/updateAccEmail', 'UserController@updateAccEmail')->middleware("Cors");

Route::post('/updateUser', 'UserController@updateUser')->middleware("Cors");

// User Gets
Route::get('/getUserByUsernameOrEmail/{name}', 'UserController@getUserByUsernameOrEmail')->middleware("Cors");
Route::get('/getUser/{id}', 'UserController@getUser')->middleware("Cors");
Route::get('/getAllUsers', 'UserController@getAllUsers')->middleware("Cors");
