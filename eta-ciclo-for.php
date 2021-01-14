<html>
<head><title>Età media della classe</title></head>
<body>
<?php
$eta = array(18, 17, 18, 19, 20, 18, 18, 18, 17, 19, 18, 18, 17, 19, 18, 18);
$limite = count($eta);
$somma = 0;
for ( $i=0; $i<$limite; $i++ )
{
$somma += $eta[$i];
}
$media = $somma / $limite;
echo "<h2>Età media della classe: " . $media . "</h2>";
?>
</body>
</html>
