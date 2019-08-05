<!DOCTYPE html>
<html>
<head>
	<title>My First Page</title>
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
