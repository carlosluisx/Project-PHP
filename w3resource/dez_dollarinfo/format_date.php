<?php 
function zerofill_date($date){
	if (strlen($date)===1) {
		$date="0".$date;
	}
	return $date;
}
function current_date(){
	$day=zerofill_date(getdate()['mday']);
	$month=zerofill_date(getdate()['mon']);
	$year=getdate()['year'];
	$current_date=$year."-".$month."-".$day;
	return $current_date;
}
function current_time(){
	return date('H:i:s');
}

?>