<?php
session_start(); // Start the session
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
    <?php include 'header.php';?>
        <section id="Homepage" class="Homepage">
            <!-- Hero Section -->
            <div class="hero padd">
                <div class="l-hero">
                    <h4>computer Acce<span>ssories</span></h4>
                    <h1>Welcome to the world of computer <br><span>technologies cheaply.</span></h1>
                    <a href="login.php">
                        <button class="l-btn g-btn">BUY NOW</button>
                    </a>
                </div>
                <div class="r-hero">
                    <img src="asset/img/desktop.png" alt="Desktop Accessories" class="r-img">
                </div>
            </div>
        </section>
        <!-- Product Listings -->
        <section id="Product Listings" class="product-listings sec">
            <div class="features">
                <div class="f-box">
                    <h2>Fast.</h2>
                    <p>In time solutions.</p>
                </div>
                <div class="f-box">
                    <h2>Affordable.</h2>
                    <p>At reasonable prices.</p>
                </div>
                <div class="f-box">
                    <h2>Innovative.</h2>
                    <p>Creative thinkers.</p>
                </div>
                <div class="f-box">
                    <h2>Quality.</h2>
                    <p>You deserve quality.</p>
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="about sec">
            <div class="l-ab">
                <img src="asset/img/php.png" alt="PHP Logo" class="ab-img">
            </div>
            <div class="r-ab">
                <h2>About FieldTech</h2>
                <div class="u-ln"></div>
                <p>Welcome to our computer Accessories store! This website is owned and managed by group no. 16 IT STUDENTS from National Institute of Transport(NIT) ...</p>
                <a href="about.php" style="text-decoration: none;color:inherit"> <button class="g-btn">Explore more..</button></a>
            </div>
        </section>
    
       <?php include 'footer.php';?>
        
    </div>
</body>
</html>