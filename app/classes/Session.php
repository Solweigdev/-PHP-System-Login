<?php

namespace App\classes;

class Session {

    public static function exists($user)
    {
       return (isset($_SESSION[$user])) ? true : false;
    }
}