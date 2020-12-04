<?php
	$con = mysqli_connect('127.0.0.1', 'root','','lesson38');
	$update = "UPDATE users SET name = '{$_POST["name"]}', phone = '{$_POST["phone"]}', email = '{$_POST["email"]}' WHERE id = {$_POST["ById"]}";
	$query = mysqli_query($con, $update);
	header("Location: home.php?usersid=" . $_POST['ById']);
?>