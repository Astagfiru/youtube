<?php
	$con = mysqli_connect('127.0.0.1', 'root','','lesson38');
	$query = mysqli_query($con, "SELECT * FROM users WHERE name = '{$_POST['username']}' and password = '{$_POST['password']}'");

	$len = $query->num_rows;
	for ($i=0; $i < $len ; $i++) { 
		$stroka = $query->fetch_assoc();
	}
	
	if($query->num_rows == 1) {
		header("Location: home.php?usersid=" . $stroka['id']);
	} else{
		header("Location: index.php");
	}

?>