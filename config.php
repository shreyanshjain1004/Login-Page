<?php 

$server = "localhost";
$user = "root";
$pass = "root";
$database = "login";
$port = "8889";

$conn = mysqli_connect($server, $user, $pass, $database, $port);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>