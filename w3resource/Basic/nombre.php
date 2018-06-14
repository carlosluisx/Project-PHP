<!DOCTYPE html>
<html>
<head>
	<title>Hola!</title>
</head>
<body>
<form action="" method="GET">
	<h2>Introduce tu nombre</h2>
	<input type="text" name="name">
	<input type="submit" name="" value="Enviar">
</form>
	<h3>Hola 
		<?php if (!empty($_GET['name'])) {
			echo $_GET['name']."!";
		} ?></h3>
</body>
</html>