<?php 

	include "databases.php";
	$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
	$product_id = $_GET['id'];
	$product = mysqli_query($connect, "SELECT * From `food` WHERE `id` = '$product_id'");
	$product = mysqli_fetch_assoc($product);
	$name = $product[name];
	$desc = $product[description];
	$src = $product[src];

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update</title>
	<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Maven+Pro:wght@400;700&family=Open+Sans:ital,wght@0,400;0,500;0,700;1,400&display=swap"
      rel="stylesheet"
    />
	<link rel="../css/normalize.css">
</head>
<style>
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
</style>
<body>
<form action="updateScript.php" class="Add" method="POST">
			<div class="form-title">update</div>
			<input type="hidden" name="id" value="<?= $product_id ?>">
			<input type="text" class="reg-input" name="title" id="title" value="<?= $name ?>">
			<textarea type="text" class="reg-input" name="desc"  id="desc""><?= $desc ?></textarea>
			<input type="text" class="reg-input" name="src"  	id="src"   value="<?= $src ?>">
			<button type="submit" class="reg-sumbit">Update</button>
		</form>
</body>
</html>