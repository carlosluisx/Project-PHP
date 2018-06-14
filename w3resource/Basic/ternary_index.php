<?php require "ternary.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Bad Function Test</title>
</head>
<body>
<form action="" method="GET">
	<h3><?php echo retrieve_form_text() ?></h3>
	<input type="text" name="number">
	<input type="submit" name="submit_button">
</form>

	<div id="result_area">
		<?php echo retrieve_result_text(); ?>
	</div>
</body>
</html>
