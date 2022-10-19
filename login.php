<?php
  require('config.php');

    if (isset($_POST['submit'])) {

        $password = $_POST['pwd'];
        $username = $_POST['username'];

        $sql = "SELECT * FROM User WHERE pwd = '$password' AND username = '$username'";
        $result = mysqli_query($conn, $sql); 

        if(mysqli_num_rows($result) > 0) {
            $_SESSION['user'] = $username;
            $_SESSION['loggedin'] = true;
            header("Location: landing.php");
        } else {
            echo "<p class='error'><i class='bx bxs-error'></i> Wrong Password or Username</p>";
        }
    }
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
                    <input type="password" placeholder="Enter Password" name="pwd" required>
                    <button name="submit" class="submit" type="submit">Login</button>
                    <label> 
                        <a href="index.php">Home</a>
                        <!--a href="landing.php"></a-->
                    </label>
                </div>

            </form>

        </body>
</html>