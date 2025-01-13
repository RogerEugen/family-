<?php
include "db_connection.php";
 include 'header.php';
if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $sql=  "SELECT * FROM cart WHERE name = '$product_name'";
   $select_cart =$conn->query($sql);

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $sql = "INSERT INTO cart(name, price, image, quantity)
             VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')";
    $insert_product =$conn->query($sql);
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>
   <link rel="stylesheet" href="style.css">
</head>
<body class="me">
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>



<div class="container" class="me">

<section class="products" class="me">

   <h1 class="heading">RATING PRODUCTS</h1>

   <div class="box-container">

      <?php
    
      $sql= "SELECT * FROM product";
      $select_products = $conn->query($sql);
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box" class="me">
            <img src="image/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <div class="price">$<?php echo $fetch_product['price']; ?>/-</div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>



</body>
<?php
include "footer.php";?>
</html>
