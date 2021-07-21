<?php
$destinatario = 'argsg96@gmail.com'
$emailcontainer = $_POST ['emailcontainer']
$textcontainer = $_POST ['textcontainer']
$header = "Enviado desde el sitio web de Mentores";
$mensajecompleto = $textcontainer . "\nAtentamente" .$emailcontainer
mail($destinatario, $emailcontainer, $textcontainer, $header)
echo "<script> alert ('correo enviado exitosamente') </script>"
echo "<script> setTimeout(\"location.href='index.html'\",1000) </script>"
?>