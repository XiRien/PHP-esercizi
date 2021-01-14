<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>$_SERVER</title>
</head>
<body>
Il tuo indirizzo IP:
<?php echo $_SERVER['REMOTE_ADDR']."<br />" //localhost è 127.0.0.1 in
IPv4, o ::1 in IPv6 ?>
Il tuo browser:
<?php echo $_SERVER['HTTP_USER_AGENT']."<br />" ?>
Il tuo server web:
<?php echo $_SERVER['SERVER_SOFTWARE']."<br />" ?>
Il nome della macchina server:
<?php echo $_SERVER['SERVER_NAME']."<br />" ?>
Il nome di questo file PHP:
<?php echo $_SERVER['PHP_SELF']."<br />" ?>
</body>
</html>
