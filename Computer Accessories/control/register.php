<?php
session_start();//start a session 

include_once '../asset/database/db_connection.php';

if(isset($_POST['submit-register'])){
    $username =$_POST['username'];
    $email = $_POST['email'];
    $country =$_POST['country'];
    $password =md5($_POST['password']);

$sql1 = "SELECT * FROM customer WHERE email = '$email'";
$execute = mysqli_query($conn, $sql1);
 if(mysqli_num_rows($execute)>0){
    echo 'user alredy exist';
    echo ' <div class"error"><a href="../register.php">Back to registration</a></div>';
 }
    else{
     $sql = "INSERT INTO customer(username,email,country,password) VALUES('$username','$email','$country','$password')";
    $result = mysqli_query($conn, $sql);
    //set session variable
   $_SESSION['username']=$username;
   $_SESSION['loggedin']= true;
   if ($user['role'] === 'admin') { 
      $_SESSION['AdminIn'] = true;
  } else {
      $_SESSION['AdminIn'] = false; 
   }

   header('location: ../login.php');
}

}

