<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "blajar_php2";

$connect = mysqli_connect ($server, $user, $password, $database);
if (!$connect) {
    die ("connection failed: " .mysqli_connect_server());
}
?>