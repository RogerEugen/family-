<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Computer_Accessories";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database if it doesn't exist
$sql1 = "CREATE DATABASE IF NOT EXISTS $dbname";
if (mysqli_query($conn, $sql1)) {
    // echo "Database created successfully or already exists.<br>";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "<br>";
}

// Select the database
mysqli_select_db($conn, $dbname);

// Create customer table
$sql2 = "CREATE TABLE IF NOT EXISTS customer (
    ID INT(11) NOT NULL AUTO_INCREMENT,
    username VARCHAR(200) NOT NULL,
    email VARCHAR(200) NOT NULL,
    country VARCHAR(255) NOT NULL,
    password VARCHAR(200) NOT NULL,
    PRIMARY KEY (ID)
)";

if (mysqli_query($conn, $sql2)) {
    // echo "Customer table created successfully.<br>";
} else {
    echo "Error creating customer table: " . mysqli_error($conn) . "<br>";
}

// Create product table
$sql3 = "CREATE TABLE IF NOT EXISTS product (
    product_id INT(11) NOT NULL AUTO_INCREMENT,
    image VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    description TEXT,
    price DECIMAL(10, 2) NOT NULL,
    quantity INT(11) NOT NULL,
    total_price DECIMAL(10, 2) NOT NULL,
    PRIMARY KEY (product_id)
)";

if (mysqli_query($conn, $sql3)) {
    // echo "Product table created successfully.<br>";
} else {
    echo "Error creating product table: " . mysqli_error($conn) . "<br>";
}

// Create cart table
$sql4 = "CREATE TABLE IF NOT EXISTS cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (product_id) REFERENCES product(product_id) ON DELETE CASCADE
)";

if (mysqli_query($conn, $sql4)) {
    // echo "Cart table created successfully.<br>";
} else {
    echo "Error creating cart table: " . mysqli_error($conn) . "<br>";
}




