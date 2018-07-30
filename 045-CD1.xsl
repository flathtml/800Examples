<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>
<h2>My CD Collection</h2>
<table id="mytable1" style="width:40%">
 
<tr bgcolor="#9acd32">
<th style="text-align:center">Title</th>
<th style="text-align:center">Artist</th>
</tr>
<xsl:for-each select="CATALOG/CD">
<tr>
<td width="50%">
<xsl:value-of select="TITLE"/>
</td>
<td width="50%">
<xsl:value-of select="ARTIST"/>
</td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>