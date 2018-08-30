<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<h2>My CD Collection</h2>
<table id="tblexportData" class="table">
<thead>
<tr bgcolor="#9acd32">
<th style="text-align:left">Title</th>
<th style="text-align:left">Artist</th>
</tr>
</thead>
  <tbody>
<xsl:for-each select="catalog/cd">
<tr>
<td>
<xsl:value-of select="title"/>
</td>
<td>
<xsl:value-of select="artist"/>
</td>
</tr>
</xsl:for-each>
</tbody>
</table>
</xsl:template>
</xsl:stylesheet>