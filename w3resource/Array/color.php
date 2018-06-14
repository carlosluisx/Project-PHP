<?php 
/*$color = array('white', 'green', 'red', 'blue', 'black');
Write a script which will display the following string - Go to the editor
"The memory of that scene for me is like a frame of film forever frozen at that moment: the red carpet, the green lawn, the white house, the leaden sky. The new president and his first lady. - Richard M. Nixon"
and the words 'red', 'green' and 'white' will come from $color.*/

$color = array('white', 'green', 'red', 'blue', 'black');




 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Color array</title>
 </head>
 <body>
 	<h2>Text:</h2>
 <h3><?php echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon"; ?></h3>
 </body>
 </html>