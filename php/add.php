<?php 
require_once 'databases.php';
$connect = mysqli_connect($par1_ip, $par2_name, $par3_p, $par4_db);
$title = $_POST['title'];
$desc = $_POST['desc'];
$src = $_POST['src'];

mysqli_query($connect,"INSERT INTO `food` (`id`, `name`, `src`, `description`) VALUES (NULL, '$title', '$src', '$desc');");
header('Location: /');
?>