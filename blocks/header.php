<header>
	<div class="dropmenu">
		<a href = "index.php">
			<img src="img/logo.png" alt="Golden" class="logo">
		</a>
		<nav>
			<ul class="menu">
				<!-- <li> <a class="btn btn-outline-primary mb-2" href="ab.php">О нас</a> </li> -->
				<li> <a class="btn btn-outline-primary mb-2" href="us.php">Товары </a> 
				<!-- <ul class="submenu">
                    <li><a href="">Производство</a></li>
                    <li><a href="">Магазин</a></li>                   
                </ul> -->
				</li> 
				<!-- <li> <a class="btn btn-outline-primary mb-2" href="contact.php">Контакты</a> </li> -->
				<li> <a class="btn btn-outline-primary mb-2" href="buy.php"> Корзина </a> </li>
				<!-- <?php 
					if($_COOKIE['log'] == ''):
				?> -->
				<li> <a class="btn btn-outline-primary mb-2" href="autho.php"> Войти </a></li>
				<?php
					else:
				?>
				<li> <a class="btn btn-outline-primary mb-2" href ="autho.php">Кабинет </a></li>
				<?php
					endif;
				?>
		 	</ul>
	    </nav> 	
	</div> 
</header>