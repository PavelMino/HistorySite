<?php
	$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	
	if(mb_strlen($login) < 5 || mb_strlen($login) > 20){
		echo "Логин должен быть не меньше 5 и не больше 20 символов!";
		exit();
	}
	
	else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 16){
		echo "Пароль должен быть не меньше 5 и не больше 16 символов!";
		exit();
	}
	
	$mysql = new mysqli('localhost', 'root', 'root', 'register-bd');
	$mysql->query("INSERT INTO `users` (`login`, `password`) VALUES('$login', '$pass')");
	
	$mysqli->close();
?>