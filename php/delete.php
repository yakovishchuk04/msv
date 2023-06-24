<?php 
	include "../php/databases.php";
	$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
	$name = $_POST['name'];

	mysqli_query($connect,"DELETE FROM `food` WHERE `name` = '$name'");
	header('Location: /');
?>