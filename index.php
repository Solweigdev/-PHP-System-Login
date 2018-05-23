<?php

/**
 * @author Solweigdev
 * @link https://github.com/Solweigdev/-PHP-System-Login
 */

 // Include auto loader to call class
require ("vendor/autoload.php");
 

 // Include configuration to connection in your database
 require_once("app/config/config.php");


 // Include class login
 $User = new App\classes\User;

 // Verifier si l'utilisateur est déjà identifier
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>System login php</title>
	<link rel="stylesheet" type="text/css" href="app/css/style.css">
</head>
<body>
    
    <?php if(App\classes\Session::exists('user')): ?>
        <?php require("app/home.php"); ?>
    <?php else: ?>
        <?php require("app/login.php"); ?>
    <?php endif ?> 

</body>
</html>