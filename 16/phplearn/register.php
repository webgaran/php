<?php

require_once "functions.php";
$status = null;

AuthLogout();

if( isPost() ) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if( validation_required([$username , $password]) ) {
        $password = hash_hmac("sha256" , $password , "secer");
        $data = $username.",".$password;
        $users = getDataOfDatabase();
        if( ! array_key_exists($username , $users)) {
            saveData($data);
            redirect("login.php");
        } else {
            $status = "this username is exists";
        }
      
    } else {
        $status = "username or password is required";
    }
}

require "views/register.view.php";