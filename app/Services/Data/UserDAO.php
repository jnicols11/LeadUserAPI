<?php

namespace App\Services\Data;

use App\Models\UserModel;
use App\Services\Utility\LeadLogger;
use Illuminate\Support\Facades\DB;

class UserDAO
{
    public static function getUserByID($id)
    {
        // get user from database by ID
        $user = DB::table('user')->where('ID', $id)->first();

        $user = new UserModel($user->Full_Name, $user->Username, $user->Email, $user->Role, null);

        $user->setID($id);

        return $user;
    }

    public static function getUserByUsernameOrEmail($name)
    {
        // Log funtion entry
        LeadLogger::info("Entering function getUserByUsernameOrEmail in class UserDAO");

        // Check name that was sent
        $value = DB::table('user')->where('Username', $name)->first();
        $value2 = DB::table('user')->where('Email', $name)->first();

        if ($value != null && $value2 == null) {
            // Account with matching username was found
            $user = new UserModel($value->Full_Name, $value->Username, $value->Email, $value->Role, null);
            $user->setID($value->ID);

            // Log function exit
            LeadLogger::info("User was found by username, exiting getUserByUsernameOrEmail in class UserDAO");

            return $user;
        } elseif ($value == null && $value2 != null) {
            // Account with matching email was found
            $user = new UserModel($value2->Full_Name, $value2->Username, $value2->Email, $value2->Role, null);
            $user->setID($value2->ID);

            // Log function exit
            LeadLogger::info("User was found by email, exiting getUserByUsernameOrEmail in class UserDAO");

            return $user;
        } else {
            // No account was found
            // Log function exit
            LeadLogger::info("No Account was found, exiting getUserByUsernameOrEmail in class UserDAO");
            return null;
        }
    }

    public static function getAllUsers()
    {
        return DB::table('user')->get()->toJson();
    }

    public static function createUser($user)
    {
        // Check for common users
        $value = DB::table('user')->where('Username', $user->getUsername());
        $value2 = DB::table('user')->where('Email', $user->getEmail());

        if ($value->count() == 0 && $value2->count() == 0) {
            DB::table('user')->insert([
                'Full_Name' => $user->getFullName(),
                'Username' => $user->getUsername(),
                'Email' => $user->getEmail(),
                'Password' => $user->getPassword()
            ]);

            return 200;
        } elseif ($value->count() > 0 || $value2->count() > 0) {
            return 422;
        }

        return 500;
    }

    public static function login($credentials, $password)
    {
        // check if passwords match
        if (DB::table('user')->where('Username', $credentials)->value('Password') == $password) {

            // Set User Array
            $user = DB::table('user')->where('Username', $credentials)->first();

            $fullName = $user->Full_Name;

            $username = $user->Username;

            $email = $user->Email;

            $role = $user->Role;

            $password = null;

            $id = $user->ID;

            $user = new UserModel($fullName, $username, $email, $role, $password);

            $user->setID($id);

            return $user;
        } else if (DB::table('user')->where('Email', $credentials)->value('Password') == $password) {
            // Set User Array
            $user = DB::table('user')->where('Email', $credentials)->first();

            $fullName = $user->Full_Name;

            $username = $user->Username;

            $email = $user->Email;

            $role = $user->Role;

            $password = null;

            $id = $user->ID;

            $user = new UserModel($fullName, $username, $email, $role, $password);

            $user->setID($id);

            return $user;
        } else {
            // return Login Fail Status code
            return 401;
        }
    }

    public static function updateAccName($id, $name)
    {
        // Log function entry
        LeadLogger::info("Entering function updateAccName in class UserDAO");

        // update account name in database
        DB::update('update user set Full_Name = ? where id = ?', [$name, $id]);

        // Log function exit
        LeadLogger::info("Exiting function updateAccName in class UserDAO");

        return 200;
    }

    public static function updateAccUsername($id, $username)
    {
        // Log function entry
        LeadLogger::info("Entering function updateAccUsername in class UserDAO");

        // update account username in database
        DB::update('update user set Username = ? where id = ?', [$username, $id]);

        // Log function exit
        LeadLogger::info("Exiting function updateAccUsername in class UserDAO");

        return 200;
    }

    public static function updateAccEmail($id, $email)
    {
        // Log function entry
        LeadLogger::info("Entering function updateAccEmail in class UserDAO");

        // update account email
        DB::update('update user set Email = ? where id = ?', [$email, $id]);

        // Log function exit
        LeadLogger::info("Exiting function updateAccEmail in class UserDAO");

        return 200;
    }

    public static function updateUser($user)
    {
        DB::update('update user set Full_Name = ? and Username = ? and Email = ? and Password = ? where ID = ?', [$user->getFullName(), $user->getUsername(), $user->getEmail(), $user->getPassword(), $user->getID()]);

        return true;
    }
}
