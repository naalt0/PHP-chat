<?php

session_start();

require_once "config.php";
 
$username = $password = "";
$username_err = $password_err = $login_err = "";
 
if($_SERVER["REQUEST_METHOD"] == "POST"){
 
    if(empty($username_err) && empty($password_err)){
        
        $sql = "SELECT id, username, password FROM users WHERE username = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            
            mysqli_stmt_bind_param($stmt, "s", $param_username);
            
            
            $param_username = $username;
            
            
            if(mysqli_stmt_execute($stmt)){
                
                mysqli_stmt_store_result($stmt);
                
                
                if(mysqli_stmt_num_rows($stmt) == 1){                    
                    
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt)){
                        if(password_verify($password, $hashed_password)){
                            
                            session_start();
                            
                           
                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;                            
                            
                            
                            header("location: landing.php");
                        } else{
                            
                            $login_err = header(location: error.php");
                        }
                    }
                }

            
            mysqli_stmt_close($stmt);
        }
    }
    
    
    mysqli_close($link);
}
?>


<html>
    <head>
        <meta charset utf-8>
        <title>Login</title>
        <link rel="stylesheet" href="login.css">
        <script src="script.js"></script>
    </head>
        <body>
            <form>
                <div class="container">
                    <input type="text" placeholder="Enter Username" name="uname" required>
                    <input type="password" placeholder="Enter Password" name="psw" required>
                    <button class="submit" type="submit">Login</button>
                    <label> 

                        <a href="index.php">Home</a>
                    </label>
                </div>

            </form>

        </body>
</html>