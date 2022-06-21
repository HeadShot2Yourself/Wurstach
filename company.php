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
	<div class="company-text">
      <div>
        <p>Вкус жизни – это непередаваемая смесь чувственных ощущений, наслаждения, эмоционального восприятия действительности. Это сама жизнь во всех её проявлениях. Это радость общения с родными и друзьями, первый плач новорождённого и мудрый совет убелённого сединами отца. Это бодрящий воздух зимнего утра, золотые горошины мимозы, разогретые летним солнцем травы и багрянец осеннего парка. Это нега после приятного сновидения. Это удовольствие от хорошо проделанной работы и сладостное ничегонеделание. Это учащенное сердцебиение на горнолыжном спуске и замирание сердца от экспозиции Моне в МоМА.</p>
      </div>
	<div>
        <p>Это чувство полёта, когда всё получается и складывается. Это биение двух сердец в унисон, когда любимый и любящий человек рядом. Ещё многое неназванное, для каждого своё, привносит в нашу жизнь разнообразие, радость, красоту и тепло, пробуждая в нас вкус жизни. Но целое слагается из частей. И существенную часть того, что мы называем «вкусом жизни», составляет домашний очаг, как символ самой жизни. И когда речь заходит о своём доме, в котором мы предвкушаем комфортную и полную удовольствий жизнь, только лучшее достаточно хорошо!</p>
      </div>
	</div>
<?php include("header.php"); ?>
</header>
<section class="block">
	<h1 class="block-text">Портфолио</h1>
	
		<div class="block-content">
			<div class="block-card1">
				<div class="block-card-img">
					<img src="img/anons/01_0001.jpg" alt="">
				</div>
				<div class="block-content-text">
					<h2 class="card-title">Достижение самый благоустроенный район</h2>
				</div>
			</div>
			<div class="block-card1">
				<div class="block-card-img">
					<img src="img/anons/01_0004.jpg" alt="">
				</div>
				<div class="block-content-text">
					<h2 class="card-title">Первый ЖК созданный по немецким технологиям</h2>
				</div>
			</div>
			<div class="block-card1">
			<div class="block-card-img">
				<img src="img/anons/01_0005.jpg" alt="">
			</div>
				<div class="block-content-text">
					<h2 class="card-title">Первый ЖК с интегрированной системой умного дома</h2>
				</div>
			</div>
		</div>

</section>
<section class="block3" >
	<h1 class="block-text2">Спонсоры</h1>
	<div class="sponsors">
		<img src="img/Sponsors/Spons1.png" alt="">
		<img src="img/Sponsors/Spons2.png" alt="">
		<img src="img/Sponsors/Spons3.png" alt="">
	</div>
	<div class="sponsors">
		<img src="img/Sponsors/Spons4.png" alt="">
		<img src="img/Sponsors/Spons5.png" alt="">
		<img src="img/Sponsors/Spons6.png" alt="">
	</div>
	</section>
<?php include("footer.php"); ?>

</body>
</html>
