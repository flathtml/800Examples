<?php
$xmldoc = new DomDocument( '1.0' );
$xmldoc->preserveWhiteSpace = false;
$xmldoc->formatOutput = true;

$productNum = $_POST["productNum"];
$name = $_POST["name"];
$category = $_POST["category"];
$content = $_POST["content"];

if( $xml = file_get_contents( '076-append.xml') ) {
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

    $xmldoc->save('076-append.xml');
	header('Location: 076-output-page.html');
 }
?>
 