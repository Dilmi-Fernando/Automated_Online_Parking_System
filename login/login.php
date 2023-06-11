<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/login/login.css"> 
        <title> LOGIN - parKING | Never Tour Around The Block Again </title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
       
</head>
<body>

    <div class="container">
        <h1>Login</h1>
        <form action="login.php" method="POST">
            <div class="user-inputs">
                <input type="text" id="username" name="username" placeholder="Username" required><br>
                <input type="password" id="password" name="password" placeholder="Password" required><br>
            </div>
          
          <input type="submit" id="btn" value="Login" name="btn">
        </form>
        <p class="signup-link">Don't have an account? <a href="signup.html">Sign up</a></p>      
    </div>    

    </div>

    </body>
</html>