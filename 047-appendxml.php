<?php
$xmldoc = new DomDocument( '1.0' );
$xmldoc->preserveWhiteSpace = false;
$xmldoc->formatOutput = true;

$productNum = "2103";
$name = "AGB";
$category = "Movies";
$content = "NO";

if( $xml = file_get_contents( '047-append.xml') ) {
    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    // find the headercontent tag
    $root = $xmldoc->getElementsByTagName('headercontent')->item(0);

    // create the <product> tag
    $product = $xmldoc->createElement('product');
    $numAttribute = $xmldoc->createAttribute("num");
    $numAttribute->value = $productNum;
    $product->appendChild($numAttribute);

    // add the product tag before the first element in the <headercontent> tag
    $root->insertBefore( $product, $root->firstChild );

    // create other elements and add it to the <product> tag.
    $nameElement = $xmldoc->createElement('name');
    $product->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($name);
    $nameElement->appendChild($nameText);

    $categoryElement = $xmldoc->createElement('category');
    $product->appendChild($categoryElement);
    $categoryText = $xmldoc->createTextNode($category);
    $categoryElement->appendChild($categoryText);

    $availableElement = $xmldoc->createElement('available');
    $product->appendChild($availableElement);
    $availableAttribute = $xmldoc->createAttribute("content");
    $availableAttribute->value = $content;
    $availableElement->appendChild($availableAttribute);

    $xmldoc->save('047-append.xml');
	echo '<p>Record appended to 047-append.xml</p>';
	
	 
	 
	 
	 
}
?>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}
th,td {
  padding: 5px;
}
</style>
 

<button type="button" onclick="loadXMLDoc()">Display contents of 047-append.xml</button>
<br><br>
<table id="demo"></table>

<script>
function loadXMLDoc() {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      myFunction(this);
    }
  };
  xmlhttp.open("GET", "047-append.xml", true);
  xmlhttp.send();
}
function myFunction(xml) {
  var i;
  var r;
  var xmlDoc = xml.responseXML;
  var table="<tr><th>R.No</th><th>Product Num</th><th>Name</th><th>Category</th><th>Available</th></tr>";
  var x = xmlDoc.getElementsByTagName("product");
  var y = xmlDoc.getElementsByTagName("available");
  for (i = 0; i <x.length; i++) {
    r = i+1;	  
    table += "<tr><td>"   + r + "</td><td>"  +
	x[i].getAttribute('num')+
    "</td><td>" +
    x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +
    "</td><td>" +
	x[i].getElementsByTagName("category")[0].childNodes[0].nodeValue +
    "</td><td>" +
    y[i].getAttribute('content') +
    "</td></tr>";
  }
  document.getElementById("demo").innerHTML = table;
 
}
</script>