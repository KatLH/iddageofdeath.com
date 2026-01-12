<?php
/* localhost credentials
-------------------------------------------------- */
/* $username = "root";
$password = "";
$dbname = "id_dashboard"; */

/* BlueHost credentials
-------------------------------------------------- */
$username = "";
$password = "";
$dbname = "";


$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());

if (!$connection)
  echo "Could not connect.<br/>Error: " . die(mysql_error());
// else
//   echo "Connected successfully<br/>";
?>
