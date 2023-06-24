<?php 

	include "databases.php";
	$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);

	$id = $_POST['id'];
	$title = $_POST['title'];
	$desc = $_POST['desc'];
	$src = $_POST['src'];

	mysqli_query($connect, "UPDATE `food` SET `name` = '$title', `src` = '$src', `description` = '$desc' WHERE `id` = '$id'");
	header('Location: /');

?>