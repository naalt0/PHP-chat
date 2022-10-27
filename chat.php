<?php 
  include ("config.php");

if(isset($_POST['submit'])) {

$username = $_POST['username'];  
$message = $_POST['message'];

$msg = "INSERT INTO Chatmessage (username, message) VALUES ('$username', '$message')";
mysqli_query($conn, $msg);

}

$sql = "SELECT username, message FROM Chatmessage";
$sqlresult = mysqli_query($conn, $sql);
$check = mysqli_num_rows($sqlresult);


while($row = $sqlresult->fetch_array()) {
  echo "<p>" . $row["username"] . "<br>" . $row["message"] . "</p>";
}

error_reporting(0);
 
$msg = "";
 
if (isset($_POST['upload'])) {
 
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = ".\localhost\." . $filename;
 
    $sql = "INSERT INTO Pics (filename) VALUES ('$filename')";
 
    mysqli_query($conn, $sql);
 
}
?>

<html>
  <head>
    <title>Chat</title>
    <link rel="stylesheet" href="chat.css">
  </head>
<body>
<div id="display-image">
    <?php
        $query = "SELECT * FROM Pics ";
        $result = mysqli_query($conn, $query);
 
        while ($data = mysqli_fetch_assoc($result)) {
    ?>
        <img src=".\localhost\.<?php echo $data['filename']; ?>">
 
    <?php
        }
    ?>
    </div>
<div id="content">
        <form method="POST" action="">
            <div class="form-group">
                <input class="form-control" type="file" name="uploadfile" value="" />
            </div>
            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="upload">UPLOAD</button>
            </div>
        </form>
    </div>
    

<form action="" method="POST">
  <div class="messages">
        from<input type="text" name="username"></input><br>
        message<input name="message"></input><br>
        <button name="submit" type="submit">Send</button>
  </div>
      </form>

</body>
</html>