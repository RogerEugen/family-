<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Username, Email, and Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="asset/css/login&register.css">
    <style>
       
    </style>
</head>
<body>
<div class="wrapper">
        <h2>Login</h2>
        <form action="control/login.php" method="post">     
            <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" class="btn" value="LOGIN" name="submit-login">
            <div class="register">
            <p>if not have an account click <a href="register.php">Register  account</a></p></div>
        </form>
    </div>
</body>
</html>
