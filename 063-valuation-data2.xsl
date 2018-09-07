<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:output method="html"/>
<xsl:template match="/">
<h2>My Stock Data..</h2>
<h2><a href='063-valuation.xlsx'>Click here</a> for valuation excel template.</h2>

<table border="1">
 <xsl:for-each select="stockdata/Stock">
 <tr style="text-align:center" bgcolor="#DFA5F7">
<td colspan="6">
<xsl:value-of select="NAME"/>
</td>
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">STOCK-ID:</td>
<td>
<xsl:value-of select="STOCK-id"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Industry</td>
<td>
<xsl:value-of select="INDUSTRY"/>
</td>
<td style="text-align:left"></td>
<td>
 
</td>
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">Ticker</td>
<td>
<xsl:value-of select="Ticker"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Val-Date</td>
<td>
<xsl:value-of select="Val-Date"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Fair-Equity-Value (P) = (A - B - C + M + O)<i>(millions)</i></td>
<td bgcolor="#E0FB31">
<xsl:value-of select="Fair-Equity-Value"/>
</td>
</tr>
 <tr>
 <td bgcolor="#E6E0DF" style="text-align:left">Book-Value (A)</td>
<td>
<xsl:value-of select="Book-Value"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Shares-Outstanding (Q)<i>(millions)</i></td>
<td>
<xsl:value-of select="Shares-Outstanding"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Fair-Equity-Value-perShare (P / Q)</td>
<td bgcolor="#31F8FB">
<xsl:value-of select="Fair-Equity-Value-perShare"/>
</td>
 
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">Net-PPE-Operating-Leases (B)</td>
<td>
<xsl:value-of select="Net-PPE-Operating-Leases"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Goodwill and Intangibles (C)</td>
<td>
<xsl:value-of select="Goodwill-Intangibles"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Sales (D)</td>
<td>
<xsl:value-of select="Sales"/>
</td>
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">Pre-Tax-margin (E)</td>
<td>
<xsl:value-of select="Pre-Tax-margin"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Pre-Tax-cash-flow (F) = (D x E)</td>
<td>
<xsl:value-of select="Pre-Tax-cash-flow"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Tax-Rate (G)</td>
<td>
<xsl:value-of select="Tax-Rate"/>
</td>
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">Operating-Cash-Flow (H) = F x (1 - G)</td>
<td>
<xsl:value-of select="Operating-Cash-Flow"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Capital-Expenditures (I)</td>
<td>
<xsl:value-of select="Capital-Expenditures"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Free-Cash-Flow (J) = (H - I)</td>
<td>
<xsl:value-of select="Free-Cash-Flow"/>
</td>
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">Growth-Estimate (K)</td>
<td>
<xsl:value-of select="Growth-Estimate"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Discount-Rate (L)</td>
<td>
<xsl:value-of select="Discount-Rate"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Ten-Year-Aggregate-Discounted-FCF (M)</td>
<td>
<xsl:value-of select="ten-Year-Aggregate-Discounted-FCF"/>
</td>
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">Growth-Estimate-Beyond-10-Years (N)</td>
<td>
<xsl:value-of select="Growth-Estimate-Beyond-10-Years"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Terminal-Value (O)</td>
<td>
<xsl:value-of select="Terminal-Value"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Ratio1 = Free-Cash-Flow (J) / {Net-PPE-Operating-Leases (B) + Goodwill and Intangibles (C)}</td>
<td>
<xsl:value-of select="Ratio1"/>
</td>
</tr>
<tr>
<td bgcolor="#E6E0DF" style="text-align:left">Ratio2 = Fair-Equity-Value (P) / Free-Cash-Flow (J)</td>
<td>
<xsl:value-of select="Ratio2"/>
</td>
<td bgcolor="#E6E0DF" style="text-align:left">Ratio3 = Capital-Expenditures (I) / Operating-Cash-Flow (H)</td>
<td>
<xsl:value-of select="Ratio3"/>
</td>
<td></td>
</tr>
 </xsl:for-each>
</table>
</xsl:template>
</xsl:stylesheet>