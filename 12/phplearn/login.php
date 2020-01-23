<?php

session_start();
//
//print_r($_SESSION);
define("USERNAME" , "hesammousavi");
define("PASSWORD" , 123456);


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( ! empty($username) && ! empty($password) ) {
        if( $username == USERNAME && $password == PASSWORD) {
            $_SESSION['username'] = $username;
            header("Location: adminpanel.php");
            die;
        }
    }
}


require 'views/login.view.php';