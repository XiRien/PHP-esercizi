<html>
<head><title>Trend di incremento contagi con Rt=2</title></head>
<body>
<h2>Incremento dei contagi <br>con indice Rt = 2</h2>
<table border="1" cellpadding="5">
<tr><th>Passo</th><th>Nuove persone contagiate</th></tr>
<?php
for ( $t=1; $t<11; $t++ )
{
$s = pow(2, $t);
echo ("<tr>");
echo ("<td>". $t . "</td>");
echo ("<td>". $s . "</td>");
echo ("</tr>\n");
}
?>
</table>
</body>
</html>
