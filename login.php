<?php
include "config.php";
session_start();
?>

<html>
    <head>
        <meta charset utf-8>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
    </head>
        <body>
            <form action = "" method = "post">
                <div class="container">
                    <input type="text" placeholder="Enter Username" name="username" required>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button class="submit" type="submit">Login</button>
                    <label> 
                        <a href="index.php">Home</a>
                        <a href="landing.php"></a>
                    </label>
                </div>

            </form>

        </body>
</html>