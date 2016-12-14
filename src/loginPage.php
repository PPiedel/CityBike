<!DOCTYPE html>
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
 array("index.php","Jak zacząć"),
 array("pricelist.html","Cennik"),
 array("contact.html","Mam pytanie"),
 array("supersite.html", "Superstrona"));
		foreach($array as $value)
		{
			print("<li class= &quot active &quot  ><a href= &quot ".$value[0]." &quot >".$value[1]."</a></li>");
        }
        ?>
    </ul>
</nav>



<div class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="Imię"/>
            <input type="password" placeholder="Hasło"/>
            <input type="text" placeholder="Email"/>
            <button>Utwórz</button>
            <p class="message">Zarejestrowany ?  <a href="#">Zaloguj się</a></p>
        </form>
        <form class="login-form">
            <input type="text" placeholder="Login"/>
            <input type="password" placeholder="Hasło"/>
            <button>Zaloguj się</button>
            <p class="message">Nie jesteś zarejestrowany ?  <a href="#">Utwórz konto.</a></p>
        </form>
    </div>


    <br><br><br><br><br><br><br>
</div>


<script type="text/javascript" src="js/login.js" ></script>
</body>
</html>