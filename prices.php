<?php
    session_start();
    require "database.php";
    $db = new Database();

    $sql = "SELECT * FROM Wurstach.Prices LIMIT 7";
    $parm = array();
    $prices = $db->get_all($sql, $parm);
?>


<!doctype html>
<html>
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
<table class="iksweb">
<thead>
<tr>
	<th>Комнат</th>
	<th>Этаж</th>
	<th>Площадь (м^2)</th>
	<th>Цена (В ₽)</th>
</tr>
</thead>
<tbody>
<?php foreach($prices as $item): ?>
<tr>
	<td><?=$item["Rooms"]?></td>
	<td><?=$item["Floors"]?></td>
	<td><?=$item["Area"]?></td>
	<td><?=$item["Price"]?></td>
</tr>
<?php endforeach; ?>
</tbody>
</table>
<?php include("header.php"); ?>
	</header>
<?php include("footer.php"); ?>
</body>
</html>
