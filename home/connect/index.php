<?php
$servername = "localhost";
$username = "id12623298_tdtrieu";
$password = "tdtrieu@123";
$dbname = "id12623298_db_rs_test_1";

// Create connection
$con=mysqli_connect($servername,$username,$password,$dbname);
 
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
 
// Select all of our stocks from table 'stock_tracker'
$sql = "SELECT first.userCd,first.latitude,first.longitude, first.serialNumber
FROM (SELECT userCd, MAX(serialNumber) AS max_serial
FROM tb_data_location 
GROUP BY userCd) AS max
JOIN tb_data_location AS first ON max.userCd = first.userCd and max.max_serial = first.serialNumber";
 
// Confirm there are results
if ($result = mysqli_query($con, $sql))
{
 // We have results, create an array to hold the results
        // and an array to hold the data
 $resultArray = array();
 $tempArray = array();
 
 // Loop through each result
 while($row = $result->fetch_object())
 {
 // Add each result into the results array
 $tempArray = $row;
     array_push($resultArray, $tempArray);
 }
 
 // Encode the array to JSON and output the results
 echo json_encode($resultArray);
}
 
// Close connections
mysqli_close($con);
?>