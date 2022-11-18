<?php
$to = "solvalor@hotmail.com";
$subject = "Contact from the website";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$name = $_POST['nombre'];
$email = $_POST['email'];

$message ="
<html>
<head>
<title>Datos del contacto</title>
</head>
<body>
<h1>Informacion del contacto brindada en el website</h1>
<p> Nombre: $name </p> 
<p> Email: $email </p> 
</body>
</html>";
 echo 'Thanks';
mail($to, $subject, $message, $headers);
?>
