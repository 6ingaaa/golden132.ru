	<?php
		include 'connection.php';
	    include 'functions.php';
		?>
<!DOCTYPE html>
<html lang="en">
<?php 
		$title = 'Наши товары';
		require 'blocks/head.php'
	?>
<body>
<?php require 'blocks/header.php'
	?>
    <div class ="clearfix">        
		<?php 
		// $page = (isset($_GET['page'])) ? $_GET('page') : 1;
		// if (isset($_GET['page'])) 
		// 	{$page = $_GET['page']; } 
		// else $page = 1;

		// $limit = 9;
		// $offset = $limit * ($page-1);

        $mobile = get_mobile();
		// $count = saska();
		//echo '1 var  ' .($count); 
		//echo end ($count);
		// var_dump($count);
		// $count = (int)$count;
		// $numpage = $count * $limit;
		// var_dump($numpage); нумерацию страниц автоматическую не сделал
		?>
		<div class="col xs-3 col-sm-3 col md-3 col lg - 3 usl">
			Хм, сюда можно добавить фильтры
		</div>
		<div class="col xs-9 col-sm-9 col md-9 col lg - 9 usl">
			<?php foreach ($mobile as $mob):?>				
				<div class="col xs-4 col-sm-4 col md-4 col lg - 4 usl">
					<!-- <a href = "buy.php" onclick = "buy_mobile();">  -->
                    <img src ="<?=$mob['img']?>" width="180" height="230" alt=""> <br>
					<?=$mob['model_mobile']?><br>
					<?=$mob['price_mobile']?> руб </br>
					<a href = "buy.php" > <button onclick = "buy_mobile();"> Купить </button> 
					</a>
				</div>			    
            <?php endforeach;?> 
        </div>
	<div class = "hey">
   		 <form action="" method="get">	            	
			<select name = "page" id="page" class= "form-control" onchange="submit();">
			<option value ="1">1</option>
			<option value ="2">2</option>
			<option value ="3">3</option>
			<option value ="4">4</option>
			<option value ="5">5</option>
			<option value ="6">6</option>
			</select>			
		</form>
    </div>

	<?php require 'blocks/footer.php'
		?>
</body>
</html>