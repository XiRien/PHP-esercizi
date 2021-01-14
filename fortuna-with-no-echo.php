<html>
<head><title>Prova la tua fortuna</title></head>
<body>
<hr />Tenta la fortuna<hr />
<?php
$numero = rand(1, 3);
if ($numero == 1){
?>
Oggi è il tuo giorno fortunato! Corri....
<?php }
elseif ($numero == 2){
?>
Domani sarà il tuo giorno fortunato.... preparati!
<?php }
else {
?>
E' stato ieri il tuo giorno fortunato..... rifletti....
<?php }
?>
</body>
</html>
