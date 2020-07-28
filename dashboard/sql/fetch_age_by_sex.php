<?php
include "include/db_connect.php";

$sql = "SELECT * FROM age_by_sex";

$result = mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $dd = $row['disability_type'];
    $female = $row['female'];
    $male = $row['male'];

    $female = number_format((float) $female, 1, '.', '');
    $male = number_format((float) $male, 1, '.', '');

    echo "
      <div class='dataItem'>
        <h3>" . $dd . "</h3>
        <p class='dataCategory'>
          <span class='data'>" . $female . "</span>
          Female
        </p>
        <p class='dataCategory'>
          <span class='data'>" . $male . "</span>
          Male
        </p>
      </div>";
  }
} else {
  echo "<p>Error loading data.</p>";
}

mysqli_close($connection);
?>
