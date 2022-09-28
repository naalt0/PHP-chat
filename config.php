<?php
define('DB_SERVER', 'hyvis.mysql.database.azure.com');
define('DB_USERNAME', 'db_projekti');
define('DB_PASSWORD', 'Sivyh2022');
define('DB_NAME', 'chat');
 
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>