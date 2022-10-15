<?php

namespace App\Helpers;

use App\Models\User;

class Calculator
{

    // static function that add infinite number of integers

    public static function addIntegers($a, $b)
    {
        return $a + $b;
    }

    // static function that subtract infinite number of integers
    public static function subtractIntegers($a, $b)
    {
        return $a - $b;
    }

    // static function that multiply infinite number of integers
    public static function multiplyIntegers($a, $b)
    {
        return $a * $b;
    }

    // static function that divide infinite number of integers
    public static function divideIntegers($a, $b)
    {
        // validate that b is not zero
        if ($b == 0) {
            return 0;
        }

        return $a / $b;
    }

    // a function that prints a string in reverse order
    public static function reverseString($string)
    {
        $reversedString = '';
        $length = strlen($string);
        for ($i = 0; $i < $length; $i++) {
            $reversedString.= substr($string, $length - $i - 1, 1);

        }
        return $reversedString;

    }

    // Create a User Model from name, email and password
    public static function createUser($name, $email, $password)
    {
        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();
        return $user;
    }

    // Transform a list of users from a CSV to user models using createUser function
    public static function transformUsers($users)
    {
        $userModels = [];
        foreach ($users as $user) {
            $userModels[] = self::createUser($user['name'], $user['email'], $user['password']);
        }

        return $userModels;
    }

    // curl from a given URL and find users, then call transformUsers
    public static function curlUsers($url)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.113 Safari/537.36');
        $users = curl_exec($ch);
        dd($users);
        self::transformUsers($users);
        curl_close($ch);
    }
}
