<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Super strona</title>
    <link rel="stylesheet" href="css/supersite.css">
	
	<style type= "text/css">
	h1	{font-family: halvetica sans-serif; color:blue; margin-left:6ex; font-size:300%}
	h4	{font-size:30px;}
	p	{font-size:16pt;
		font-family:arial;}
	.listy	{font-size:2em}
			
	nav{font-weight:bold;
		color: white;
		border:solid royalblue;
		text-align: center;
		height: 40px;
		font-size:25px;
		background-color: royalblue;
		position: fixed;
		width: 200px;}
	nav ul{display: none;
			list-style: none;
			position: absolute;
			left: 0px;
			top: 30px;
			width: 200px; 
			text-align: left;
			margin: 0;}
	nav:hover > ul {display:block;}
	nav > ul li{background-color: yellow;
				color: black;
				padding: 10px 20px;
				text-align: center;
				position: relative; 
				text-decoration: none;
				width: 200px;
				float: none;}
	nav > ul ul {left: 200px; 
				top: -1px;}
	nav > ul li:hover{background-color:powderblue;
						color: #fff;
						text-decoration: none;}
	nav > ul li a{padding: 10px 20px;
					text-decoration: none;}
	nav > ul li ul{display: none;}
	nav > ul li:hover ul{display: block;}
	a {text-decoration: none;}
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
			print("<body style=\"background-color:#FFFFFF\">");
		}
	}
	
	
	$servername = "localhost";
	$username = "root";
	$password = "pass";
	$database_name = "psw";

	// Create connection
	$conn = mysqli_connect($servername, $username, $password);

    //database selection
    $db_select = mysqli_select_db($conn,$database_name);
    if (!$db_select) {
        die("Database selection failed: " . mysqli_error($conn));
    }
	
	$sql="SELECT * FROM Users;";
	$result = mysqli_query($conn,$sql) or die(mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) 
			{

                //w sumie tu powinien byc tylko jeden wiersz.... ???
                while($row = mysqli_fetch_assoc($result)) 
				{
                    echo $row["login"]."<br>";
					echo $row["password"]."<br>";
					echo "-----------------------------------------------"."<br><br>";
                }
            }
	?>

<?php
	ob_start();
	session_start();
   if ($_SESSION['valid']==true&&$_SESSION['timeout']-time()>=0)
   {
	   //echo $_SESSION['timeout']-time();
	   echo "Witaj ".$_SESSION['username'];
   }
   else
   {
	   $_SESSION['valid'] = false;
	   header("Location: index.php");
	   echo "coś sie zepsuło";
	   die();
   }
?>


<nav>Menu
        <ul>
            <li><a href="index.php">Jak zacząć ? </a></li>
            <li><a href="pricelist.php">Cennik</a></li>
            <li><a href="contact.php">Mam pytanie</a></li>
			<li><a href="loginPage.php">Logowanie</a></li>
            <li>Inne
				<ul>
					<li><a href="supersite.php">Superstrona</a></li>
					<li><a href="registration.php">Rejestracja</a></li>
				</ul>
			</li>
        </ul>
</nav>

<h1>Super strona</h1>

<form>
    <div class="form-group">
        <p ><b>Kolor</b></p>
        <input type="color" id="color_sw">
    </div>

    <div class="form-group">
        <p ><b>Miesiac</b></p>
        <input type="month" id="month_sw">
    </div>

    <div class="form-group">
        <p ><b>Zakres</b></p>
        <input type="range" id="range_sw" >
    </div>

    <div class="form-group">
        <p ><b>Szukaj</b></p>
        <input type="search" id="search_sw" placeholder="Szukaj">
    </div>

    <div class="form-group">
        <p ><b>Url</b></p>
        <input type="url" id="url_sw" placeholder="Url">
    </div>

    <div class="form-group">
        <br>
        <button id="submit-btn-sw" type="submit" name="button1id" >Wyślij</button>
        <button id="clear-btn-sw" type="reset" name="clear-btn" >Wyczyść</button>
    </div>
</form>

<p id="border1">Tekst obramowany w ramke.</p>

<div id="animated-div">

</div>

<div class="newspaper">
    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.
</div>


    <div class="form-group">
        <p><b>Jaki lubisz gradient?</b></p>
        <label>
            <select>
                <option id="n" value="1">Biały i niebieski</option>
                <option id="c" value="2">Biały i czerwony</option>
                <option id="z" value="3">Biały i zielony</option>
            </select></label>
    </div>
	<hr> <!-- horizontal line -->
	<button id="Zatwierdź">Zatwierdź</button>
	<hr> <!-- horizontal line -->

    <div class="form-group">
        <p><b>Jaki lubisz kolor tekstu?</b></p>
        <label>
            <select>
                <option id="c1" value="1">Czarny</option>
                <option id="s1" value="2">Szary</option>
                <option id="ż1" value="3">Żółty</option>
            </select></label>
    </div>	
	<?php
	$cookie_name = "kolor";
	if(isset($_COOKIE[$cookie_name])) 
	{
		echo "Cookie '" . $cookie_name . "' is set!<br>";
		echo "Value is: " . $_COOKIE[$cookie_name]."<br>";
		
		echo "Name is: " . $_SESSION['username']."<br>";
		echo "Valid is: " . $_SESSION['valid']."<br>";
		echo "Timeout is: " . $_SESSION['timeout']-time()."<br>";
	}
	?>
	 <hr> <!-- horizontal line -->
	 <br><br>


 <script type="text/javascript" src="js/supersite.js" ></script>
</body>
</html>
