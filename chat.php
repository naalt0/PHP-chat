<?php 
  session_start();
  include_once "config.php";
  if(isset($_SESSION['userID'])){
    header("location: login.php");
  }
?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['userID']);
          $sql = mysqli_query($conn, "SELECT * FROM User WHERE userID = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: landing.php");
          }
        ?>

        <div class="details">
          <span><?php echo $row['username'] ?> </span>
        
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

</body>
</html>
