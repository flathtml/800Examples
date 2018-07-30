<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<body>
<table border="1">
<tr bgcolor="yellow">
<td>
Example Display Sorted XML Data
</td>
</tr>
</table>
<h2>My CD Collection</h2>
<table border="1">
<tr bgcolor="#9acd32">
<th style="text-align:left">Title</th>
<th style="text-align:left">Artist</th>
</tr>
 
<xsl:for-each select="//cd"> 
               <xsl:sort/> 
<tr>
<td>
<xsl:value-of select="title"/>
</td>
<td>
<xsl:value-of select="artist"/>
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>