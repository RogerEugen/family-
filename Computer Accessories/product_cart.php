<?php
include "db_connection.php";

// Update quantity in the product
if (isset($_POST['update_update_btn'])) {
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];

    // Update the quantity in the product
    $update_quantity_query = "UPDATE product SET quantity = $update_value WHERE id = $update_id";
    if ($conn->query($update_quantity_query) === TRUE) {
        header('Location: product_product.php');
        exit();
    }
}

// Remove an item from the product
if (isset($_GET['remove'])) {
    $remove_id = $_GET['remove'];

    // Remove the item from the product
    $query = "DELETE FROM product WHERE id = $remove_id";
    $conn->query($query);

    header('Location: product_product.php');
    exit();
}

// Delete all items from the product
if (isset($_GET['delete_all'])) {
    $sql = "DELETE FROM product";
    $conn->query($sql);
    header('Location: product_product.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping product</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <section class="shopping-product">
        <h1 class="heading">Shopping product</h1>

        <table>
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $sql = "SELECT * FROM product";
                $select_product = $conn->query($sql);
                $grand_total = 0;

                if ($select_product->num_rows > 0) {
                    while ($fetch_product = $select_product->fetch_assoc()) {
                        $sub_total = $fetch_product['price'] * $fetch_product['quantity'];
                        $grand_total += $sub_total;
                ?>
                <tr>
                    <td><img src="image/<?php echo htmlspecialchars($fetch_product['image']); ?>" height="100" alt=""></td>
                    <td><?php echo htmlspecialchars($fetch_product['name']); ?></td>
                    <td>$<?php echo number_format($fetch_product['price'], 2); ?>/-</td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_product['id']; ?>">
                            <input type="number" name="update_quantity" min="1" value="<?php echo $fetch_product['quantity']; ?>">
                            <input type="submit" value="Update" name="update_update_btn">
                        </form>   
                    </td>
                    <td>$<?php echo number_format($sub_total, 2); ?>/-</td>
                    <td><a href="product_product.php?remove=<?php echo $fetch_product['id']; ?>" onclick="return confirm('Remove item from product?')" class="delete-btn">Remove</a></td>
                </tr>
                <?php
                    }
                }
                ?>
                <tr class="table-bottom">
                    <td><a href="products.php" class="option-btn" style="margin-top: 0;">Continue Shopping</a></td>
                    <td colspan="3">Grand Total</td>
                    <td>$<?php echo number_format($grand_total, 2); ?>/-</td>
                    <td><a href="product_product.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn">Delete All</a></td>
                </tr>
            </tbody>
        </table>

        <div class="checkout-btn">
            <a href="checkout.php" class="btn <?= ($grand_total > 0) ? '' : 'disabled'; ?>">Proceed to Checkout</a>
        </div>
    </section>
</div>

</body>
</html>