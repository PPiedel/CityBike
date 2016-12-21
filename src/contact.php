<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="contact">
    <meta name="description" content="Kontakt">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/main.css">
    <title>Skontaktuj sie</title>
</head>
<?php
	$cookie_name = "kolor";
	if(!isset($_COOKIE[$cookie_name])) 
	{
		$cookie_value = "niebieski";
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
	else
	{
		if(strcmp($_COOKIE[$cookie_name],"niebieski")==0)
		{
			print("<body style=\"background-color:#00A0FF\">");
		}	
		else if(strcmp($_COOKIE[$cookie_name],"czerwony")==0)
		{
			print("<body style=\"background-color:#FA5E5E\">");
		}
		else if(strcmp($_COOKIE[$cookie_name],"zielony")==0)
		{
			print("<body style=\"background-color:#FFFFFF\">");
		}
	}
	?>
 <nav class="navigation">
         <ul class="left">
             <li class="active" ><a href="index.php">Jak zacząć ? </a></li>
             <li><a href="pricelist.php">Cennik</a></li>
             <li><a href="contact.php">Mam pytanie</a></li>
			 <li><a href="loginPage.php">Logowanie</a></li>
			 <?php 
			 ob_start();
			session_start();
			 if ($_SESSION['valid']==true&&$_SESSION['timeout']-time()>=0)
			 {
				 print("<li><a href=\"rejestracja.php\">Zmiana danych</a></li>");
			 }
			 else
			 {
				 print("<li><a href=\"rejestracja.php\">Rejestracja</a></li>");
			 }
				 ?>
             <li><a href="supersite.php">Superstrona</a></li>
         </ul>
 </nav>
<form id="contactForm" method="post" action="form.php">
    <div >
        <h1>Skontaktuj się! </h1>
    </div>

    <div class="form-group">
        <p ><b>Imię*</b></p>
        <input type="text" id="surname" name="surname" placeholder="Imię" required >
    </div>

    <div class="form-group">
        <p ><b>Nazwisko</b></p>
        <input type="text" id="name" name="name" placeholder="Nazwisko">
    </div>

    <div class="form-group">
        <p><b>Email*</b></p>
        <label>
            <input type="email" id="email" name="email" placeholder="Wpisz swój email" required> <i>example@gmail.com</i>
        </label>

    </div>

    <div class="form-group">
        <p><b>Telefon</b></p>
        <label>
            <input type="tel" id="tel" name="tel" placeholder="Nr telefonu"> <i>999999999</i>
        </label>

    </div>

    <div class="form-group">
        <p><b>Miesiac urodzin</b></p>
        <input list="monthsList" id="months" name="month" placeholder="Miesiac urodzin">

        <datalist id="monthsList">
            <option value="Styczen">
            <option value="Luty">
            <option value="Marzec">
            <option value="Kwiecien">
            <option value="Czerwiec">
            <option value="Lipiec">
            <option value="Sierpien">
            <option value="Wrzesien">
            <option value="Pazdziernik">
            <option value="Listopad">
            <option value="Grudzien">
        </datalist>
    </div>

    <div class="form-group">
        <p><b>Wiadomość*</b></p>
        <textarea id="message" name="message" rows="3" maxlength="200" placeholder="Twoja wiadomość" required></textarea>
    </div>

    <div class="form-group">
        <p><b>Twoj kraj</b></p>
        <label>
            <select name="country">
                <optgroup label="Europa">
                    <option value="1">Polska</option>
                    <option value="2">Niemcy</option>
                    <option value="3">Wielka Brytania</option>
                    <option value="4">Włochy</option>
                    <option value="5">Rosja</option>
                </optgroup>
                <optgroup label="Azja">
                    <option value="6">Kazachstan</option>
                    <option value="7">Bangladesz</option>
                    <option value="8">Azerbejdżan</option>
                </optgroup>
                <optgroup label="Inne">
                    <option value="9">Barbados</option>
                    <option value="10">Bhutan</option>
                </optgroup>
            </select></label>
    </div>

    <div class="form-group">
        <p><b>Twoja plec</b></p>
        <label>
            <input type="radio" name="gender" value="male" checked>
        </label> Male<br>
        <label>
            <input type="radio" name="gender" value="female">
        </label> Female<br>
        <label>
            <input type="radio" name="gender" value="other">
        </label> Other
    </div>

    <div class="form-group">
        <p><b>Kim jestes ? </b></p>
        <label>
            <input type="checkbox" name="vehicle" value="Bike">
        </label>Jestem programista<br>
        <label>
            <input type="checkbox" name="vehicle" value="Car" checked>
        </label>Jestem studentem<br>
    </div>

    <div class="form-group">
        <button id="submit-btn"  name="button1id"  >Wyślij</button>
        <button id="clear-btn" name="clear-btn" >Wyczyść</button>
    </div>
</form>


 <script type="text/javascript" src="js/contact.js" ></script>
</body>
</html>
