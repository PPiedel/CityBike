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



	
    $msg = '';
    $userFounded = False;

        if (isset($_POST['login']) && !empty($_POST['username']) && !empty($_POST['password'])&&preg_match("/^[a-zA-Z0-9]*$/",$_POST['username'])) {
            $servername = "localhost";
            $username = "root";
            $password = "pass";
            $database_name = "psw";

            // Create connection
            $conn = mysqli_connect($servername, $username, $password);

            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
            }
			
            

            //database selection
            $db_select = mysqli_select_db($conn,$database_name);
            if (!$db_select) {
                die("Database selection failed: " . mysqli_error($conn));
            }

            $query = " SELECT password FROM Users WHERE login =\"".$_POST['username']."\"";
            $result = mysqli_query($conn,$query) or die(mysqli_error($conn));
            if (mysqli_num_rows($result) > 0) {

                //w sumie tu powinien byc tylko jeden wiersz.... ???
                while($row = mysqli_fetch_assoc($result)) {
                    if ($_POST['password']==$row["password"]){
                        $_SESSION['valid'] = true;
                        $_SESSION['timeout'] = time()+600;
                        $_SESSION['username'] = $_POST['username'];
                        $_SESSION['password'] = $_POST['password'];
                        $userFounded = True;
                        echo 'Wpisałeś poprawny login i hasło';
                    }
                }
            } else {
                echo "0 results";
            }
        }
    if ($userFounded==false && !empty($_POST['username'])){
        $msg = 'Zły login lub hasło';
    }

    ?>
</div> <!-- /container -->



<div class="login-page">
    <div class="form" >
        <form class="login-form" role = "form" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method = "post">
            <input type = "text" class = "form-control" name = "username" placeholder = "Pawel" required autofocus>
            <input type = "password" class = "form-control" name = "password" placeholder = "1234" required>
            <button type = "submit" name = "login">Zaloguj się</button>
            <?php echo $msg; ?>
        </form>
    </div>


    <br><br><br><br><br><br><br>
</div>


<script type="text/javascript" src="js/login.js" ></script>
</body>
</html>