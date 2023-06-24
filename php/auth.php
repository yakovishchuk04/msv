<?php 
	include "databases.php";
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);

	$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
	$products = mysqli_query($connect, "SELECT * From `food`");
	$products = mysqli_fetch_all($products);

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
	display: flex;
	align-items: center;
	justify-content: space-between;


}
body{
	background-image: url('https://img.freepik.com/premium-photo/dark-grey-black-slate-texture-with-high-resolution-background-of-natural-black-stone-wall_38607-444.jpg');

	font-family: "Maven Pro";
}
form{
	width: 500px;
	min-height: 150px;
	display: flex;
	flex-direction: column;
	border-radius: 5px;
	border: 1px solid black;
	background: white;
	padding: 15px;
	margin-bottom: 50px;
	box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}
input{
	width: 100%;
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
textarea{
	width: 100%;
	height: 150px;
	padding: 5px;
	border-radius: 5px;
	background-color: #121212;
	border: 1px solid black;
	color: #FFF;
	margin-bottom: 15px;
}
textarea::placeholder{
	font-family: "Maven Pro";
	color: #F2f2f2;
	opacity: 0.9;
}
button:hover{
	color: black;
	background: white;
}
.list-wrapper {
	width: 900px;
	min-height: 150px;
	display: flex;
	flex-wrap: wrap;
	border-radius: 5px;
	border: 1px solid black;
	background: white;
	padding: 15px;
	margin-bottom: 50px;
	box-shadow: rgba(14, 30, 37, 0.12) 0px 2px 4px 0px, rgba(14, 30, 37, 0.32) 0px 2px 16px 0px;
}
.list-title {
}
.list {
	margin-bottom: 30px;
	max-width: 400px;
	width: 100%;
	padding: 15px;
}
.list-id {
	font-weight: 700;
	margin-bottom: 5px;
}
.list-title {
	margin-bottom: 5px;
}
.list-desc {
	margin-bottom: 5px;
}
.list-src {
	margin-bottom: 10px;
}
.list-link{
}
.list-link a{
	text-decoration: none;
	padding: 5px;
	background: transparent;
	border-radius: 5px;
	border: 1px solid black;
	color: black;
	transition: all .5s;
	text-transform: uppercase;
}
.list-link a:hover{
	background: black;
	color: white;
}
</style>
<body>
	<div class="container">
		<div class="forms">
		<form action="add.php" class="Add" method="POST">
			<div class="form-title">ADD</div>
			<input type="text" class="reg-input" name="title" id="title" placeholder="name">
			<textarea type="text" class="reg-input" name="desc"  id="desc"  placeholder="description"></textarea>
			<input type="text" class="reg-input" name="src"  	id="src"   placeholder="sourse">
			<button type="submit" class="reg-sumbit">To do</button>
		</form>
		<form action="delete.php" class="Add" style="height: 150px" method="POST">
			<div class="form-title">DELETE</div>
			<input type="text" class="reg-input" name="name" id="name" placeholder="name">
			<button type="submit" class="reg-sumbit">To do</button>
		</form>
		</div>
		<div class="list-wrapper">
		<?php 
					foreach($products as $product)
					{
						?>
		<div class="list">

			<div class="list-id">id: <?= $product[0] ?></div>
			<div class="list-title">name: <?= $product[1] ?></div>
			<div class="list-desc">source: <?= $product[2] ?></div>
			<div class="list-src">desc: <?= $product[3] ?></div>
			<div class="list-link"><a href="update.php?id=<?= $product[0] ?>">Update</a></div>
		</div>
		<?php
					}
					?>
	</div>
	</div>
</body>
</html>