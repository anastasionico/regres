<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="login" method="POST">
		<input type="email" name="email">
		<input type="password" name="password">
		<input type="submit">
	</form>

	<?php
		if(isset($token)) {
			echo "Successfully logged token: <b>$token</b>";
		}
		if(isset($error)) {
			echo "Missing password";
		}
	?>
</body>
</html>