<!DOCTYPE html>

<?php
ob_start();
session_start();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
	<link rel="stylesheet" href="css/loginPage.css">
<?php
if ($_SESSION['valid']==true&&$_SESSION['timeout']-time()>=0)
{
	print("<title>Zmiana danych</title>");
}
else
{
	print("<title>Rejestracja</title>");
}
    
    
print("</head>");

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

<nav class= "navigation" >
    <ul class= "left" >
        <?php
$array=array(
 array("index.php","Jak zacząć ?"),
 array("pricelist.php","Cennik"),
 array("contact.php","Mam pytanie"),
 array("loginPage.php","Logowanie"),
 array("rejestracja.php","Rejestracja"),
 array("supersite.php", "Superstrona"));
   if ($_SESSION['valid']==true&&$_SESSION['timeout']-time()>=0)
   {
	   $array=array(
		 array("index.php","Jak zacząć ?"),
		 array("pricelist.php","Cennik"),
		 array("contact.php","Mam pytanie"),
		 array("loginPage.php","Logowanie"),
		 array("rejestracja.php","Zmiana hasła"),
		 array("supersite.php", "Superstrona"));
   }
		foreach($array as $value)
		{
			print("<li class= \" active \"  ><a href= \" ".$value[0]." \" >".$value[1]."</a></li>");
        }
        ?>
    </ul>
</nav>

<div class = "container form-signin">
    <?php
	
	$servername = "localhost";
	$username = "root";
	$password = "pass";
	$database_name = "psw";

	
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	$msg = '';
	$tempLogin='';
	$tempPass='';

    //database selection
    $db_select = mysqli_select_db($conn,$database_name);
    if (!$db_select) {
        die("Database selection failed: " . mysqli_error($conn));
    }

	if ($_SESSION['valid']==true&&$_SESSION['timeout']-time()>=0)
   {
	   $tempLogin=$_SESSION['username'];
       $tempPass=$_SESSION['password'];
   }
   if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])&&preg_match("/^[a-zA-Z0-9]*$/",$_POST['username']))
   {
	   if ($_SESSION['valid']==true&&$_SESSION['timeout']-time()>=0&&$_POST['username']==$_SESSION['username'])
	   {
		   $sql =  "UPDATE Users SET password=\"".$_POST['password']."\" WHERE login=\"$tempLogin\";";
           if(mysqli_query($conn, $sql))
		   {
			   echo "Hasło zmienione ".$sql;
		   }
		   else
		   {
			   echo mysqli_error($conn);
		   }
	   }
	   else
	   {
		   $sql = "INSERT INTO Users (login,password) VALUES('".$_POST['username']."','".$_POST['password']."');";
			mysqli_query($conn, $sql);
	   }
   }
    ?>
</div> <!-- /container -->



<div class="login-page">
    <div class="form" >
        <form class="login-form" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <input type = "text" class = "form-control" name = "username" maxlength="30" placeholder = <?php echo $tempLogin; ?> required autofocus>
            <input type = "password" class = "form-control" name = "password" maxlength="30" placeholder = <?php echo $tempPass; ?> required>
            <button type = "submit" name = "login">Zatwierdź dane</button>
            <?php echo $msg; ?>
        </form>
    </div>


    <br><br><br><br><br><br><br>
</div>


<script type="text/javascript" src="js/login.js" ></script>
</body>
</html>