<?php

session_start();

if( ! isset($_SESSION['username']) ) {
    header("Location: login.php");
    die;
}

$username = $_SESSION['username'];

require 'views/adminpanel.view.php';