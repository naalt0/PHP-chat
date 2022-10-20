<?php 
  session_start();
  include ("config.php");
  
  if(isset($_SESSION['userID'])){
    header("location: login.php");
}

  $sql = "SELECT username FROM User;
  $result = $conn->$query($sql);

  if()

?>

<body>


</body>
</html>