<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$title = 'golden';
		require 'blocks/head.php'
	?>
</head>
<?php require 'blocks/header.php'
?>

	<section id="services">
		<div class="container">
			<div class="title">
				<h2>
					Сервис
				</h2>
			</div>
			<div class = "row">
				<div class= "col xs-12 col-sm-4 col md-4 col lg - 4 usl" >
						<img src="img/icon1.png" alt="Услуга">
						<h3>Надёжность</h3>
						<p>
							Мы представляем сервис – в котором предоставяем качественные услуги с надлежащим уровнем сервиса.
						</p>
					</div>
				<div class= "col xs-12 col-sm-4 col md-4 col lg - 4 usl" >
					<img src="img/icon2.png" alt="Услуга">
					<h3>Быстрота</h3>
					<p>
						Мы постоянно совершенствуем предоставляемые услуги, путем анализа мнения наших клиентов и быстрого, чуткого реагирования на их запросы.
					</p>
				</div>
				<div class= "col xs-12 col-sm-4 col md-4 col lg - 4 usl" >
					<img src="img/icon3.png" alt="Услуга">
					<h3>Низкие цены</h3>
					<p>
					   В нашем сервисе безумно низкие цены, а также постоянно проходят различные акции
					</p>
				</div>
			</div>
		</div>
	</section>
	
	        <div class="title">
				<h2>
					Наши работы
				</h2>
			</div>
	    <div class="all">
		<input checked type="radio" name="respond" id="desktop">
	    <article id="slider">
				<input checked type="radio" name="slider" id="switch1">
				<input type="radio" name="slider" id="switch2">
				<input type="radio" name="slider" id="switch3">
				<input type="radio" name="slider" id="switch4">
			<div id="slides">
				<div id="overflow">
					<div class="image">
						<article><img src="img/car1.jpg"></article>
						<article><img src="img/car2.jpg"></article>
						<article><img src="img/car3.jpg"></article>
						<article><img src="img/car4.jpg"></article>
					</div>
				</div>
			</div>
			<div id="controls">
				<label for="switch1"></label>
				<label for="switch2"></label>
				<label for="switch3"></label>
				<label for="switch4"></label>
			</div>
			<div id="active">
				<label for="switch1"></label>
				<label for="switch2"></label>
				<label for="switch3"></label>
				<label for="switch4"></label>
			</div>
		</article>
		</div>
		<?php require 'blocks/footer.php'
		?>
</body>
</html>
