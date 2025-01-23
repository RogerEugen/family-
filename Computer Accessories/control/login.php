<?php
include_once '../asset/database/db_connection.php';
if(isset($_POST['submit-register'])){
    $email = $_POST['email'];
    $password =$_POST['password'];
    $query = "SELECT * FROM customer WHERE email = '$email'";
    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0){
        $user = mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])){
         $_SESSION['username']=$username;
         $_SESSION['loggedin']= true;
   header('location: ../index.php');
   }
}
else{
    echo "user not found";
    echo '<br><br><a href="../register.php">REGISTER AN ACCOUNT</a>';
}

}