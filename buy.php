		<?php
		include 'connection.php';
	    include 'functions.php';
		?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
		$title = 'Покупка';
		require 'blocks/head.php'
	?>
</head>
<body>
<?php require 'blocks/header.php'
		?>
	<div class= "container">
    	<h1> Корзина </h1>
            <div class="col xs-6 col-sm-6 col md-6 col lg - 6 usl">
                <?php $function = random_mobile();
                ?>
                <h2>Рекомендую купить </h2>
                <?php foreach ($function as $fu):?>
                	 <img src ="<?=$fu['img']?>" width="280" height="330" alt=""> <br>
						<?=$fu['model_mobile']?><br>
						<?=$fu['price_mobile']?> руб </br>
						<a href = "buy.php" > <button onclick = "buy_mobile();"> Купить </button> 
						</a> <a href = "us.php">Вернуться в каталог</a><br>
                <?php endforeach;?> 
            </div>
            <div class="col xs-6 col-sm-6 col md-6 col lg - 6 usl">
                Картинка
				цена
				кнопка купить
				<?php
                $buy = mobiles();
				?>
				
 				<?php foreach ($buy as $buys):?> </br>
					<?=$buys['model_mobile']?> </br>
					<?=$buys['price_mobile']?> руб 
				<?php endforeach;?>
			</div>
    </div>	
	<?php require 'blocks/footer.php'
		?>
</body>
</html>