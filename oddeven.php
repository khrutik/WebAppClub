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
			$number = $_POST["number"];

			if(isset($number))
			{
				if($number%2)
				{
				echo "เลขคี่";
				}
				else
				{
				echo "เลขคู่";
				}
			}
		?>
	</body>
</html>
