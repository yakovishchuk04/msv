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
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;700&family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
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
body{
	background: #a1a1a1;
	font-family: "Maven Pro";
}
form{
	width: 500px;
	height: 250px;
	display: flex;
	flex-direction: column;
	border-radius: 5px;
	border: 1px solid black;
	background: white;
	padding: 15px;
	margin-bottom: 50px;
}
input{
	width: 260px;
	height: 35px;
	padding: 5px;
	border-radius: 5px;
	background-color: #121212;
	border: 1px solid black;
	color: #FFF;
	margin-bottom: 15px;
}
input::placeholder{
	font-family: "Maven Pro";
	color: #F2f2f2;
	opacity: 0.9;
}
.form-title{
	text-align: center;
	margin-bottom: 15px;
	text-transform: uppercase;
}
button{
	color: white;
	background: black;
	transition: all .5s;
	border-radius: 5px;
	padding: 10px 0;
	cursor: pointer;
	font-family: "Maven Pro";
}
button:hover{
	color: black;
	background: white;
}
</style>
<body>
	<div class="container">
		<form action="add.php" class="Add" method="POST">
			<div class="form-title">Add</div>
			<input type="text" class="reg-input" name="title" id="title" placeholder="name">
			<input type="text" class="reg-input" name="desc"  id="desc"  placeholder="description">
			<input type="text" class="reg-input" name="src"  	id="src"   placeholder="sourse">
			<button type="submit" class="reg-sumbit">To do</button>
		</form>
		<form action="delete.php" class="Add" style="height: 150px" method="POST">
			<div class="form-title">DELETE</div>
			<input type="text" class="reg-input" name="id" id="id" placeholder="id">
			<button type="submit" class="reg-sumbit">To do</button>
		</form>
	</div>
</body>
</html>