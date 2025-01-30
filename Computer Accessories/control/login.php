<?php
include_once '../asset/database/db_connection.php';
if(isset($_POST['submit-login'])){
    $email = $_POST['email'];
    $password =$_POST['password'];
    $query = "SELECT * FROM customer WHERE email = '$email'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])){
            $_SESSION['username'] = $user['username']; // Assuming 'username' is a field in your database
            $_SESSION['loggedin'] = true;
            
            if ($user['role'] === 'admin') {
                $_SESSION['AdminIn'] = true;
            } else {
                $_SESSION['AdminIn'] = false; 
            }
            header('Location: ../index.php');
            exit(); 
   }
}
else{
    echo "user not found";
    echo '<br><br><a href="../register.php">REGISTER AN ACCOUNT</a>';
}

}