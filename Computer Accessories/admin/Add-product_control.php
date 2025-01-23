<?php
include_once "../asset/database/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link rel="stylesheet" href="../asset/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <title>Add Product</title>
</head>
<body>
    <h1>Add Product</h1>
    <form action="" method="POST">
        <label for="image">Image:</label>
        <input type="text" name="image" required><br>

        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="description">Description:</label>
        <textarea name="description" required></textarea><br>

        <label for="price">Price:</label>
        <input type="number" step="0.01" name="price" required><br>

        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required><br>
        <input type="file" placeholder="Enter product file" class="input-fields" required>

        <input type="submit" value="Add Product">
    </form>
</body>
</html>

