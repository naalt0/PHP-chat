<?php
require("config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO User (pwd, username) VALUES ('$password', '$username')";
    mysqli_query($conn, $sql);

    header("location: chat.php");
}
?>

<html>
    <head>
        <meta charset utf-8>
        <title>SignUp</title>
        <link rel="stylesheet" href="login.css">
    </head>
        <body>
            <form action="" method="POST">
                <div class="container">
                    <input type="text" name="username" placeholder="Create Username" required>
                    <input type="password" name="password" placeholder="Create Password" required>
                    <button name="submit" class="submit" type="submit">Signup</button>
                    <label> 

                        <a href="index.php">Home</a>
                    </label>
                </div>

            </form>
             
        </body>
</html>