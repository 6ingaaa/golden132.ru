<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$title = 'Регистрация';
		require 'blocks/head.php';
	?>
</head>
<body>
	<?php require 'blocks/header.php';
	?>
	<main class = "container mt-5">
		<div class= "col-md-6 mb-3">
			<h3> Форма регистрации </h3>
			<!-- <form  action = "" method="post"> ajax-->
			<form action = "" method="post">
				<label for username>Имя</label>
				<input type="text" name="username" id="username" class="form-control">

				<label for email>Почта</label>
				<input type="email" name="email" id="email" class="form-control">

				<label for login>Логин</label>
				<input type="text" name="login" id="login" class="form-control">

				<label for pass>Пароль</label>
				<input type="password" name="pass" id="pass" class="form-control">

				<div class = "alert alert-danger mt-2" id="errorBlock"></div>

				<button type ="formSubmit" id ="reg_user" class="btn btn-success mt-5">Зарегстрироваться </button>
			</form>
		</div>
	</main>
  <!-- <?php 
	// require 'blocks/footer.php'
	;?> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
	<script>
		$("form").submit(function() {
			alert('Добрый день');
		 	var name = $('#username').val();
		 	var email = $('#email').val();
		 	var login = $('#login').val();
		 	var pass = $('#pass').val();
		 	// var data = {'username':name,'email':email,'login':login,'pass':pass};
	 		$.ajax({

 				url:"/ajax/reg.php",
 				type: "POST",
 				dataType: 'json',
 				data:{'username':name,'email':email,'login':login,'pass':pass},
 				success:function(data){
 					if(data === 'Готово')
 					{
 						$('#reg_user').text('Все готово');
 						$('#errorBlock').hide
 					}
 					else
 					{
 						$('errorBlock').show();
 						$('errorBlock').text($erorr);
 					}
 				}
	 		});
		});
		// $.ajax({
		// 	url: "js/mail.php",
		// 	type: "post",
		// 	data: data,
		// 	success: function() {
		// 		dataLayer.push({'event': 'formSubmit'});
		// 		closePopup();
		// 		if ($(form).find("[name=ltype]").val() === "Скачивание каталога") {
		// 			$.ajax({
		// 				url: "download.php",
		// 				type: 'POST',
		// 				success: function() {window.location = "download.php";}
		// 			});
		// 			setTimeout(openPopup, 400, '#thx2');
		// 		} else { setTimeout(openPopup, 400, '#thx1'); }
		// 	}
		// });

	</script>
</body>
</html>