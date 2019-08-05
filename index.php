<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>PHP TEXT BOX</title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<form method="post" action="">
			Number :<br><input type="text" name="number"><br><br><input type="submit" value="Confirm">
		</form>
		<?php
			echo $_POST["number"];
		?>
	</body>
</html>
