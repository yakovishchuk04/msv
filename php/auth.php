<?php 
	include "databases.php";
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$mysql = new mysqli($par1_ip,$par2_name,$par3_p,$par4_db);
	$result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
	$user = $result->fetch_assoc();
	if ($user == 0)
	{
		echo "Такого користувача не існує";
		exit();
		$mysql->close();
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
	<link rel="../css/normalize.css">
</head>
<style>
*,
*::before,
*::after {
  box-sizing: border-box;
}
.container {
  max-width: 1460px;
  padding: 0 10px;
  margin: 0 auto;
}
</style>
<body>
	<div class="container">
		<form action="" class="Add">
			<input type="text" class="reg-input" name="title" id="title" placeholder="name">
			<input type="text" class="reg-input" name="desc"  id="desc"  placeholder="description">
			<input type="text" class="reg-input" name="src"  	id="src"   placeholder="sourse">
		</form>
	</div>
</body>
</html>