<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "car";

// $servername = "localhost";
// $username = "id20438900_car_test";
// $password = "Ahmedabad@206";
// $dbname = "id20438900_car";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>