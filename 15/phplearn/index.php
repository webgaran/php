<?php

// Work With File
$filename = "database.txt";

$files = glob("public/js/*.{js}" , GLOB_BRACE);

print_r($files);

foreach ($files as $file) {
    $f = pathinfo($file);
    echo $f['filename'] . "\n";
}
die;

require "views/index.view.php";