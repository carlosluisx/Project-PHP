<?php
//Se lee la pagina del url 
if (!empty($_GET['pagina'])) {
	//Si es w3r
	if ($_GET['pagina']=='w3resource') {
		$location="https://www.w3resource.com/";	
	}
	//Si es neobux
	elseif ($_GET['pagina']=='neobux') {
		$location="https://www.neobux.com";
	}
	
	//Se redirecciona	
	header("Location: $location");
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Serás redireccionado</title>
 </head>
 <body>
 <form action="" method="GET">
 	<h3>¿A qué página quieres ser redireccionado?</h3>
 	<!-- opcion: w3resource -->
 	<input id="w3resource" type="radio" name="pagina" value="w3resource"><label for="w3resource">w3resource</label><br>
	<!-- opcion: neobux -->
 	<input id="neobux" type="radio" name="pagina" value="neobux"><label for="neobux">neobux</label><br>
	<!-- ENVIAR -->
 	<input type="submit" name="">

 </form>
 </body>
 </html>