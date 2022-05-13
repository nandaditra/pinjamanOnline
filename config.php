<?php 

$server = "localhost";
$username = "root";
$password = "3gpower";
$database = "login_register";

$conn = mysqli_connect($server, $username, $password, $database);

if (!$conn) {
    die("<script>alert('No Connection')</script>");
}

?>