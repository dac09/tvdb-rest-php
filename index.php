<?php

require('bootstrap.php');
require('apicalls.php');

$f3=require('src/fatfree/base.php');
$f3->route('GET /',
    function($f3) {
        echo "Hello World! It works :)";
    }
);

$f3->route('GET /@action', '@action');
$f3->route('GET /@action/@param1', '@action');
$f3->route('GET /@action/@param1/@param2', '@action');
$f3->run();

?>