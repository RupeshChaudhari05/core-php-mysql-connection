<?php
function OpenConn()
 {
 $dbhost = "YOUR_HOSTNAME";
 $dbuser = "YOUR_USERNAME";
 $dbpass = "YOUR_PASSWORD";
 $db = "YOUR_DATABASENAME";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn->error);
 
 return $conn;
 }
 
function CloseConn($conn)
 {
 $conn->close();
 }
   
?>
