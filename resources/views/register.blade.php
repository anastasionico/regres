<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="register" method="POST">
		<input type="email" name="email">
		<input type="password" name="password">
		<input type="submit">
	</form>

	<?php
		if(isset($token) && isset($id)) {
			echo "Successfully registered, token: <b>$token</b> and id: <b>$id</b>";
		}
		if(isset($error)) {
			echo "Missing password";
		}
	?>
</body>
</html>