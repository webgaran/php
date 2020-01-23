<?php

require_once "database.php";
session_start();
// Function's

function isPost() {
    return $_SERVER["REQUEST_METHOD"] == "POST";
}

function redirect($location) {
    header("Location: {$location}");
    die;
}

function validation_required($items) {
    $counter_error = 0;
    foreach ( $items as $item) {
        if( empty($item) )
            $counter_error++;
    }
    return $counter_error == 0;
}

function AuthLogin($location = "login.php") {
    if( ! isset($_SESSION['username']) ) {
        if( isset($_COOKIE['username']) && isset($_COOKIE['password']) ) {
            if( $_COOKIE['username'] == USERNAME && $_COOKIE['password'] == PASSWORD) {
                $_SESSION['username'] = $_COOKIE['username'];
                redirect("adminpanel.php");
            }
        }
        redirect($location);
    }
}

function AuthLogout($location = "index.php") {
    if( isset($_SESSION['username']) )
        redirect($location);
}

function old($key) {
    if( ! empty($_REQUEST[$key]) )
        return htmlspecialchars($_REQUEST[$key]);
    return '';
}