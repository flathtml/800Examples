<!DOCTYPE html>
<html>
<title>Merge XML files : Read two XML files , merge them to create a third output XML file</title>
<head>
<!-- This code Reads the input XML file, processes the input XML and copies the input XML file to an output XML file-->
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
 
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
</head> 
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
		<h2>Read two XML files , merge them to create a third output XML file</h2>
		<a href="051-CD1.xml"target=_blank">Input File#1 : 051-CD1.xml</a> &nbsp;&nbsp;
		<a href="051-CD2.xml"target=_blank">Input File#2 : 051-CD2.xml</a> <br>
		<a href="051-output.xml"target=_blank">Output File : 051-output.xml</a>
</div>
	<div class="col-md-3">&nbsp; </div>      
</div>  
<?php
//STEP-1 : Create the Output file and insert a dummy record

$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
    <CATALOG>
    </CATALOG>';

$dom = new DOMDocument;
      
$dom->loadXML($xmlString);

//Save XML as a file
$dom->save('051-output.xml');
echo '<p>1. Output File  051-output.xml created and root node added</p>';
?>

<!-- STEP-2 JavaScript to display the Input File after its processed-->

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "051-output.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>Title</th><th>Artist</th><th>Country</th><th>Company</th><th>Price</th><th>Year</th></tr>";
  var x = xmlDoc.getElementsByTagName("CD");
  for (i = 0; i <x.length; i++) { 
  
 
	
    table += "<tr><td>" +
    x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("ARTIST")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("COUNTRY")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("COMPANY")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("PRICE")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("YEAR")[0].childNodes[0].nodeValue +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
}
</script>

<?php

//STEP-3 : Append the Output file with the data of input file#1

    $cdinput = simplexml_load_file('051-CD1.xml');
	
	foreach ($cdinput as $cdoutput):
	
        $title=$cdoutput->TITLE;
		$artist=$cdoutput->ARTIST;
        $country=$cdoutput->COUNTRY;
		$company=$cdoutput->COMPANY;
		$price=$cdoutput->PRICE;
		$year=$cdoutput->YEAR;
		
		
		$xmldoc = new DomDocument( '1.0' );
		$xmldoc->preserveWhiteSpace = false;
		$xmldoc->formatOutput = true;

		if( $xml = file_get_contents( '051-output.xml') ) {
		
		$xmldoc->loadXML( $xml, LIBXML_NOBLANKS );
	 
		// find the CATALOG tag
		$root = $xmldoc->getElementsByTagName('CATALOG')->item(0);
	
		
		// create the <CD> tag
		$CD = $xmldoc->createElement('CD');
	
		// add the CD tag before the first element in the <CATALOG> tag
		$root->insertBefore( $CD, $root->firstChild );
	
		// create other elements and add it to the <CD> tag.
    
		$titleElement = $xmldoc->createElement('TITLE');
		$CD->appendChild($titleElement);
		$titleText = $xmldoc->createTextNode($title);
		$titleElement->appendChild($titleText);
	
		$artistElement = $xmldoc->createElement('ARTIST');
		$CD->appendChild($artistElement);
		$artistText = $xmldoc->createTextNode($artist);
		$artistElement->appendChild($artistText);
	
		$countryElement = $xmldoc->createElement('COUNTRY');
		$CD->appendChild($countryElement);
		$countryText = $xmldoc->createTextNode($country);
		$countryElement->appendChild($countryText);
	
		$companyElement = $xmldoc->createElement('COMPANY');
		$CD->appendChild($companyElement);
		$companyText = $xmldoc->createTextNode($company);
		$companyElement->appendChild($companyText);
	
		$priceElement = $xmldoc->createElement('PRICE');
		$CD->appendChild($priceElement);
		$priceText = $xmldoc->createTextNode($price);
		$priceElement->appendChild($priceText);
	
		$yearElement = $xmldoc->createElement('YEAR');
		$CD->appendChild($yearElement);
		$yearText = $xmldoc->createTextNode($year);
		$yearElement->appendChild($yearText);
		
		$xmldoc->save('051-output.xml');
	 	
	}
		
	endforeach;
	 
	//STEP-4 : Append the Output file with the data of input file#2

    $cdinput = simplexml_load_file('051-CD2.xml');
	
	foreach ($cdinput as $cdoutput):
	
        $title=$cdoutput->TITLE;
		$artist=$cdoutput->ARTIST;
        $country=$cdoutput->COUNTRY;
		$company=$cdoutput->COMPANY;
		$price=$cdoutput->PRICE;
		$year=$cdoutput->YEAR;
		
		
		$xmldoc = new DomDocument( '1.0' );
		$xmldoc->preserveWhiteSpace = false;
		$xmldoc->formatOutput = true;

		if( $xml = file_get_contents( '051-output.xml') ) {
		
		$xmldoc->loadXML( $xml, LIBXML_NOBLANKS );
	 
		// find the CATALOG tag
		$root = $xmldoc->getElementsByTagName('CATALOG')->item(0);
	
		
		// create the <CD> tag
		$CD = $xmldoc->createElement('CD');
	
		// add the CD tag before the first element in the <CATALOG> tag
		$root->insertBefore( $CD, $root->firstChild );
	
		// create other elements and add it to the <CD> tag.
    
		$titleElement = $xmldoc->createElement('TITLE');
		$CD->appendChild($titleElement);
		$titleText = $xmldoc->createTextNode($title);
		$titleElement->appendChild($titleText);
	
		$artistElement = $xmldoc->createElement('ARTIST');
		$CD->appendChild($artistElement);
		$artistText = $xmldoc->createTextNode($artist);
		$artistElement->appendChild($artistText);
	
		$countryElement = $xmldoc->createElement('COUNTRY');
		$CD->appendChild($countryElement);
		$countryText = $xmldoc->createTextNode($country);
		$countryElement->appendChild($countryText);
	
		$companyElement = $xmldoc->createElement('COMPANY');
		$CD->appendChild($companyElement);
		$companyText = $xmldoc->createTextNode($company);
		$companyElement->appendChild($companyText);
	
		$priceElement = $xmldoc->createElement('PRICE');
		$CD->appendChild($priceElement);
		$priceText = $xmldoc->createTextNode($price);
		$priceElement->appendChild($priceText);
	
		$yearElement = $xmldoc->createElement('YEAR');
		$CD->appendChild($yearElement);
		$yearText = $xmldoc->createTextNode($year);
		$yearElement->appendChild($yearText);
		
		$xmldoc->save('051-output.xml');
	 	
	}
		
	endforeach;
	 
 
?>
<p>2. Details of my CD collection are updated to XML file &nbsp;<a href="051-output.xml"target=_blank">Output File : 051-output.xml</a></p>

<button type="button" onclick="loadXMLDoc()">Display the output file in Tabular Format</button>
<br><br>
<table id="demo"></table>
</body>
</html>