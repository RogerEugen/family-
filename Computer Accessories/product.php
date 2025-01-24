<?php
session_start(); // Start the session
include_once 'asset/database/db_connection.php';

// Check if the user is logged in
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit; // Ensure no further code is executed
}

// Handle adding products to the cart
if (isset($_POST['add_to_cart'])) {
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_quantity = 1;

    // Check if the product is already in the cart
    $select_cart_query = "SELECT * FROM cart WHERE name = '$product_name'";
    $select_cart = $conn->query($select_cart_query);

    if ($select_cart->num_rows > 0) {
        $message[] = 'Product already added to cart';
    } else {
        // Insert the product into the cart
        $insert_cart_query = "INSERT INTO cart (name, price, image, quantity) VALUES ('$product_name', '$product_price', '$product_image', $product_quantity)";
        if ($conn->query($insert_cart_query) === TRUE) {
            $message[] = 'Product added to cart successfully';
        } else {
            $message[] = 'Error adding product to cart';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="asset/css/style.css">
    <title>FieldTech - Products</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div class="container">
        <?php
        // Display messages if any
        if (isset($message)) {
            foreach ($message as $msg) {
                echo '<div class="message"><span>' . htmlspecialchars($msg) . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
            }
        }
        ?>

        <section id="Product Listings" class="product-listings sec" class="Product-Listings">
            <h1 class="heading">RATING PRODUCTS</h1>
            <div class="box-container">
                <?php
                $sql = "SELECT * FROM product";
                $select_products = $conn->query($sql);
                if ($select_products && mysqli_num_rows($select_products) > 0) {
                    while ($fetch_product = mysqli_fetch_assoc($select_products)) {
                ?>
                <form action="" method="post">
                    <div class="box">
                        <img src="admin/img/<?php echo htmlspecialchars($fetch_product['image']); ?>" alt="">
                        <h3><?php echo htmlspecialchars($fetch_product['name']); ?></h3>
                        <div class="price">$ <?php echo htmlspecialchars($fetch_product['price']); ?>/-</div>
                        <input type="hidden" name="product_name" value="<?php echo htmlspecialchars($fetch_product['name']); ?>">
                        <input type="hidden" name="product_price" value="<?php echo htmlspecialchars($fetch_product['price']); ?>">
                        <input type="hidden" name="product_image" value="<?php echo htmlspecialchars($fetch_product['image']); ?>">
                        <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
                    </div>
                </form>
                <?php
                    }
                } else {
                    echo '<p>No products found.</p>';
                }
                ?>
            </div>
        </section>
        <?php include "footer.php"; ?>
    </div>


    
</body>
</html>