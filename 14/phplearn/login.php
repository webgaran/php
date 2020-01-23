<?php

require_once "functions.php";

AuthLogout();

if( isPost() ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( validation_required([$username , $password]) ) {
        if( $username == USERNAME && $password == PASSWORD) {
            if($_POST['remember'] == true ) {
                setcookie("username" , $username , time() + 60 * 60 * 24 * 7);
                setcookie("password" , $password , time() + 60 * 60 * 24 * 7);
            }
            $_SESSION['username'] = $username;
            redirect("adminpanel.php");
        }
    }
}


require 'views/login.view.php';