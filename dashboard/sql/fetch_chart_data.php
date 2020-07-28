<?php
// Fetches data from database and stores it JSON format.
function fetchJSONData($col) {
  include "include/db_connect.php";
  $sql = "SELECT year, ".$col." FROM age_by_year";
  $result = mysqli_query($connection, $sql);
  $data = array();

  if(mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $data[] = array(
        "x" => intval($row["year"]),
        "y" => number_format((float) $row[$col] , 1, '.', '')
      );
    }
  }
  else
    echo "0 results";

  mysqli_close($connection);
  return json_encode($data);
}

// Writes JSON data to file.
function writeToFile($filename, $data) {
  $file = fopen($filename, "w") or die("Error: Unable to open file.");
  fwrite($file, $data);
  fclose($file);
}

writeToFile("json/id_data.json", fetchJSONData("intellectual_disability"));
writeToFile("json/cp_data.json", fetchJSONData("cerebral_palsy"));
writeToFile("json/ds_data.json", fetchJSONData("down_syndrome"));
writeToFile("json/ordd_data.json", fetchJSONData("other_rare_developmental_disability"));
writeToFile("json/no_idd_data.json", fetchJSONData("no_idd"));
?>
