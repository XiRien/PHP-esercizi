<html>
<head><title>Prova la tua fortuna</title></head>
<body>
<hr />Tenta la fortuna<hr />
<?php
$numero = rand(1, 3);
if ($numero == 1)
echo 'Oggi è il tuo giorno fortunato! Corri.... ';
elseif ($numero == 2)
echo 'Domani sarà il tuo giorno fortunato.... preparati!';
else
echo 'E\' stato ieri il tuo giorno fortunato..... rifletti....';
?>
</body>
</html>
