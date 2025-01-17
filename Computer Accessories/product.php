<?php
include 'db_connection.php';

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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="me">

<?php
if (isset($message)) {
    foreach ($message as $msg) {
        echo '<div class="message"><span>' . $msg . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
    }
}
?>

<div class="container">

<section class="products">

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
                <img src="image/<?php echo htmlspecialchars($fetch_product['image']); ?>" alt="">
                <h3><?php echo htmlspecialchars($fetch_product['name']); ?></h3>
                <div class="price">$<?php echo htmlspecialchars($fetch_product['price']); ?>/-</div>
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

</div>

</body>
<!-- <?php // include "footer.php"; ?> -->
</html>
