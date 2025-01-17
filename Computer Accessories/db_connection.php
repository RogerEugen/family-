<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if ($conn) {
    $sql1 = "CREATE DATABASE IF NOT EXISTS Computer_Accessoriess";
    $result = mysqli_query($conn, $sql1);

    mysqli_select_db($conn, "Computer_Accessoriess");

    $sql = "CREATE TABLE IF NOT EXISTS customer (
        ID INT(200) NOT NULL AUTO_INCREMENT,
        username VARCHAR(200) NOT NULL,
        email VARCHAR(200) NOT NULL,
        country VARCHAR(255) NOT NULL,
        password VARCHAR(200) NOT NULL,
        PRIMARY KEY (ID) 
    )";

    $result2 = mysqli_query($conn, $sql);

} else {
    die("Connection failed: " . mysqli_connect_error());
}

mysqli_close($conn);
