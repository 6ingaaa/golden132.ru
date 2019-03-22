
<html lang="ru">
<meta charset="UTF-8">
<?php
	$username = trim(filter_var($_POST['username'], FILTER_SANITIZE_STRING));
	$email = trim(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL));
	$login = trim(filter_var($_POST['login'], FILTER_SANITIZE_STRING));
	$pass = trim(filter_var($_POST['pass'], FILTER_SANITIZE_STRING));
	$error = '';
	if (strlen($username) <= 3)
		$error = 'Введите имя';
	else if (strlen($email) <= 3)
		$error = 'Введите емаил';
	else if (strlen($login) <= 3)
		$error = 'Введите логин';
	else if (strlen($pass) <= 3)
		$error = 'Введите пароль';
	if($error !=''){
		echo json_encode($error);
		// echo $error;
		exit();
	}

	$hash = "sod32sdas";
	$pass = md5($pass + $hash);

	$user ='gb_56505';
	$password = 'a62fdd9cwps';
	$db = 'gb_56505';	
	$host = 'mysql102.1gb.ru';

	$dsn = 'mysql:host='.$host.';dbname='.$db;
	$pdo = new pdo($dsn,$user,$password);

	$sql = "INSERT INTO registration (firstname,email,login,password )VALUES (?,?,?,?)";
	$query = $pdo->prepare($sql);
	$query -> execute([$username,$email,$login,$pass]);
	// $result = mysqli_query($link, $sql);
	// $mobile = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	// return $mobile;

	// echo'Готово';
	echo json_encode($article_data);
?>
</html>