<?php 
include "validar.php";
//Si se ha presionado el botón enviar
if ((isset($_POST['enviar'])) || (!empty($_POST['email']))) {
	$email=$_POST['email'];
	if (validar_email($email)) 
	{
 	echo "El email introducido es valido"; 	
 	}
 	else echo "El email introducido no es valido, intente de nuevo"; 
}//Fin "if"
?>

<!DOCTYPE html>
<html>
<head>
	<title>Valida este correo</title>
</head>
<body>
<form method="POST" action="validar_email.php" target="_self">
	<H2>Introduzca su e-mail: <input type="text" name="email"></H2>
	<input type="submit" name="enviar">
</form>
</body>
</html>