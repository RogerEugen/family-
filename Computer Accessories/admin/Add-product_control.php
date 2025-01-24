<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../asset/css/style.css">
    <title>FieldTech - Dashboard</title>
</head>
<body>
    

    <div class="container">
       
        <?php
        // Display messages if any
        if (isset($message)) {
            foreach ($message as $msg) {
                echo '<div class="message"><span>' . htmlspecialchars($msg) . '</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i></div>';
            }
        }
        ?>

        <section id="Add Product" class="add-product sec">
            <h1 class="heading">Add New Product</h1>
            <form action="../control/admin/product.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
                    <label for="product_name">Product Name:</label>
                    <input type="text" name="product_name" required>
                </div>
                <div class="form-group">
                    <label for="product_description">Product Description:</label>
                    <textarea name="product_description" required></textarea>
                </div>
                <div class="form-group">
                    <label for="product_price">Product Price:</label>
                    <input type="number" name="product_price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="product_quantity">Product Quantity:</label>
                    <input type="number" name="product_quantity" required>
                </div>
                <div class="form-group">
                    <label for="product_total_price">Product Total Price:</label>
                    <input type="number" name="product_total_price" step="0.01" required>
                </div>
                <div class="form-group">
                    <label for="product_image">Product Image:</label>
                    <input type="file" name="product_image" accept="image/*" required>
                </div>
                <input type="submit" name="submit-product" value="Add Product" class="btn">
                        </form>
        </section>
        
    <?php include "../footer.php"; ?>
    </div>

</body>
</html>