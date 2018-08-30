<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html"/>
<xsl:template match="/">
<h2>My Stock Data</h2>
<table border="1">
<xsl:for-each select="stockdata/Stock">
<tr bgcolor="#9acd32">
<tr>
<td style="text-align:left">Stock-id</td>
<td>
<xsl:value-of select="STOCK-id"/>
</td>
<td style="text-align:left">Industry</td>
<td>
<xsl:value-of select="INDUSTRY"/>
</td>
<td style="text-align:left">Name</td>
<td>
<xsl:value-of select="NAME"/>
</td>
</tr>
<tr>
<td style="text-align:left">Ticker</td>
<td>
<xsl:value-of select="Ticker"/>
</td>
<td style="text-align:left">Val-Date</td>
<td>
<xsl:value-of select="Val-Date"/>
</td>
<th style="text-align:left">Fair-Equity-Value</th>
<td>
<xsl:value-of select="Fair-Equity-Value"/>
</td>
</tr>
<tr>
<td style="text-align:left">Shares-Outstanding</td>
<td>
<xsl:value-of select="Shares-Outstanding"/>
</td>
<td style="text-align:left">Fair-Equity-Value-perShare</td>
<td>
<xsl:value-of select="Fair-Equity-Value-perShare"/>
</td>
<td style="text-align:left">Book-Value</td>
<td>
<xsl:value-of select="Book-Value"/>
</td>
</tr>
<tr>
<td style="text-align:left">Net-PPE-Operating-Leases</td>
<td>
<xsl:value-of select="Net-PPE-Operating-Leases"/>
</td>
<td style="text-align:left">Goodwill-Intangibles</td>
<td>
<xsl:value-of select="Goodwill-Intangibles"/>
</td>
<td style="text-align:left">Sales</td>
<td>
<xsl:value-of select="Sales"/>
</td>
</tr>
<tr>
<td style="text-align:left">Pre-Tax-margin</td>
<td>
<xsl:value-of select="Pre-Tax-margin"/>
</td>
<td style="text-align:left">Pre-Tax-cash-flow</td>
<td>
<xsl:value-of select="Pre-Tax-cash-flow"/>
</td>
<td style="text-align:left">Tax-Rate</td>
<td>
<xsl:value-of select="Tax-Rate"/>
</td>
</tr>
<tr>
<td style="text-align:left">Operating-Cash-Flow</td>
<td>
<xsl:value-of select="Operating-Cash-Flow"/>
</td>
<td style="text-align:left">Capital-Expenditures</td>
<td>
<xsl:value-of select="Capital-Expenditures"/>
</td>
<td style="text-align:left">Free-Cash-Flow</td>
<td>
<xsl:value-of select="Free-Cash-Flow"/>
</td>
</tr>
<tr>
<td style="text-align:left">Growth-Estimate</td>
<td>
<xsl:value-of select="Growth-Estimate"/>
</td>
<td style="text-align:left">Discount-Rate</td>
<td>
<xsl:value-of select="Discount-Rate"/>
</td>
<td style="text-align:left">ten-Year-Aggregate-Discounted-FCF</td>
<td>
<xsl:value-of select="ten-Year-Aggregate-Discounted-FCF"/>
</td>
</tr>
<tr>
<td style="text-align:left">Growth-Estimate-Beyond-10-Years</td>
<td>
<xsl:value-of select="Growth-Estimate-Beyond-10-Years"/>
</td>
<td style="text-align:left">Terminal-Value</td>
<td>
<xsl:value-of select="Terminal-Value"/>
</td>
<td style="text-align:left">Ratio1</td>
<td>
<xsl:value-of select="Ratio1"/>
</td>
</tr>
<tr>
<td style="text-align:left">Ratio2</td>
<td>
<xsl:value-of select="Ratio2"/>
</td>
<td style="text-align:left">Ratio3</td>
<td>
<xsl:value-of select="Ratio3"/>
</td>
<td>&nbsp;</td>
</tr>

</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>