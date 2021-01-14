<?php
$username = $_POST['username'];
$password = $_POST['password'];
$username = filter_var($username, FILTER_SANITIZE_STRING);
$password = filter_var($password, FILTER_SANITIZE_STRING);
$error = 0;
if (!$username || !$password) {
$error = 'Username e password sono obbligatori';
}
?>
<!DOCTYPE html>
<html>
<head><title></title></head>
<body>
<h1>Risultati Registrazione</h1>
<?php if ($error):
echo "<p style=\"color: red\"> $error </p>";
else:
echo "<p>Benvenuto $username </p>";
echo "Richiesta eseguita alle ore ", date("H:i:s"),", giorno ", date("d-m-Y");
endif
?>
</body></html>
