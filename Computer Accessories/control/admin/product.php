
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Use superglobals to get the submitted data
    $image = $_POST['image'];
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $total_price = $price * $quantity;

    // Prepare the stored procedure call
    $sql = "CALL InsertProduct('$image', '$name', '$description', $price, $quantity, $total_price)";

    // Execute the stored procedure
    if (mysqli_query($conn, $sql)) {
        // echo "Product inserted successfully.";
    } else {
        echo "Error inserting product: " . mysqli_error($conn);
    }
}
