<?php 

function retrieve_tables_to_six(){
$tables_to_six=array();

for($i=1;$i<=6;$i++){

	$tables_to_six[$i-1]=array();

	for($j=1;$j<=6;$j++){

		$tables_to_six[$i-1][$j-1]=$i*$j;	
	}
}

return $tables_to_six;

}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Six table</title>
</head>
<body>
	<table cellpadding="10">
		<?php foreach(retrieve_tables_to_six() as $row): ?>
			<tr>
				<?php foreach($row as $column):?>
					<td>
						<?php echo $column;?>
					</td>
				<?php endforeach; ?>
			</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>