<!DOCTYPE html>

<?php
ob_start();
session_start();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Logowanie</title>
    <link rel="stylesheet" href="css/loginPage.css">
</head>
<body>

<nav class= "navigation" >
    <ul class= "left" >
        <?php
$array=array(
 array("index.php","Jak zacząć ?"),
 array("pricelist.html","Cennik"),
 array("contact.html","Mam pytanie"),
 array("loginPage.html","Logowanie"),
 array("supersite.php", "Superstrona"));
		foreach($array as $value)
		{
			print("<li class= \" active \"  ><a href= \" ".$value[0]." \" >".$value[1]."</a></li>");
        }
        ?>
    </ul>
</nav>

<div class = "container form-signin">
    <?php
	
	$array=array(
	 array("login","haslo"),
	 array("admin","admin"));
	
    $msg = '';

    if (isset($_POST['login']) && !empty($_POST['username'])
        && !empty($_POST['password'])) {

        if ($_POST['username'] == 'Pawel' &&
            $_POST['password'] == '1234') {
            $_SESSION['valid'] = true;
            $_SESSION['timeout'] = time()+600;
            $_SESSION['username'] = 'Pawel';

            echo 'Wpisałeś poprawny login i hasło';
        }else {
            $msg = 'Zły login lub hasło';
        }
    }
    ?>
</div> <!-- /container -->



<div class="login-page">
    <div class="form" >
        <form class="login-form" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <input type = "text" class = "form-control" name = "username" placeholder = "Pawel" required autofocus>
            <input type = "password" class = "form-control" name = "password" placeholder = "1234" required>
            <button type = "submit" name = "login">Zaloguj się</button>
        </form>

        Kliknij tu aby zresetować sesje <a href = "logout.php" tite = "Logout">Session.
    </div>


    <br><br><br><br><br><br><br>
</div>


<script type="text/javascript" src="js/login.js" ></script>
</body>
</html>