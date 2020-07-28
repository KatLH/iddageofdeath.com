<?php
include "include/db_connect.php";

header('Content-Type: text/csv; charset=utf-8');  
header('Content-Disposition: attachment; filename=csv/data.csv');  

$output = fopen("php://output", "w");  
fputcsv($output, array('ID', 'disability_type', 'non_hispanic_white', 'non_hispanic_black', 'hispanic', 'non_hispanic_other'));  

$sql = "SELECT * from age_by_race_ethnicity ORDER BY id DESC";  
$result = mysqli_query($connection, $sql);  
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
  while ($row = mysqli_fetch_assoc($result)) {  
    fputcsv($output, $row);  
  }  
}

fclose($output);  

?>
