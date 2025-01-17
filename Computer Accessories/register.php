<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form with Username, Email, and Password</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="asset/css/bbbb.css">
    <style>
       
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Register</h2>
        <form action="register_control.php" method="post">
            <div class="input-container">
                <i class="fas fa-user"></i>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div class="input-container">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" placeholder="Email" required>
            </div>
            
            <div class="input-container">
                <i class="fas fa4-barcode"></i>
                <input type="text" name="country" placeholder="Country" required>
            </div>
            <div class="input-container">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" placeholder="Password" required>
            </div>
            <input type="submit" value="Login">
            <p>If  have yet account click <a href="login.php">Login into an account</a></p>
        </form>
    </div>
</body>
</html>
