<?php 
$text="Hola amigo";
$reemplazado=preg_replace("/(\b[A-Z])/i", '<span style="color:red;">\1</span>', $text);

echo $reemplazado; ?>
