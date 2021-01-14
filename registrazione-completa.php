<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registrazione utente</title>
</head>
<body>
<h2>Modulo di registrazione</h2><hr />
Inserisci i dati e spedisci il modulo
<br /><br />
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
Nome <input type="text" name="nome" size="20" placeholder="Inserisci il nome" />
Cognome <input type="text" name="cognome" size="20" placeholder="Inserisci il cognome" /><br /><br />
Email <input type="text" name="email" size="30" placeholder="Inserisci la email" /><br/><br />
<input type="submit" name="invio" value="Invia" />
<input type="reset" name="cancella" value="Annulla" /><br/><br />
</form>
<?php if(isset($_POST["invio"])){
$nome = $_POST["nome"];
$cognome = $_POST["cognome"];
$email = $_POST["email"];
if(!filter_var($email, FILTER_VALIDATE_EMAIL) )
$email = "Attenzione: email non valida";
echo "La richiesta di $nome $cognome è stata registrata <br />";
echo "con l'indirizzo di posta elettronica: $email. <br />";
echo "La richiesta di accesso al servizio è arrivata <br />";
echo "alle ore", date("H:i:s"), "del giorno: ", date("d-m-Y");
}
?>
</body>
</html>
