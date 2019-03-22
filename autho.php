<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$title = 'Вход';
		require 'blocks/head.php'
	?>
</head>
<body>
	<?php require 'blocks/header.php'
	?>
	<main class = "container mt-5">
		<div class= "col-md-8 mb-3">
		<!-- 	<?php 
				// if($_COOKIE['log'] == ''):
			?> -->
			<h3> Форма авторизации </h3>
			<form action="" method="post">

				<label for login>Логин</label>
				<input type="text" name="login" id="login" class="form-control">

				<label for pass>Пароль</label>
				<input type="password" name="pass" id="pass" class="form-control">

				<div class = "alert alert-danger mt-2" id="errorBlock"></div>

				<button type ="submit" id ="auth_user" class="btn btn-success mt-5">Вход </button>
			</form>
		<!-- 	<?php 
				// else:
			?> -->
			<!-- <h2> <?=$_COOKIE['log']?></h2> -->
			<!-- <button class="btn btn-danger" id ="exit_bnt">Выход</button> -->
	<!-- 		<?php
				// endif; 
			?> -->
				<a href="reg.php"> Регестрация </a>
		</div>
	</main>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script>
		$('#auth_user').submit(function(){
			alert('submit');
		 	// var login = $('#login').val();
		 	// var pass = $('#pass').val();

	 		// $.ajax({
 			// 	url:'ajax/auth.php',
 			// 	type: 'POST',
 			// 	cache:false,
 			// 	data:{'username':name,'email':email,'login':login,'pass':pass}
 			// 	dataType:'html',
 			// 	success:function(data){
 			// 		if(data == 'Готово')
 			// 		{
 			// 			$('#auth_user').text('Все готово');
 			// 			$('#errorBlock').hide;
 			// 			document.location.reload(true);
 			// 		}
 			// 		else 
 			// 		{
 			// 			$('errorBlock').show();
 			// 			$('errorBlock').text(data);
 			// 		}
 			// 	}
	 		// });
		});

		$('#exit_bnt').click(function(){
	 		$.ajax({
 				url:'ajax/exit.php',
 				type: 'POST',
 				cache:false,
 				data:{}
 				dataType:'html',
 				success:function(data){
					document.location.reload(true);
 				}
	 		});
		});
	</script>
</body>
</html>