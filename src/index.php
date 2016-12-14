<!doctype html>

<html class="no-js" lang="pl">
<head>
    <meta charset="utf-8">
    <title>City Bike</title>
    <meta name="description" content="Wroclawski rower miejski">
    <meta name="keywords" content="rower, wroclaw, miejski"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Pawel Piedel, Ernest Dziemidowicz"/>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="css/main.css">


	<style type= "text/css">
         h1      {font-family; halvetica,sans-serif; color:blue; margin-left:6ex; font-size:300% }
         h4      {font-size:30px; text-align:center;}
         p       {font-size:16pt;
                 font-family:arial;
				 padding: 5px;
				 }
         .listy  {font-size:2em}
         </style>

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
			print("<body style=\"background-color:#00E060\">");
		}
	}
	if (isset($_POST['execute']))
	{
		//echo ("$_POST['question']");
		$cookie_name = "kolor";
		$cookie_value = "czerwony";
		setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	}
	//setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
	?>
 
 
 
 
 
 <nav class= "navigation" >
 <ul class= "left" >
 <?php
$array=array(
 array("index.php","Jak zacząć ?"),
 array("pricelist.html","Cennik"),
 array("contact.html","Mam pytanie"),
 array("loginPage.php","Logowanie"),
 array("supersite.php", "Superstrona"));
		foreach($array as $value)
		{
			print("<li class= \" active \"  ><a href= \" ".$value[0]." \" >".$value[1]."</a></li>");
		}
 ?>
 </ul>
</nav>



<div class="container">
	<h1>Jak zacząć ?</h1>
    <hr> <!-- horizontal line -->
    <div id="1">

        <div class="slider-container">
            <ul id="slides">
                <li class="slide showing"><img style="margin-left:6ex;" width="700" height="470"  alt="1" src="img/1.jpg">
                </li>
                <li class="slide"><img style="margin-left:6ex;" width="700" height="470" src="img/2.jpg" alt="2"></li>
                <li class="slide"><img style="margin-left:6ex;" width="700" height="470" src="img/3.jpg" alt="3"></li>
                <li class="slide"><img style="margin-left:6ex;" width="700" height="470" src="img/4.jpg" alt="4"></li>
            </ul>
            <div class="buttons">
                <button style="margin-left:6ex;" class="controls" id="previous">Previous</button>
                <button class="controls" id="pause">Pause</button>
                <button class="controls" id="next">Next</button>
            </div>

        </div>

        <article><h4>
            <br><br><br><br><br>&nbsp;&nbsp;<b>Rowery miejskie</b> to świetne rozwiązanie sprawy komunikacji.
            Możesz wypożyczyć rower na jednej stacji, pojechać w wybrane
            miejsce i oddać przy kolejnej stacji.
			Dzięki elektrozamkom proces wynajmu znacznie się uprości. Podstawowe czynności wyglądają dokładnie tak samo, jak do tej pory. Wystarczy podejść do terminala i na klawiaturze komputera nacisnąć przycisk „Wypożycz”. Następnie zalogować się, podając numer telefonu komórkowego i PIN nadany podczas rejestracji i podać numer roweru, który chcemy wynająć. Tutaj nowość! Wybrany rower zostanie zwolniony automatycznie.
			Zapięcie szyfrowe, z którego wrocławianie korzystali do tej pory, stanie się przydatnym dodatkiem, kiedy użytkownik będzie zabezpieczał rower na czas przerwy podczas wynajmu (np. na kawę czy zakupy) bądź podczas zwrotu na stacji, na której zajęte będą wszystkie elektrozamki. Dlatego warto zapisać sobie kod do zamka szyfrowego, który zostaje podany na wyświetlaczu w czasie wypożyczania. Jeżeli zdarzy się, że rower na stacji jest zabezpieczony linką – wystarczy odblokować ją właśnie za pomocą tego kodu.
			Wypożyczanie będzie jeszcze wygodniejsze, gdy połączymy swoje konto użytkownika WRM z dowolną kartą zbliżeniową (np. Urban Card). Aby zintegrować kartę z systemem, wystarczy za pierwszym razem przyłożyć ją do czytnika stacji, a następnie podać numer telefonu i PIN. Od tego momentu przy wypożyczaniu można logować się już za pomocą tej karty.
        </h4></article>
        <div id="dynamicImageContainer">

        </div>


        <article><h4>
                &nbsp;&nbsp;Aby zacząć wystarczy się zarejestrować i przy stacji
                wpisać <b>indywidualny kod</b>, który pozwili na wypożyczenie roweru.
				Kolejna nowość, wynikająca z wprowadzenia elektrozamków, dotyczy momentu zwrotu roweru. Żeby to zrobić – wystarczy tylko wstawić rower do elektrozamka. Prawidłowy zwrot zostanie potwierdzony sygnałem dźwiękowym. W takim przypadku, żadne inne czynności przy stacji nie są już wymagane. Jeśli na stacji nie ma wolnego miejsca, przypinamy rower zamkiem szyfrowym do innego roweru lub ucha stojaka, przetasowujemy cyfry, podchodzimy do terminala, przyciskamy „Zwrot” i postępujemy zgodnie ze wskazówkami podanymi na wyświetlaczu. To taka sama forma zwrotu, z jakiej wrocławianie korzystali wcześniej.
        </h4></article>
    </div>
    <hr> <!-- horizontal line -->

    <div id="2" class="listy">
        <ul>


            <li><details>
                <summary>Stacje działające:</summary>

                <ul>
                    <li>Grabiszyńska</li>
                    <li>Cmentarz</li>
                    <li>Plac Grunwaldzki</li>
                    <li>Jeszcze inna</li>
                </ul>
            </details></li>
            <li><details>
                <summary>Stacje planowane:</summary>
                <ul>
                    <li>Hotel Wrocław</li>
                    <li>Hallera</li>
                    <li>Kolejna stacja</li>
                </ul>
            </details></li>

        </ul>
    </div>

</div>

 <div class="form-group">
     <p><b>Wersja strony</b></p>
     <!--
	 <label>
         <select name='question' method="post">
             <option id="n" value="1" name="n" selected="selected">Biały i niebieski</option>
             <option id="c" value="2" name="c" >Biały i czerwony</option>
             <option id="z" value="3" name="z" >Biały i zielony</option>
         </select></label>
		 -->
		 
		 <form action="" method="post">
			<input type="checkbox" name="pyt1[]" value="1" selected="selected">Biały i niebieski <br>
			<input type="checkbox" name="pyt1[]" value="2">Biały i czerwony <br>
			<input type="checkbox" name="pyt1[]" value="3">Biały i zielony <br>
			<input type="submit">
			</form>
			

			<?php

			if (isset($_POST['pyt1']))
			{
				echo 'zaznaczone checkbox\'y z wartosciami: ' . implode($_POST['pyt1'], ', ');
			}
			?>
		 
		 <form action="index.php" method="post">
				<input type="hidden" name="execute" value="true">
				<input type="submit" value="Zatwierdź">
				</form>
 </div>

<footer>
    <br><br><br>
    <hr> <!-- horizontal line -->
    <h6>&nbsp;&nbsp;&copy; 2016 by Paweł Piędel &amp; Ernest Dziemidowicz. All Right Reserved.</h6>
</footer>

 <script type="text/javascript" src="js/main.js" ></script>

</body>
</html>
