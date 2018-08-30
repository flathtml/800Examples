<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html"/>
<xsl:template match="/">
<h2>My Stock Data</h2>
<table border="1">
<tr bgcolor="#9acd32">
<th style="text-align:left">Stock-id..</th>
<th style="text-align:left">Industry</th>
<th style="text-align:left">Name</th>
<th style="text-align:left">Ticker</th>
<th style="text-align:left">Val-Date</th>
<th style="text-align:left">Fair-Equity-Value</th>
<th style="text-align:left">Shares-Outstanding</th>
<th style="text-align:left">Fair-Equity-Value-perShare</th>
<th style="text-align:left">Book-Value</th>
<th style="text-align:left">Net-PPE-Operating-Leases</th>
<th style="text-align:left">Goodwill-Intangibles</th>
<th style="text-align:left">Sales</th>
<th style="text-align:left">Pre-Tax-margin</th>
<th style="text-align:left">Pre-Tax-cash-flow</th>
<th style="text-align:left">Tax-Rate</th>
<th style="text-align:left">Operating-Cash-Flow</th>
<th style="text-align:left">Capital-Expenditures</th>
<th style="text-align:left">Free-Cash-Flow</th>
<th style="text-align:left">Growth-Estimate</th>
<th style="text-align:left">Discount-Rate</th>
<th style="text-align:left">ten-Year-Aggregate-Discounted-FCF</th>
<th style="text-align:left">Growth-Estimate-Beyond-10-Years</th>
<th style="text-align:left">Terminal-Value</th>
<th style="text-align:left">Ratio1</th>
<th style="text-align:left">Ratio2</th>
<th style="text-align:left">Ratio3</th>
</tr>
<xsl:for-each select="stockdata/Stock">
<tr>
<td>
<xsl:value-of select="STOCK-id"/>
</td>
<td>
<xsl:value-of select="INDUSTRY"/>
</td>
<td>
<xsl:value-of select="NAME"/>
</td>
<td>
<xsl:value-of select="Ticker"/>
</td>
<td>
<xsl:value-of select="Val-Date"/>
</td>
<td>
<xsl:value-of select="Fair-Equity-Value"/>
</td>
<td>
<xsl:value-of select="Shares-Outstanding"/>
</td>
<td>
<xsl:value-of select="Fair-Equity-Value-perShare"/>
</td>
<td>
<xsl:value-of select="Book-Value"/>
</td>
<td>
<xsl:value-of select="Net-PPE-Operating-Leases"/>
</td>
<td>
<xsl:value-of select="Goodwill-Intangibles"/>
</td>
<td>
<xsl:value-of select="Sales"/>
</td>
<td>
<xsl:value-of select="Pre-Tax-margin"/>
</td>
<td>
<xsl:value-of select="Pre-Tax-cash-flow"/>
</td>
<td>
<xsl:value-of select="Tax-Rate"/>
</td>
<td>
<xsl:value-of select="Operating-Cash-Flow"/>
</td>
<td>
<xsl:value-of select="Capital-Expenditures"/>
</td>
<td>
<xsl:value-of select="Free-Cash-Flow"/>
</td>
<td>
<xsl:value-of select="Growth-Estimate"/>
</td>
<td>
<xsl:value-of select="Discount-Rate"/>
</td>
<td>
<xsl:value-of select="ten-Year-Aggregate-Discounted-FCF"/>
</td>
<td>
<xsl:value-of select="Growth-Estimate-Beyond-10-Years"/>
</td>
<td>
<xsl:value-of select="Terminal-Value"/>
</td>
<td>
<xsl:value-of select="Ratio1"/>
</td>
<td>
<xsl:value-of select="Ratio2"/>
</td>
<td>
<xsl:value-of select="Ratio3"/>
</td>
</tr>
</xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>