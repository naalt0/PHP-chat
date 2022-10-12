<?php
require("config.php");

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "INSERT INTO User (pwd, username) VALUES ('$password', '$username')";
    mysqli_query($conn, $sql);
}
$check_dublicate = "SELECT (username) FROM User WHERE (username) = '$username' ";

$result = mysqli_query($conn, $check_dublicate);

$count = mysqli_num_rows($result);

if($count < 0){
    echo "<h1>Already in use. Please use another user name!</h1>";
    return false;
}

$conn -> close();
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