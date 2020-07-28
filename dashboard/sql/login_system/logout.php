<?php
session_start();
if(isset($_SESSION['loggedin'])) {
    unset($_SESSION['loggedin']);
    header("Location: https://iddageofdeath.com/");
}
else {
    $_SESSION['loggedin'] = false;
	header("Location: https://iddageofdeath.com/");
}
?>
