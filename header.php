

	  <nav class="navigation">
			<ul class="nav">
            <li class="navigation1"><a href="company.php">О компании</a>
            <a href="prices.php">Прайс-лист</a>
            <a href="news.php">Новости</a></li>
			<li><a href="index.php"><div class="logo"></div></a></li>
            <li class="navigation1"><?php session_start(); if (!empty($_SESSION['user'])) {?>
				<a class="" href="form.php"> Подача заявки </a>
				<?php }
				else { ?>
				<a class="" href="login.php"> Авторизация </a>
				<?php } ?>
            <a href="Documents.php">Документация</a>
			<a href="http://localhost/index.php#contacts">Контакты</a></li>
            </ul>
		</nav>