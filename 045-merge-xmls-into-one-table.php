<?php
echo 'This Example Merges the output of 2 XML files into 1 Table';
echo ' NOTE : If transformToXML does not work, then ensure that php.ini in the php folder of your Xamp installation';
echo 'has the following dll uncommented extension=php_xsl.dll';

// Load XML file#1
$xml = new DOMDocument;
$xml->load('045-CD1.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('045-CD1.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);

// Load XML file#2
$xml = new DOMDocument;
$xml->load('045-CD2.xml');

// Load XSL file
$xsl = new DOMDocument;
$xsl->load('045-CD2.xsl');

// Configure the transformer
$proc = new XSLTProcessor;

// Attach the xsl rules
$proc->importStyleSheet($xsl);

echo $proc->transformToXML($xml);
?>