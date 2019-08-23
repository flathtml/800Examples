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
 
  

 <table align="center">
<tr bgcolor="#9acd32">
<td colspan="5">Investment Simulation Table :<i>Assumes you invested $1,000 each year in this stock</i></td>
</tr>
<tr>
<th style="text-align:left">YEAR</th>
<th style="text-align:left">STOCK PRICE</th>
<th style="text-align:left">YOY GROWTH</th>
<th style="text-align:left">AMOUNT INVESTED</th>
<th style="text-align:left">INVESTMENT ACCOUNT</th>

</tr>
<xsl:for-each select="ROOT/line">
<tr>
<td>
<xsl:value-of select="YEAR"/>
</td>
<td>
<xsl:value-of select="STOCK"/>
</td>
<td>
<xsl:value-of select="YOY"/>
</td>
<td>
<xsl:value-of select="AMT"/>
</td>
<td>
<xsl:value-of select="ACCT"/>
</td>
</tr>
</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>