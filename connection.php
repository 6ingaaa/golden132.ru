    <?php
	    $link = mysqli_connect('mysql102.1gb.ru','gb_56505','password','gb_56505');
		if (mysqli_connect_errno())
		{
			echo 'Ошибка ('.mysqli_connect_errno().'): '.mysqli_connect_error();
			exit();  
		}
	?> 
