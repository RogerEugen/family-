<?php
session_start(); // Start the session
include '../../asset/database/db_connection.php';

// Check if the user is logged in
// if (!isset($_SESSION['AdminIn']) || $_SESSION['AdminIn'] !== true) {
//     header('Location: login.php'); // Redirect to login page if not logged in
//     exit; // Ensure no further code is executed
// }

// Handle product insertion
if (isset($_POST['submit-product'])) {
    $product_name = $_POST['product_name'];
    $product_description = $_POST['product_description'];
    $product_price = $_POST['product_price'];
    $product_quantity = $_POST['product_quantity'];
    $product_total_price = $_POST['product_total_price'];
    $product_image = $_FILES['product_image']['name'];
    $target_dir = "../../admin/img/"; // Directory where images will be uploaded
    $target_file = $target_dir . basename($product_image);
    
    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES['product_image']['tmp_name'], $target_file)) {
        // Insert product into the database
        $insert_product_query = "INSERT INTO product (image, name, description, price, quantity, total_price) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insert_product_query);
        mysqli_stmt_bind_param($stmt, "ssssss", $product_image, $product_name, $product_description, $product_price, $product_quantity, $product_total_price);
        
        if (mysqli_stmt_execute($stmt)) {
            $message[] = 'Product added successfully';
        } else {
            $message[] = 'Error adding product';
        }
        
        mysqli_stmt_close($stmt);
    } else {
        $message[] = 'Error uploading image';
    }
    header('location:../../index.php');
}
?>

