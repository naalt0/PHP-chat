<?php
include "config.php";
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

$username = mysqli_real_escape_string($dbname, $_POST['username']);
$password = mysqli_real_escape_string($dbname, $_POST['password']);

$select = "SELECT * FROM User WHERE username = $username && pwd = $password";

$result = mysqli_query($dbname,$sql);
$row = mysqli_fetch_array($result);
$active = $row['active'];   
$count = mysqli_num_rows($result);
		
      if($count == 1) {
         session_register("username");
         $_SESSION['login_user'] = $username;
         
         header("location: landing.php");
      }else {
         $error = header("location: error.php");
      }
}
?>

<html>
    <head>
        <meta charset utf-8>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
        <script src="login.js"></script>
    </head>
        <body>
            <form action = "" method = "post">
                <div class="container">
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button class="submit" type="submit">Login</button>
                    <label> 
                        <a href="index.php">Home</a>
                    </label>
                </div>

            </form>

        </body>
</html>