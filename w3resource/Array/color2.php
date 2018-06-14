<?php 
/*$color = array('white', 'green', 'red'') 
Write a PHP script which will display the colors in the following way : 
Output : 
white, green, red,

green
red
white*/


$color = array('white', 'green', 'red');

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Colors 2</title>
 </head>
 <body>
 	<p><?php echo "$color[0], $color[1], $color[2],"; ?></p>
 	<ul>
 		<li><?php echo "$color[1]"; ?></li>
 		<li><?php echo "$color[2]"; ?></li>
 		<li><?php echo "$color[0]"; ?></li>
 	</ul>
 </body>
 </html>

