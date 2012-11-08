<?php include_once('zmienne.php');?>

<!DOCTYPE html>
<html lang=pl>
	<head>
		<meta charset=utf-8>
		<title><?= $tytul;?></title>
		<style>
			body{paddin:0px;margin-top:0px;font-family:Verdana,Arial;font-size:12px;color:#000;}
			header {background:#545454;color:#ffffff;padding:10px;}
			nav {float:left;width:150px;background:#dddddd;padding:10px;}
			article{margin-left:170px;padding:10px;}
			a:hover{background:#bbb;color:#fff;}
			ul{list-style-type: none;margin: 0;padding: 0;}
			li a{display:block;padding:5px 10px;color:#000;margin:0px;text-decoration:none;font-size:12px;}
			.aktywny{background:red;color:#fff;}
			#kontener{width:980px;margin:0 auto;pading:0px;}
			footer{clear:both;padding:10px;background:green;}
		</style>
	</head>
	<body>
		<div id="kontener">
		<header><h2><?= $naglowek;?></h2></header>
		<section>
			<nav>
			<b>Menu</b>
			<hr>
			<ul>
				<?php if($strona_id == 1 || $strona_id == 2):?>
					<li><a href="index.php">Strona główna</a></li>
				<?php endif;?>
				<li><a href="?strona_id=1" <?php if($strona_id == 1):?>class="aktywny"<?php endif;?>>Strona pierwsza</a><li>
				<li><a href="?strona_id=2" <?php if($strona_id == 2):?>class="aktywny"<?php endif;?>>Strona druga</a></li>
			</ul>
			</nav>
			<article>
			<?= $tresc;?>
			</article>
		</section>
		<footer>
			Stopka strony
		</footer>
		</div>
	</body>
</html>