<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
     version="1.0">
<!-- squareAsHTMLJS1.xml: create an HTML document with JavaScript that
     interactively computes the square of each "number" element read from 
     the source tree. -->

  <xsl:template match="/"> <!-- Set up web page -->
    <html>
      <head>
        <title>Squares</title>
         <script language="JavaScript1.2">
           function showSquare(n) {
            alert("the square is " + n*n);
           }
        </script>
        <style> <!-- Put a little CSS in -->
           body { font-family: arial,helvetica; }
           h1   { font-size: 14pt }
           p    { font-size: 10pt}
        </style>
      </head>
      <body>
        <h1>Squares</h1>
        <p>Click a button to see the square of that number.</p>
        <form>
        <xsl:apply-templates/>
        </form>
      </body>
    </html>
  </xsl:template>

  <xsl:template match="number">
    <p><input type="button" value=" {.} " onClick="showSquare({.})"/></p>
  </xsl:template>

</xsl:stylesheet>