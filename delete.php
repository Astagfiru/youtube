<?php
	$con = mysqli_connect('127.0.0.1', 'root','','lesson38');

	$delete = "DELETE FROM users WHERE id = '{$_GET['deleteById']}'";
	$query = mysqli_query($con, $delete);
	header("Location: home.php?usersid=" . $_GET['deleteById']);
?>