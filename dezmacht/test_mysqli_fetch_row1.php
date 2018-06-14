<?php 
include "C:\AppServ\www\Project PHP\w3resource\connect_dolartoday_db.php";
 $query=mysqli_query($connect,"SELECT * FROM dollar_price");

 function retrieve_table(){
 	global $query;
 	return mysqli_fetch_row($query);
 }
 function retrieve_table1(){ 	
 	return retrieve_table();
 }?>