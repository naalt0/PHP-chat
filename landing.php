<?php
session_start();
include("config.php");

if(isset($_SESSION['contactID'])){
    header("location: login.php");
}

$sql = mysqli_query($conn, "SELECT * FROM Contact WHERE user1 = {$_SESSION['contactID']}");
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
            <span><?php echo $row['user1'] ?></span>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row['user1']; ?>" class="logout">Logout</a>
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