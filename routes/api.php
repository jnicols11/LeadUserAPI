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
Route::get('/getUser/{id}', 'UserController@getUser');
Route::get('/getAllUsers', 'UserController@getAllUsers');

// Project Endpoints
// Project Posts

// Project Gets
Route::get('/getProjectByID/{id}', 'ProjectController@getProjectByID');

Route::get('/getTeamByID/{id}', 'ProjectController@getTeamByID');

Route::get('/getIssueByID/{id}', 'ProjectController@getIssueByID');

Route::get('/getAllProjectIssues/{projectID}', 'ProjectController@getAllProjectIssues');

Route::get('/getSprintByID/{id}', 'ProjectController@getSprintByID');

Route::get('/getAllProjectSprints/{projectID}', 'ProjectController@getAllProjectSprints');

Route::get('/getAllMemberSprints/{projectID}/{userID}', 'ProjectController@getAllMemberSprints');
