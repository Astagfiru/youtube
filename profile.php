<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Your Profile</title>
</head>
<body>
	<?php
		$con = mysqli_connect('127.0.0.1', 'root','','lesson38');
		$inner = "SELECT *
				FROM videos
				INNER JOIN users ON videos.user_id = users.id WHERE users.id = '{$_GET['usersid']}'";
		$query = mysqli_query($con, $inner);

		$len = $query->num_rows;
		for ($i=0; $i < $len ; $i++) { 
			$stroka = $query->fetch_assoc();
		}
	?>
	<div class="col-4 mx-auto">
		<img class="mt-4 col-4 rounded mx-auto d-block" src="img/7.jpg" alt="">
		<form class="mt-4" action="update.php" method="POST">
			<input value="<?php echo $stroka['name']?>" type="" name="name" class="form-control">
			<input value="<?php echo $stroka['phone']?>" type="" name="phone" class="form-control">
			<input value="<?php echo $stroka['email']?>" type="" name="email" class="form-control">
			<input value="<?php echo $stroka['id']?>" type="" name="ById" style="display: none;">
			<button class="form-control mt-1 bg-primary text-white">Update</button>
		</form>
		<form class="mt-4" action="delete.php" method="GET">
			<input name="deleteById" value="<?php echo $stroka['id']?>" style="display: none;">
			<button class="form-control mt-1 bg-danger text-white">Delete This Account</button>
		</form>
	</div>
	
</body>
</html>