<?php

define("LOCATION_DATABASE" , "database.txt");


function getDataOfDatabase() {
    $handle = file_get_contents(LOCATION_DATABASE);

    $userE = explode("\n" , $handle);
    $users = [];

    foreach ( $userE as $user ) {
        $u = explode("," , $user);
        $users[$u[0]] = $u[1];
    }
    
    return $users;
}


function saveData($datas) {

    file_put_contents(LOCATION_DATABASE , "\n" . $datas , FILE_APPEND );

}