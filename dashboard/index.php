<?php session_start(); ?>

<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Dashboard</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/favicon.ico" type="image/x-icon">
  <link rel="icon" href="assets/favicon.ico" type="image/x-icon">

  <!-- Stylesheets -->
  <link href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css" type="text/css">
</head>

<body>
  <?php

  if (isset($_SESSION['loggedin']))
    include "include/dashboard.php";
  else
    include "include/dashboard_login.php";
    
  ?>

  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
          crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js" type="text/javascript"></script>
  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
  <script src="js/charts.js" type="text/javascript"></script>
  <script src="js/main.js" type="text/javascript"></script>
</body>

</html>
