<?php

$host = "localhost";
$username = "root";
$password = "root";
$port = "8888";
$db = "php_project";

$conn = mysqli_connect($host, $username, $password, $db);

function check_db_connection($debug = false){
    global $host, $username, $password, $port, $db, $conn;

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}

if($debug) {
    echo "Success: A proper connection to MySQL was made! The " .$db. " database is great." . PHP_EOL;
    echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;   
}

mysqli_close($conn);
}