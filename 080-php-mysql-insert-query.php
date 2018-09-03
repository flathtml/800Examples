<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flathtml";

$productNum = $_POST["productid"];
$name = $_POST["prodname"];
$category = $_POST["prodcategory"];
$price = $_POST["priceperunit"];
$qty = $_POST["prodqty"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO inventory (PROD_ID, PROD_NAME, PROD_CATEGORY, PROD_PRICE_PER_UNIT, PROD_QTY)
VALUES('$productNum', '$name', '$category', '$price', '$qty')";

$result = $conn->query($sql);
header('Location: 080-output-page.php');
$conn->close();
?> 
 