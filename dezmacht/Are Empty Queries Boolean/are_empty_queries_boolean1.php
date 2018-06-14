<?php include "C:\AppServ\www\Project PHP\w3resource\dez_dollarinfo\connect_dolartoday_db.php";
$query=mysqli_query($connect, "SELECT * FROM dollar_price WHERE ja:jaja=1")or die("epa ".mysqli_error($connect));
$result=mysqli_fetch_row($query)[1];
if($result==0) echo "hola";
 ?>