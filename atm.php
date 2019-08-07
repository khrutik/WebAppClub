<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>ATM</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" action="">
			Your Password :<br><input type="password" name="password"><br><br><input type="submit" value="Confirm">
		</form>
		<?php
			$mypassword = 1234;
			$password = $_POST["password"];
			if(isset($password))
			{
				if($password==$mypassword)
				{
					echo "ยินดีด้วย คุณไปเงินแน่";
				}
				else
				{
					echo "กรอกรหัสผ่านผิด";
				}
			}
		?>
</body>
</html>