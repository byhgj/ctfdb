<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>弱口令</title>
</head>
<body>
	<?php
		if (isset($_POST["username"]) && $_POST["username"]=="admin" &&
			isset($_POST["password"]) && $_POST["password"]=="abcd1234") {
				echo "flag{this_is_flag}";
		} else {
	?>
	<form method="post">
		<input type="text" name="username" placeholder="用户名">
		<input type="password" name="password" placeholder="口令">
		<input type="submit">
	</form>
	<?php } ?>
</body>
</html>
