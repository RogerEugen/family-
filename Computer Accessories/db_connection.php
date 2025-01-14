<?php

$servername ="localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
     die("Connection invalid" . mysqli_connect_error());
}