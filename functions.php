<?php
function get_mobile () {
    global $link;
    if (isset($_GET['page'])) 
					{$page = $_GET['page']; } 
				else $page = 1;

				$limit = 9;
				$offset = $limit * ($page-1);

	$sql = "SELECT * FROM ss LIMIT $limit OFFSET $offset";
	$result = mysqli_query($link, $sql);
	$mobile = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	return $mobile;
	}	
?>

<?php
function random_mobile () {
    global $link;
    $random = rand(1, 50);
	$sql = "SELECT * FROM ss LIMIT 3 OFFSET $random";
	$result = mysqli_query($link, $sql);
	$mobile = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	return $mobile;
	}	
?>


<?php
function saska () {
    global $link;
	$res = "SELECT COUNT(*) FROM `ss`";
	$result = mysqli_query($link, $res);
	$resk = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	return $resk;
	}	
?>

 <?php
function buy_mobile() {
  global $link;
  $sql = "INSERT INTO temp (model_mobile, id_firm, price_mobile, color_mobile, memory_mobile) SELECT model_mobile, id_firm, price_mobile, color_mobile, memory_mobile FROM ss WHERE id_mobile = '32' ";
  $resul = mysqli_query ($link, $sql);
   $user = mysqli_fetch_all ($resul, MYSQLI_ASSOC);
   return $user;
}
?> 

<?php
function mobiles () {
	global $link;
	$mysql = "SELECT * FROM temp";
	$result = mysqli_query($link, $mysql);
	$buy = mysqli_fetch_all ($result, MYSQLI_ASSOC);
	return $buy;
}
?>