<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
<xsl:template match="catalog">
<html>
<body>
<table border="1">
<tr bgcolor="yellow">
<td>
Example Display Sorted XML Data
</td>
</tr>
</table>
<h2>My CD Collection sorted by Price and Artist</h2>
<table border="1">
<tr bgcolor="#9acd32">
<th style="text-align:left">Title</th>
<th style="text-align:left">Artist</th>
<th style="text-align:left">Price</th>
</tr>
 
<xsl:apply-templates> 
                       
						<xsl:sort  data-type="number" order="ascending" select="price"/> 
						<xsl:sort  order="ascending" select="artist"/> 
						
                    </xsl:apply-templates> 
					</table>
</body>
</html>
</xsl:template>
 <xsl:template match="cd"> 
        <tr> 
            <td><xsl:apply-templates select="title"/></td> 
            <td><xsl:apply-templates select="artist"/></td> 
            <td><xsl:apply-templates select="price"/></td> 
             
        </tr> 
    </xsl:template> 
</xsl:stylesheet>