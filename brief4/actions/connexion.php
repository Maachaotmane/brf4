<?php

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $db_name = 'students';

$connection = mysqli_connect($host, $user, $pass, $db_name);

if (!$connection) {
    echo 'something went wrong';
}
