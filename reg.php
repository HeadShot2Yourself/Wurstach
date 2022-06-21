<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wurstach - Registragion</title>
<link rel="icon" href="img/Logo2.svg" sizes="32x32">
<link href="css/style.css" rel="stylesheet" type="text/css"> 
</head>
<body>
<!--	Шапка сайта-->
		<header class="header" style="background: url(img/header<?php echo(rand(0,4)); ?>.png) no-repeat; background-size: 100%;">
		<div class="header-border">
			<div class="background-tagline">
				<p class="tagline">Работаем для вас!</p>
			</div>
		</div>
<div class="form">
  <form action="#" method="POST">
    <h1 class="block-text3">Регистрация</h1>
    <p class="insert_text"></p>
    <input class="insert" name="Second_Name_Tenant" required pattern="^[а-яА-Я]+$" placeholder="Фамилия (только кириллица)" type="text" autocomplete="off"/>
    <p class="insert_text"></p>
	<input class="insert" name="First_Name_Tenant" required pattern="^[а-яА-Я]+$" placeholder="Имя (только кириллица)" type="text" autocomplete="off"/>
    <p class="insert_text"></p>
    <input class="insert" name="Middle_Name_Tenant" required pattern="^[а-яА-Я]+$" placeholder="Отчество (только кириллица)" type="text" autocomplete="off"/>
    <p class="insert_text"></p>
	<input class="insert" name="email_tenant" placeholder="email" type="email" autocomplete="off"/>
    <p class="insert_text"></p>
	<input class="insert" name="password_tenant" placeholder="Пароль" type="password" autocomplete="off"/>
    <p class="insert_text"></p>
    <input type="submit" class="submit" value="Отправить" onclick="alertFunction()"/>
  </form>
</div>
<?php include("header.php"); ?>
	</header>
<!--	Подвал сайта-->
<footer class="footer">
<!--	Логотип-->
	<div class="footer-logo"><img src="../Сайт/img/Logo2.svg" alt=""></div>
<!--		Текстовые ссылки-->
	<div class="footer-text"><a href="#">Правовая информация</a></div>
	<div class="footer-text">
		<nav>		
			<ul>
				<li>
					<a href="">О компании</a> 
					<a href="">Прайс-лист</a>
					<a href="">Новости</a>
					<a href="">Подача заявки</a>
				</li>
			</ul>
		</nav>
	</div>
	<div class="footer-text"><a href="#">+7 (999) 888-77-66</a></div>
</footer>
</body>
<!--Конец-->
</html>