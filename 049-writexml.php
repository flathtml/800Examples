
<?php
$xmlString = '<?xml version="1.0" encoding="UTF-8"?>
    <urlset 
	xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
	xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" 
	xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" 
	xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
        <url>
            <loc>http://www.codexworld.com</loc>
            <lastmod>2016-07-04T07:46:18+00:00</lastmod>
            <changefreq>always</changefreq>
            <priority>1.00</priority>
        </url>
    </urlset>';

$dom = new DOMDocument;
 
$dom->loadXML($xmlString);

//Save XML as a file
$dom->save('049-write.xml');
echo '<p>File 049-write.xml written</p>';
?>