<footer class="footer">
	<div class="footer-logo"><a href="index.php"><img src="img/Logo2.svg" alt=""></a></div>
    <div class="footer-text"><a href="#">Правовая информация</a></div>
    <div class="footer-text">
        <nav>       
            <ul>
                <li>
                    <a href="">О компании</a> 
                    <a href="">Прайс-лист</a>
                    <a href="">Новости</a>
                    <?php if ($_SESSION['user']) {?>
                    <a href="form.php">Подача заявки</a>
                    <a href="logout.php">Выйти из аккаунта</a>
                    <?php } 
                    else { ?>
                    <a href="login.php">Авторизация</a>
                    <?php }?>
                </li>
            </ul>
        </nav>
    </div>
    <div class="footer-text"><a href="#">+7 (999) 888-77-66</a></div>
</footer>