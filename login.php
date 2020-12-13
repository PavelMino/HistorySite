<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300&family=PT+Sans+Caption&display=swap" rel="stylesheet">
	</head>
	<body>
	<!--Регистрация-код-->
		<?php require "blocks/menu.php" ?>
		<main class="Main">
			<div class="registration">
				<header>
					<h2>Вход<h2>
					<hr>
				</header>
				<form action="/php/registration.php">
					<p class="registration-p"><input name="login" required size="25" maxlength="20" placeholder="Логин" class="form"></p>
					<p class="registration-p"><input name="password" type="password" required size="25" maxlength="16" placeholder="Пароль" class="form"></p>
					<p class="registration-p"><button type="submit" id="registration-button"><h4>Войти</h4></button></p>
				</form>
				<footer>
					<hr>
					<h3>Если у вас учётной записи
					<br>
					<a href="registration.php">Зарегистрируйтесь</a></h3>
				</footer>
			</div>
			<!--?php require "blocks/footer.php" ?-->
		</main>
	</body>
</html>