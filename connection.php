<?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "id16135060_my_banking1";
 $dbpass = "W=6oZi!#Bh6#ucbH";
 $db = "id16135060_my_banking";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
{
  $conn -> close();
  }
    ?>