<?php
session_start();
unset($_SESSION['user']); /* сносим сессию user*/
header('Location: ../index.php'); /* переадресация на форму входа*/
?>