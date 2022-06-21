<?php
    session_start();
    // $_SESSION['user'] = 1;
    $_SESSION['message'] = 1;
    require "db.php";
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Wurstach - Authorization</title>
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
<?php include("header.php"); ?>
	</header>
        <?php
        if(isset($_POST["email_tenant"]) && isset($_POST["password_tenant"])) {
            $sql = "SELECT * FROM wurstach.personal_account WHERE email_tenant = :email_tenant AND BINARY password_tenant = :password_tenant";
            $query = $pdo->prepare($sql);
            $query->execute(array(
                "email_tenant" => $_POST["email_tenant"],
                "password_tenant" => md5($_POST["password_tenant"])));
            if($query->rowCount() == 1) {
                $user = $query->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['user'] = [ 
                        "ID_Tenant" => $user['ID_Tenant'],
                        "email_tenant" => $user['email_tenant'],
                        "password_tenant" => $user['password_tenant']
                    ];
                header("Location: index.php");
            }
            else { 
                $_SESSION['message'] = 'Неверный логин или пароль';
                include("login2.php");   
            }
        }
        else {
            include("login2.php");
        }
    ?>   
<?php include("footer.php"); ?>
</body>
<!--Конец-->
</html>