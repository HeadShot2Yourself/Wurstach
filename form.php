<?php
    require "database.php";
    $db = new Database();

	$sql = "SELECT * FROM wurstach.feedback_category ORDER BY ID_Feedback_category ASC";
    $parm = array();
    $important_news = $db->get_all($sql, $parm);


    if(isset($_POST["fio_feedback"]) && isset($_POST["email_feedback"]) && isset($_POST["Feedback_category"]) && isset($_POST["Text_message"])){
        $sql = "INSERT INTO wurstach.feedback (Text_message, fio_feedback, email_feedback, Feedback_category) VALUES (:Text_message,:fio_feedback, :email_feedback, :Feedback_category)";
        $parm = array(
            "Text_message" => $_POST["Text_message"],
            "fio_feedback" => $_POST["fio_feedback"],
            "email_feedback" => $_POST["email_feedback"],
            "Feedback_category" => $_POST["Feedback_category"]  
        );
        $db->add($sql, $parm);
        header("Location: /");
}
//     if(isset($_POST["fio_feedback"]) && isset($_POST["email_feedback"]) && isset($_POST["Feedback_category"]) && isset($_POST["Text_message"])){
//         require "db.php";
//         $sql = "INSERT INTO feedback  (Text_message, fio_feedback, email_feedback, Feedback_category) VALUES (:Text_message,:fio_feedback, :email_feedback, :Feedback_category)";
//         $query = $pdo->prepare($sql);
//         $query->execute(array(
//             "Text_message" => $_POST["Text_message"],
//             "fio_feedback" => $_POST["fio_feedback"],
//             "email_feedback" => $_POST["email_feedback"],
//             "Feedback_category" => $_POST["Feedback_category"]        
//         ));
//         header("Location: /");
// }
?>

<!doctype html>
<html lang="ru">
<head>
<meta charset="utf-8">
<title>Wurstach</title>
<link rel="icon" href="img/Logo2.svg" sizes="32x32">
<!--Подключение css-->
<link href="css/style.css" rel="stylesheet" type="text/css"> 
</head>
<body>
<!--	Шапка сайта-->
		<header class="header" style="background: url(img/header<?php echo(rand(0,4)); ?>.png) no-repeat; background-size: 100%;">
		<div class="header-border">
<!--			Задний фон для слогана-->
			<div class="background-tagline">
<!--				Слоган-->
				<p class="tagline">Работаем для вас!</p>
			</div>
		</div>
<!--			Форма подачи заявок-->
<div class="form">
  <form action="#" method="POST">
<!--	  Заголовок текста-->
    <h1 class="block-text3">Форма подачи заявки</h1>
    <p class="insert_text"></p>
    <input class="insert" name="fio_feedback" placeholder="ФИО" type="text" autocomplete="off" required>
    <p class="insert_text"></p>
    <input class="insert" name="email_feedback" placeholder="Почта" type="email" autocomplete="off" required>
<!--    Выбор категорий-->
	  <select class="select" name="Feedback_category" required>
		<option label="Категории заявок"></option>
		<?php foreach($important_news as $item): ?>
		<option> <?=$item["Feedback_category"]?> </option>
		<?php endforeach; ?>
      </select>
    <p class="insert_text"></p>
	<textarea class="insert1" name="Text_message" placeholder="Текст заявки" autocomplete="off"></textarea>
    <input type="submit" class="submit" value="Отправить" onclick="alertFunction()"/>
  </form>
</div>
<!--			панель навигации-->
<?php include("header.php"); ?>
	</header>
<!--	Подвал сайта-->
<?php include("footer.php"); ?>
</body>
<!--Конец-->
</html>