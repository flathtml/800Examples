<?php
$xmldoc = new DomDocument( '1.0' );
$xmldoc->preserveWhiteSpace = false;
$xmldoc->formatOutput = true;
 

$orderid			= $_POST["orderid"];
$custname			= $_POST["custname"];
$orderdt			= $_POST["orderdt"];
$ordertime			= $_POST["ordertime"];
$orderTotal			= $_POST["orderTotal"];
$quantityCappucino  = $_POST["quantityCappucino"];
$costCappucino      = $_POST["costCappucino"];
$quantityEspresso	= $_POST["quantityEspresso"];
$costEspresso       = $_POST["costEspresso"];
$quantityLatte		= $_POST["quantityLatte"];
$costLatte          = $_POST["costLatte"];
$quantityIced		= $_POST["quantityIced"];
$costIced           = $_POST["costIced"];
$telnum				= $_POST["telnum"];
$email				= $_POST["email"];
$straddr            = $_POST["straddr"];
$aptnum             = $_POST["aptnum"];
$city               = $_POST["city"];
$state              = $_POST["state"];
$zip                = $_POST["zip"];
 

if( $xml = file_get_contents( '209-pizza-order-append.xml') ) {
    $xmldoc->loadXML( $xml, LIBXML_NOBLANKS );

    // find the headercontent tag
    $root = $xmldoc->getElementsByTagName('headercontent')->item(0);

    // create the <ordernum> tag
    $order = $xmldoc->createElement('orderid');
    $numAttribute = $xmldoc->createAttribute("num");
    $numAttribute->value = $orderid;
    $order->appendChild($numAttribute);

    // add the product tag before the first element in the <headercontent> tag
    $root->insertBefore( $order, $root->firstChild );

    // create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('custname');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($custname);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('ordertotal');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($orderTotal);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('orderdate');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($orderdt);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('ordertime');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($ordertime);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('cappucino');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($quantityCappucino);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('capcost');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($costCappucino);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('espresso');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($quantityEspresso);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('espcost');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($costEspresso);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('latte');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($quantityLatte);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('latcost');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($costLatte);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('iced');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($quantityIced);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('icecost');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($costIced);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('tel');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($telnum);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('email');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($email);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('street');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($straddr);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('aptnum');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($aptnum);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('city');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($city);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('state');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($state);
    $nameElement->appendChild($nameText);
	
	// create other elements and add it to the <order> tag.
    $nameElement = $xmldoc->createElement('zip');
    $order->appendChild($nameElement);
    $nameText = $xmldoc->createTextNode($zip);
    $nameElement->appendChild($nameText);
	

    $xmldoc->save('209-pizza-order-append.xml');
	header('Location: 209-output-page.html');
 }
?>
 