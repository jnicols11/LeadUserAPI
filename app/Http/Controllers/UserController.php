<?php

namespace App\Http\Controllers;

use App\Services\Utility\LeadLogger;
use Illuminate\Http\Request;
use App\Services\Business\UserService;
use App\Models\UserModel;

class UserController extends Controller
{
    public function getUser($id)
    {
        // Log function entry
        LeadLogger::info("Entering function getUser in class UserController");

        // Get User from service
        $user = UserService::getUserByID($id);

        // Log function exit
        LeadLogger::info("Exiting function getUser in class UserController with code 2xx");

        // return json user
        return $user->jsonSerialize();
    }

    public function getAllUsers()
    {
        // Log function entry
        LeadLogger::info("Entering function getAllUsers in class UserController");

        // Get All Users from Service
        $users = UserService::getAllUsers();

        // Log function exit
        LeadLogger::info("Exiting function getAllUsers in class UserController with code 2xx");

        // return users
        return $users;
    }

    public function createUser(Request $request)
    {
        // Log function entry
        LeadLogger::info("Entering function createUser in class UserController");

        // Establish Variables from Request
        $fullName = $request->input('name');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        // Create Model from Variables
        $user = new UserModel($fullName, $username, $email, $password);

        // Attempt User Registry in DB
        if (UserService::createUser($user) == 200) {
            // Log function exit
            LeadLogger::info("Register Success! Exiting function createUser in class UserController with code 200");

            // return response to application Registration success
            return response()->json([
                'message' => 'Register success'
            ], 200);
        }

        if (UserService::createUser($user) == 422) {
            LeadLogger::warning("User already exists in database");

            // return response to application, User already exists
            return response()->json([
                'message' => 'User already exists'
            ], 422);
        }
        // Log function warning
        LeadLogger::warning("Unable to register User error code 500");

        // Return response to application Registration failed, unknown error
        return response()->json([
            'Message' => 'Failed to Register, Error unknown'
        ], 500);
    }

    public function login(Request $request)
    {
        // Log function entry
        LeadLogger::info("Entering function login in class UserController");

        //Establish Variables from Request
        $credentials = $request->input('credentials');
        $password = $request->input('password');

        // Attempt User Login
        if (is_object(UserService::login($credentials, $password))) {
            // Log function exit
            LeadLogger::info("Login Success! Exiting function login in class UserController with status code 200");

            $user = UserService::login($credentials, $password);

            // return response to application Login Success
            return $user->jsonSerialize();
        } else if (UserService::login($credentials, $password) == 401) {
            // Log proper warning
            LeadLogger::warning("Login attempt failed on " . $credentials . " incorrect credentials! Exiting function login in class UserController");

            // return response to application invalid credentials
            return response()->json([
                'message' => 'Incorrect Username/Email or Password'
            ], 401);
        }

        LeadLogger::error("Login failed! Status code: 500 Error unknown");

        // return response to application login failed, unknown error
        return response()->json([
            'message' => 'Login failed! Error unknown'
        ], 500);
    }

    public function updateAccName(Request $request)
    {
        // Log function entry
        LeadLogger::info("Entering function updateAccName in class UserController");

        // Establish Variables from request
        $name = $request->input('name');
        $id = $request->input('id');

        // Attempt to update user in database
        if (UserService::updateAccName($id, $name) == 200) {
            // Log function exit
            LeadLogger::info("Update Successful! Exiting function updateAccName in class UserController");

            return response()->json([
                'message' => 'Update Name Successful!'
            ], 200);
        }

        // Log Error
        LeadLogger::error("Update Failed! Exiting function updateAccName in class UserController");

        return response()->json([
            'message' => 'Update Failed!'
        ], 500);
    }

    public function updateAccUsername(Request $request)
    {
        // Log function entry
        LeadLogger::info("Entering function updateAccUsername in class UserController");

        // Establish Variables from request
        $username = $request->input('username');
        $id = $request->input('id');

        // Attempt to update username in database
        // Attempt to update user in database
        if (UserService::updateAccUsername($id, $username) == 200) {
            // Log function Exit
            LeadLogger::info("Update Successful! Exiting function updateAccUsername in class UserController");

            return response()->json([
                'message' => 'Update Username Successful!'
            ], 200);
        }

        // Log Error
        LeadLogger::error("Update Failed! Exiting function updateAccUsername in class UserController");

        return response()->json([
            'message' => 'Update Failed!'
        ], 500);
    }

    public function updateAccEmail(Request $request)
    {
        // Log function entry
        LeadLogger::info("Entering function updateAccEmail in class UserController");

        // Establish Variables from request
        $email = $request->input('email');
        $id = $request->input('id');

        // Attempt to update user in database
        if (UserService::updateAccEmail($id, $email) == 200) {
            // Log function exit
            LeadLogger::info("Update Successful! Exiting function updateAccEmail in class UserController");

            return response()->json([
                'message' => 'Update Email Successful!'
            ], 200);
        }

        // Log error
        LeadLogger::error("Update Failed! Exiting function updateAccEmail in class UserController");

        return response()->json([
            'message' => 'Update Failed!'
        ], 500);
    }

    public function updateUser(Request $request)
    {
        // Log function entry
        LeadLogger::info("Entering function updateUser in class UserController");

        // Establish Variables from Request
        $ID = $request->input('id');
        $fullName = $request->input('fullname');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');

        // Create Model from Variables
        $user = new UserModel($ID, $fullName, $username, $email, $password);

        // Attempt to update user in DB
        if (UserService::updateUser($user)) {
            // Log function exit
            LeadLogger::info("Exiting function updateUser in class UserController with code 2xx");

            return "Success 220";
        }

        // Log function Warning
        LeadLogger::warning("Unable to update User error code 500");
        return "Failed 500";
    }
}
