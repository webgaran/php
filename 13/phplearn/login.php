<?php

require_once "functions.php";

AuthLogout();
//
//print_r($_SESSION);
define("USERNAME" , "hesammousavi");
define("PASSWORD" , 123456);


if( isPost() ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( validation_required([$username , $password]) ) {
        if( $username == USERNAME && $password == PASSWORD) {
            $_SESSION['username'] = $username;
            redirect("adminpanel.php");
        }
    }
}


require 'views/login.view.php';