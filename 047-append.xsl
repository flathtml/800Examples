<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<html>
<head>
<style>
table, td {
    border: 1px solid black;
    border-collapse: collapse;
}
td {
    padding: 15px;
}
</style>
</head>
<body>

<table id="mytable2" style="width:40%">
 
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