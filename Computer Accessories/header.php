<?php
session_start();
include_once 'asset/database/db_connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>FieldTech</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <a href="#"><img src="asset/img/icons/domain.png" alt="FieldTech Logo" class="logo"></a><h1 class="mainText">COMPUTER ACCESSORIES</h1>
            <div class="navbar">
                <ul class="nav-items">
                    <li><a class="active" href="index.php">Homepage</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contacts.php">Contacts</a></li>
                    <li><a href="login.php">Product Listings</a></li>  
                <?php if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true):?>
                    <li><?php echo htmlspecialchars($_SESSION['username']);?></li>
                    <li><a href="logout.php">Logout</a></li>
                    <?php else: ?>
                        <li><a href="login.php">Login</a></li>
        </div>
    </div>
    </body>
</html>
