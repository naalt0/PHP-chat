<?php
session_start();
include("config.php");

if(isset($_SESSION['userID'])){
    header("location: login.php");
}

$sql = mysqli_query($conn, "SELECT * FROM User WHERE userID = {$_SESSION['userID']}");
if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
}
?>

<html>
    <head>
        <title>Contacts</title>
    </head>
    <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <div class="details">
            <span><?php echo $row['username'] ?></span>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['userID']; ?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
      </div>
      <div class="users-list">

  
      </div>
    </section>
  </div>

</body>
</html>