<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="/">
<style>
table, td, th {  
 
  text-align: left;
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 70%;
   
}
th {
background-color: #72D82C;
}
tr:nth-child(odd) {background-color: #B0FF7A;}

th, td {
  padding: 10px;
}
 
</style>
<h2>10 Year Financial Data :</h2><i>All Figures in $ millions Except Diluted EPS</i>
<table align="center">
<tr bgcolor="#9acd32">
<th style="text-align:left">Income Stmt</th>
<th style="text-align:left">2018</th>
<th style="text-align:left">2017</th>
<th style="text-align:left">2016</th>
<th style="text-align:left">2015</th>
<th style="text-align:left">2014</th>
<th style="text-align:left">2013</th>
<th style="text-align:left">2012</th>
<th style="text-align:left">2011</th>
<th style="text-align:left">2010</th>
<th style="text-align:left">2009</th>
</tr>
<xsl:for-each select="ROOT/line">
<tr>
<td>
<xsl:value-of select="INCOME"/>
</td>
<td>
<xsl:value-of select="YR2018"/>
</td>
<td>
<xsl:value-of select="YR2017"/>
</td>
<td>
<xsl:value-of select="YR2016"/>
</td>
<td>
<xsl:value-of select="YR2015"/>
</td>
<td>
<xsl:value-of select="YR2014"/>
</td>
<td>
<xsl:value-of select="YR2013"/>
</td>
<td>
<xsl:value-of select="YR2012"/>
</td>
<td>
<xsl:value-of select="YR2011"/>
</td>
<td>
<xsl:value-of select="YR2010"/>
</td>
<td>
<xsl:value-of select="YR2009"/>
</td>
</tr>
</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>