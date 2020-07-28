<?php
	session_start();
  
	include "../../include/db_connect.php";

	$user = $_POST["username"];
	$pass = $_POST["password"];
	$sql = "SELECT * FROM users WHERE username = '".$user."' and password = '".$pass."' LIMIT 1";
	$result = mysqli_query($connection, $sql);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_row($result);
    $_SESSION['loggedin'] = true;
    header("Location: https://iddageofdeath.com/");
	} else {
    echo "<br>User not found. Please try again.<br>";
    echo "<br><button><a href='https://iddageofdeath.com/'>Return to Dashboard Login</a></button>";
    die(mysqli_error($connection));
  }
    
	mysqli_close($connection);
 ?>
