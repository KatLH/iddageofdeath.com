<?php
include "include/db_connect.php";

$sql = "SELECT * FROM age_by_race_ethnicity";
$result = mysqli_query($connection, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $dd = $row['disability_type'];
    $nhw = $row['non_hispanic_white'];
    $nhb = $row['non_hispanic_black'];
    $h = $row['hispanic'];
    $nho = $row['non_hispanic_other'];

    $nhw = number_format((float) $nhw, 1, '.', '');
    $nhb = number_format((float) $nhb, 1, '.', '');
    $h = number_format((float) $h, 1, '.', '');
    $nho = number_format((float) $nho, 1, '.', '');


    echo "
      <div class='dataItem'>
        <h3>" . $dd . "</h3>
        <p class='dataCategory'>
          <span class='data'>" . $nhw . "</span>
          Non-Hispanic White
        </p>
        <p class='dataCategory'>
          <span class='data'>" . $nhb . "</span>
          Non-Hispanic Black
        </p>
        <p class='dataCategory'>
          <span class='data'>" . $h . "</span>
          Hispanic
        </p>
        <p class='dataCategory'>
          <span class='data'>" . $nho . "</span>
          Non-Hispanic Other
        </p>
      </div>";
  }
}
else
  echo "<p>Error loading data.</p>";

mysqli_close($connection);
?>
