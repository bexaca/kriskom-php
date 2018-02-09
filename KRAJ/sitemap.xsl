<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="urlset">
<html>
<body>
<table border="1">
<tr>
<th bgcolor="gold">Link</th> 
<th bgcolor="silver">Poslednji update</th>
<th bgcolor="lightblue">Novi update</th>
<th bgcolor="lightblue">Prioritet</th>
</tr>
<xsl:for-each select="url">
<tr> 
<td bgcolor="gold"><xsl:value-of select="loc"/></td>
<td bgcolor="silver"><xsl:value-of select="lastmod"/></td>
<td bgcolor="lightblue"><xsl:value-of select="changefreq"/></td>
<td bgcolor="lightblue"><xsl:value-of select="priority"/></td>
</tr>
</xsl:for-each>
</table>
</body>
</html>
</xsl:template>
</xsl:stylesheet>