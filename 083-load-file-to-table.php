<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flathtml";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "LOAD DATA INFILE '083-friendsdata.txt' INTO TABLE friends  FIELDS TERMINATED BY ',';";

$result = $conn->query($sql);

header('Location: 083-output-page.php');

$conn->close();
?> 