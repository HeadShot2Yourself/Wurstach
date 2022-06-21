<?php
    require "database.php";
    $db = new Database();

    $sql = "SELECT * FROM Wurstach.Anons ORDER BY ID_Anons ASC";
    $parm = array();
    $anons = $db->get_all($sql, $parm);
?>


<!DOCTYPE html>
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
<section class="block">
	<h1 class="block-text">Галерея</h1>
	<div class="gallery-content">
		<img src="img/gallery/<?php echo(rand(1,5)); ?>.png" alt="">
		<img src="img/gallery/<?php echo(rand(1,5)); ?>.png" alt="">
		<img src="img/gallery/<?php echo(rand(1,5)); ?>.png" alt="">
	</div>
	<div class="gallery-content">
		<img src="img/gallery/<?php echo(rand(1,5)); ?>.png" alt="">
		<img src="img/gallery/<?php echo(rand(1,5)); ?>.png" alt="">
		<img src="img/gallery/<?php echo(rand(1,5)); ?>.png" alt="">
	</div>
</section>
<section class="block2" >
	<h1 class="block-text2">Объявления</h1>
		<div class="block-content">
			<?php foreach($anons as $item): ?>
			<div class="block-card">
				<div class="block-card-img">
					<img src="img/anons/<?=$item["Anons_img"]?>" alt="">
				</div>
				<div class="block-content-text">
					<h2 class="card-title"> <?=$item["Anons_title"]?></h2>
					<p class="card-text"><?=$item["Anons_text"]?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
</section>
<section class="block">
	<h1 class="block-text">Специальное предложение</h1>
	<div class="anonce">
		<p class="anonce-text">Для проживающих в  ЖК «Wurstach» действует специальная акция - услуги паркинга по сниженной цене. Не стоит задумываться о том, где оставить свою машину. Цена с учетом скидок: Стоимость одного часа 150 рублей, от 5 часов стоимость одного часа - 50 рублей. Ночь (11 часов) - 500 рублей.</p>
		<img src="img/Parking.jpg" alt="">
	</div>
</section>
<section class="block3">
	<h1 class="block-text2" id="contacts">Контакты</h1>
	<div class="block-contacts">
		<p>Москва, ЖК «Wurstach» на 1-й Квесисской ул., дом 9 (строительный адрес – вл. 9-13, стр. 1, 2)</p>
		<p>Жилой комплекс «Wurstach» – двухсекционный жилой дом класса «Бизнес +» на 139 квартир с 2-уровневой подземной автостоянкой на 193 машино-места.</p>
		<p>От шума трасс территория надёжно защищена первой линией домов. Дополнительную шумоизоляцию квартирам обеспечивают эффективные конструктивные решения – глубокие лоджии и остекление с использованием алюминиевых профилей ведущего немецкого производителя – компании Schüco.</p>
		<p>Здесь можно укрыться от городской суеты и при этом вести динамичный образ жизни. Собственная огороженная и охраняемая территория новостройки на Квесисской обеспечивает жителям комфорт и безопасность, а сформированная в районе инфраструктура наполняет жизнь в комплексе гармоничной целостностью.</p>
		<p>Продажи квартир в ЖК «Карамель» осуществляются по договорам уступки прав в рамках 214-ФЗ.</p>
		<p>Девелопер проекта – ООО «Wurstach Investment».</p>
		<p>Дом введён в эксплуатацию в октябре 2016 г.</p>
	</div>
</section>
<?php include("footer.php"); ?>
	<script src="js/animation.js"></script>
	<script src="js/animation2.js"></script>
</body>
</html>
