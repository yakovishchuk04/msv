<?php 
	include "databases.php";
	$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
	$id = $_GET['id'];

	mysqli_query($connect,"DELETE FROM `food` WHERE `id` = '$id'");
	header('Location: /');
?>