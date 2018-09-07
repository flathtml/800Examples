<!DOCTYPE html>
<html>
<title>Display HTML code in a web page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <!//http://www.w3schools.com/w3css/4/w3.css !>
      <link rel="stylesheet" href="references/w3.css"> 
      
	  <!//http://www.w3schools.com/lib/codemirror.css !>
      <link rel="stylesheet" href="references/codemirror.css">
	  
      <!//http://www.w3schools.com/lib/codemirror.js !>
	  <script src="references/codemirror.js"></script>
	  
	  <!//https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css !>
      <link rel="stylesheet" href="references/bootstrap.min.css">
   
      <!//https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js !>
	  <script src="references/bootstrap.min.js"></script>
	  
	  <!//https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js !>
	  <script src="references/jquery.min.js"></script>
	 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/css?family=Playball|Righteous" rel="stylesheet">
<Style>
 .navbar .navbar-nav {
    display: inline-block;
    float: none;
}
 .navbar .navbar-collapse {
    text-align: left;
}
.makeup1 {
    font-weight: bold;
    color: #000000;
    border: 1px solid green;
}
 .makeup2 {
    border: 1px solid green;
}

 .footer {
    text-align: center;
}

 .padding {
    padding-left: 3%;
    padding-right: 3%;
    padding-top: 3%;
    padding-bottom: 3%;
    text-align: justify;
}
  
 .top {
    position: relative;
    background-color: #ffffff;
    height: 68px;
    padding-top: 20px;
    line-height: 50px;
    overflow: hidden;
    z-index: 1;
}
.w3-right {
    float: right!important}
.w3-wide {
    letter-spacing: 4px}
 .w3schools-logo {
    font-family: Righteous;
    text-decoration: none;
    line-height: 1;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 37px;
    letter-spacing: 3px;
    color: #555555;
    display: block;
    position: absolute;
    top: 17px;
    padding-left: 2px;
}
.w3schools-logo .dotcom {
    color: #4CAF50;
}
.w3schools-logo:hover {
    color: #555555;
	text-decoration: none;
}

@media (max-width: 992px) {
    .top {
    height: 100px;
}
 .top .w3schools-logo {
    position: relative;
    top: 0;
    width: 100%;
    text-align: center;
    margin: auto;
}
 .toptext {
    width: 100%;
    text-align: center;
}
 }

@media screen and (max-width: 600px) {
    .top {
    height: 68px;
}
 .toptext {
    display: none;
}
 }
 
</style>


<body class="w3-container">
<div class="container-fluid">
   <div class="top">
      <a class="w3schools-logo" href="index.html">FlatHTML<span class="dotcom">.com</span></a>
      <div class="w3-right  toptext w3-wide ">Responsive Web Development made easy</div>
   </div>
   
<div>&nbsp;</div>
<div class="row">
	<div class="col-md-3">&nbsp; </div>
	<div  align="center" class="col-md-6 shadow p-4 mb-4 border border-primary" style="background-color:pink">
		<b>Insert a record into inventory table</b>  
		<p>
<form action="080-php-mysql-insert-query.php" method="post">
<table class="main">
<tr>
<td>Product id (unique key)</td><td><input type="text" name="productid" required></td></tr>
<tr>
<td>Product Name</td><td><input type="text" name="prodname" required></td></tr>
<tr>
<td>Product Category</td><td><input type="text" name="prodcategory" required></td></tr>
<tr>
<td>Price Per Unit</td><td><input type="text" name="priceperunit" required></td></tr>
<tr>
<td>Product Quantity</td><td><input type="text" name="prodqty" required></td></tr>
<tr><td><input type="submit"></td></tr></table>
</form>
</p>

</div>
	<div class="col-md-3">&nbsp; </div>      
	<i>Following are the current records of inventory table &nbsp;</i>
	<b> NOTE : Product id column is a unique key.</b>
	<p>&nbsp;</p>
</div>         

<?php
// login to database
require '000-dblogin.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT PROD_ID, PROD_NAME, PROD_CATEGORY, PROD_PRICE_PER_UNIT, PROD_QTY FROM inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	echo "<table class='w3-table w3-striped w3-bordered'><tr class='w3-orange'><th>Product id</th><th>Name</th><th>Category</th><th>Price per Unit</th><th>Quantity</th></tr>";
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["PROD_ID"]. "</td><td>" . $row["PROD_NAME"] . "</td><td>" . $row["PROD_CATEGORY"] . "</td><td>" . $row["PROD_PRICE_PER_UNIT"] ."</td><td>" . $row["PROD_QTY"] . "</td></tr>";
	    }
	echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</div>
	<div class="col-md-3">&nbsp; </div>      
	<i>End of records</i>
	<p>&nbsp;</p>
</div>     

</body>
</html>
