<?php
    session_start();
    require "database.php";
    $db = new Database();

    $sql = "SELECT * FROM Wurstach.News WHERE role_news = '1' ORDER BY ID_News ASC";
    $parm = array();
    $important_news = $db->get_all($sql, $parm);

    $sql = "SELECT * FROM Wurstach.News WHERE role_news = '0' ORDER BY ID_News DESC";
    $parm = array();
    $unimportant_news = $db->get_all($sql, $parm);
?>

<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Wurstach</title>
<link rel="icon" href="img/Logo2.svg" sizes="32x32">
<link href="css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
		<header class="header" style="background: url(img/header<?php echo(rand(0,4)); ?>.png) no-repeat; background-size: 100%;">
		<div class="header-border">
			<div class="background-tagline">
				<p class="tagline">Работаем для вас!</p>
			</div>
		</div>
<?php include("header.php"); ?>
	</header>
<section class="block4" >
	<h1 class="block-text">Новости</h1>
		<div class="block-content">
			<?php foreach($important_news as $item): ?>
			<div class="block-card">
				<div class="block-card-img">
					<img src="img/news/img_news" alt="">
				</div>
				<div class="block-content-text">
					<h2 class="card-title"><?=$item["title_news"]?></h2>
					<p class="card-text"><?=$item["text_news"]?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="block-content">
			<?php foreach($unimportant_news as $item): ?>
			<div class="block-card">
				<div class="block-card-img">
					<img src="img/news/img_news" alt="">
				</div>
				<div class="block-content-text">
					<h2 class="card-title"><?=$item["title_news"]?></h2>
					<p class="card-text"><?=$item["text_news"]?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
</section>
<?php include("footer.php"); ?>
</body>
</html>
