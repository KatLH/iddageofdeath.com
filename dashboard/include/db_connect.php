<?php
/* localhost credentials
-------------------------------------------------- */
/* $username = "root";
$password = "";
$dbname = "id_dashboard"; */

/* BlueHost credentials
-------------------------------------------------- */
$username = "vacovido_root";
$password = "nE3R5&!*R9Lj";
$dbname = "vacovido_idd_age_of_death";


$connection = mysqli_connect("localhost" , "$username" , "$password", "$dbname") or die(mysql_error());

if (!$connection)
  echo "Could not connect.<br/>Error: " . die(mysql_error());
// else
//   echo "Connected successfully<br/>";
?>
