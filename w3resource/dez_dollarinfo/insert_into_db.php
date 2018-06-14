<?php 
include "check_if_today_price_is_on_db.php";


if (do_today_check()==false) 
{
	include "get_source.php";
	mysqli_query($connect,"INSERT INTO dollar_price VALUES ('$today_price', curdate())")or die("couldn't execute query: ".mysqli_error($connect));
}
else $today_price=$price_from_db;
 ?>
