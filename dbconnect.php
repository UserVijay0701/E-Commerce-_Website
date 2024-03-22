<?php

$connect = mysqli_connect("localhost", "root", "", "user_behaviour");

if (!$connect)
 {
  
  die("Connection failed: " . mysqli_connect_error());

}

?>