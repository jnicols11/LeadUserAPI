<?php

namespace App\Services\Business;

use App\Services\Data\UserDAO;
use App\Services\Utility\LeadLogger;

class UserService
{
    public static function getAllUsers()
    {
        LeadLogger::info("Entering function getAllUsers in class UserService");

        $users = UserDAO::getAllUsers();

        LeadLogger::info("Exiting function getAllUsers in class UserService");

        return $users;
    }

    public static function getUserByID($id)
    {
        LeadLogger::info("Entering function getUserByID in class UserService");

        LeadLogger::info("Exiting function getUserByID in class UserService");
        return UserDAO::getUserByID($id);
    }

    public static function createUser($user)
    {
        LeadLogger::info("Entering function createUser in class UserService");

        LeadLogger::info("Exiting function createUser in class UserService");
        return UserDAO::createUser($user);
    }

    public static function login($credentials, $password)
    {
        LeadLogger::info("Entering function login in class UserService");

        LeadLogger::info("Exiting function login in class UserService");
        return UserDAO::login($credentials, $password);
    }

    public static function updateAccName($id, $name)
    {
        LeadLogger::info("Entering function updateAccName in class UserService");

        LeadLogger::info("Exiting function updateAccName in class UserService");
        return UserDAO::updateAccName($id, $name);
    }

    public static function updateAccUsername($id, $username)
    {
        LeadLogger::info("Entering function updateAccUsername in class UserService");

        LeadLogger::info("Exiting function updateAccUsername in class UserService");
        return UserDAO::updateAccUsername($id, $username);
    }

    public static function updateAccEmail($id, $email)
    {
        LeadLogger::info("Entering function updateAccEmail in class UserService");

        LeadLogger::info("Exiting function updateAccEmail in class UserService");
        return UserDAO::updateAccEmail($id, $email);
    }

    public static function updateUser($user)
    {
        LeadLogger::info("Entering function updateUser in class UserService");

        LeadLogger::info("Exiting function updateUser in class UserService");
        return UserDAO::updateUser($user);
    }
}
