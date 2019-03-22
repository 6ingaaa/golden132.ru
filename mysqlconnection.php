    <?php
    $user ='gb_56505';
	$password = 'password';
	$db = 'gb_56505';	
	$host = 'mysql102.1gb.ru';

	$dsn = 'mysql:host='.$host.';dbname='.$db;

	$pdo = new pdo($dsn,$user,$password);
	$link = mysqli_connect($host,$db ,$password,$user);
		if (mysqli_connect_errno())
		{
			echo 'Ошибка ('.mysqli_connect_errno().'): '.mysqli_connect_error();
			exit();  
		}
	?>