<?php 
//25. Write a PHP script to get the document root directory under which the current script is executing, as defined in the server's configuration file.


echo getenv('DOCUMENT_ROOT')."<br>";

//26. Write a PHP script to get the information about the operating system PHP is running on.

echo substr(PHP_OS,0,3)."<br>";

 ?>