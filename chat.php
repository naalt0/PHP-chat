<?php 
  session_start();
  include ("config.php");
  
  if(isset($_SESSION['userID'])){
    header("location: login.php");
}

  $sql = "SELECT * FROM Message, User WHERE username = user1";
  $result = mysqli_query($conn, $sql);
  $check = mysqli_num_rows($result);

?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
     

        <div class="details">
        
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
        <input type="text" class="incoming_id" name="incoming_id" value="<?php 
        while($row = $result -> fetch_array()); 
        echo ""; ?>" hidden>

        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i>Send</button>
      </form>
    </section>
  </div>

</body>
</html>