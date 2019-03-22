<?php
	$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
	$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));

	$error = '';
	if (strlen($login) <= 3)
		$error = 'Введите логин';
	else if (strlen($pass) <= 3)
		$error = 'Введите пароль';

	if($error !=''){
		echo $error;
		exit();
	}

	$hash = "sod32sdas";
	$pass = md5($pass + $hash);

	require_once '../mysqlconnection.php';

	$sql = 'SELECT 'id' FROM registration WHERE 'login'=:$login && 'password'=:$pass';
	$query = $pdo->prepare($sql);
	$query -> execute(['login' => $login,'password' =>$pass]);
	$user = $query ->fetch(PDO::FETCH_OBJ);
	if ($user-> id == 0)
		echo 'Такого пользователя нет'
	else {
		setcookie('log',$login,time()+3600 * 24 * 30, "/");
		echo 'Готово'
	}
	// $result = mysqli_query($link, $sql);
	// $mobile = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	// return $mobile;

	echo 'Готово';
?>