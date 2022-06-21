<div class="form">
  <form action="#" method="POST">
    <h1 class="block-text3">Авторизация</h1>
    <p class="insert_text"></p>
	<input class="insert" name="email_tenant" placeholder="email" type="email" autocomplete="off" required/>
    <p class="insert_text"></p>
	<input class="insert" name="password_tenant" placeholder="Пароль" type="password" autocomplete="off" required/>
    <p class="insert_text"></p>
    <input type="submit" class="submit" value="Авторизироваться" onclick="alertFunction()"/>
  </form>
  <?php
    if ($_SESSION['message'] != 1) {
    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
    }
    unset($_SESSION['message']);
?>
</div>