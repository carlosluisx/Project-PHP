<?php 
include "connect.php";
$section="2B";
$studentstable="20172018".$section;
$lapse="2l";
$notestable="calificaciones_".strtolower($section).$lapse;

isset($_GET['evaluation']) ? $def_op=$_GET['evaluation'] : $def_op=1;

$evaluation="evaluacion".$def_op;

function selected($option){
	global $def_op;
	$result=($def_op==$option) ? "selected" : "";
	return $result;
}

if(!empty($_GET['direct'])){
	$calification=$_GET['direct'];
}
elseif(isset($_GET['calification'])){	
	
	switch ($_GET['calification']) {
	case 'min':
		$calification=1;
		break;

	case '01':
		$calification=rand(1,5);
		break;

	case '05':
		$calification=rand(5,10);
		break;

	case '10':
		$calification=rand(10,15);
		break;

	case '15':
		$calification=rand(15,20);
		break;

	case 'max':
		$calification=20;
		break;

	default:
		$calification=9;
		break;
	}
}
if(isset($_GET['student'])){
	$chosen=$_GET['student'];
	echo "Success! note $calification on $evaluation set for:<br>";
	foreach ($chosen as $studentid) {		
		$svalue=mysqli_fetch_row(mysqli_query($connect, "SELECT nombre FROM $studentstable WHERE id=$studentid"))[0];
		echo ucwords(strtolower($svalue))."<br>";

		mysqli_query($connect, 
		   "UPDATE $notestable
			SET $evaluation=$calification
			WHERE id_estudiante=$studentid")
			or die(mysqli_error($connect));
	}

	
}
$query=mysqli_query($connect,
	"SELECT $studentstable.id, nombre from $studentstable
	JOIN $notestable 
	ON($studentstable.id=$notestable.id_estudiante)
	WHERE $evaluation=0")
	or die(mysqli_error($connect));
$studentlist=array();
while($row=mysqli_fetch_row($query)){
	$studentlist[]=array($row[0],$row[1]);
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Set Notes</title>
</head>
<body>
<h1><a href="http://localhost/Project%20PHP/dezmacht/NuevaGeneracion/setnotes.php">Set note for a student</a></h1>
<form action="" method="GET">
	<h3>Evaluation</h3>
	<select name="evaluation">
		<option <?php echo selected(1)?>>1</option>
		<option <?php echo selected(2)?>>2</option>
		<option <?php echo selected(3)?>>3</option>
		<option <?php echo selected(4)?>>4</option>
		<option <?php echo selected(5)?>>5</option>
	</select><br>
	<h3>Random calification</h3>
	<select name="calification">
		
		<option>min</option>
		<!-- 01 -->
		<option>01</option>
		<!-- 02 to 05 -->
		<option>05</option>
		<!-- 06 to 10 -->
		<option>10</option>
		<!-- 10 to 15 -->
		<option>15</option>
		<!-- 15 to 20 -->		
		<option>max</option>
		<!-- 20 -->
	</select>
	<h3>Direct calification</h3>
	<input type="text" name="direct" placeholder="Will replace random value">
	<h3>Students</h3>
	<?php foreach ($studentlist as $key => $student) : ?>
		<p><label for="<?php echo $key ?>"><?php echo $student[1] ?></label><input type="checkbox" name="student[]" id="<?php echo $key ?>" value="<?php echo $student[0] ?>"></p>
	<?php endforeach; ?>
	<input type="submit" name="">
</form>
</body>
</html>
