<?xml version="1.0"?> 
<xsl:stylesheet version="1.0" 
xmlns:xsl="http://www.w3.org/1999/XSL/Transform"> 

    <xsl:output method="text" indent="yes"/> 

    <xsl:template match="PLANET"> 
          <xsl:value-of select="NAME"/> 
          <xsl:text>'s mass is </xsl:text> 
          <xsl:value-of select="MASS"/> 
          <xsl:text> Earth masses. Its radius is </xsl:text> 
          <xsl:value-of select="RADIUS"/> 
          <xsl:text> miles. Its day is </xsl:text> 
          <xsl:value-of select="DAY"/> 
          <xsl:text> Earth days long.</xsl:text> 
    </xsl:template> 

</xsl:stylesheet> 