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
         h1{text-shadow: 2px 2px rgba(48, 56, 41, 0.22);font-family: "Maven Pro", serif;text-align: center;}
         h4      {font-size:30px; text-align:center;}
         p       {font-size:16pt;
                 font-family:arial;
				 padding: 5px;
				 text-align: center;
				 }
         .listy  {font-size:2em}
         </style>

 </head>
 <body>
 <nav class="navigation">
         <ul class="left">
             <li class="active" ><a href="index.php">Jak zacząć ? </a></li>
             <li><a href="pricelist.html">Cennik</a></li>
             <li><a href="contact.html">Mam pytanie</a></li>
             <li><a href="supersite.html">Superstrona</a></li>
         </ul>
 </nav>

<?php
// define variables and set to empty values
$surnameErr = $nameErr = $emailErr = $phoneErr = $monthErr = $messageErr =$countryErr =$genderErr =$whoAreYouErr ="";

$surname = $name = $email = $phone = $month = $message = $country = $gender = $whoAreYou ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  #surname
  if (empty($_POST["surname"])) {
    $surnameErr = "Imię jest obowiązkowe";
  } else {
    $surname = test_input($_POST["surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
      $surnameErr = "Imię może składać sie tylko z liter"; 
    }
  }

  #name
  if (empty($_POST["name"])) {
    $nameErr = "Nazwisko jest obowiązkowe";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Nazwisko może składać sie tylko z liter"; 
    }
  }
  
  #email
  if (empty($_POST["email"])) {
    $emailErr = "Email jest obowiązkowy";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Błędny format Email"; 
    }
  }
  
  #phone
    $phone = test_input($_POST["tel"]);
    if (!preg_match("/^[0-9 ]{9}$/",$phone)) {
      $phoneErr = "Numer telefonu musi się składać z 9 cyfr."; 
    }
	
	#month
  if (empty($_POST["month"])) {
    $monthErr = "Miesiac jest obowiązkowy";
  } else {
    $month = test_input($_POST["month"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$month)) {
      $monthErr = "Miesiąc może składać sie tylko z liter"; 
    }
  }


  #message
  if (empty($_POST["message"])) {
    $messageErr = "Wiadomość jest pusta";
  } else {
    $comment = test_input($_POST["message"]);
  }

  #gender
  if (empty($_POST["gender"])) {
    $genderErr = "Brakuje płci";
  } else {
    $gender = test_input($_POST["gender"]);
  }


}
if(empty($surnameErr)&&empty($nameErr)&&empty($emailErr)&&empty($phoneErr)&&empty($monthErr)&&empty($messageErr)&&empty($countryErr)&&empty($genderErr)&&empty($whoAreYouErr))
{
	print("<h1>Dziękujemy za wysłanie zgłoszenia</h1>");
}
else
{
	print("<h1>Niestety, ale:</h1>");
}
if(!empty($surnameErr))
	print("<p>".$surnameErr."</p>");
if(!empty($nameErr))
	print("<p>".$nameErr."</p>");
if(!empty($emailErr))
	print("<p>".$emailErr."</p>");
if(!empty($phoneErr))
	print("<p>".$phoneErr."</p>");
if(!empty($monthErr))
	print("<p>".$monthErr."</p>");
if(!empty($messageErr))
	print("<p>".$messageErr."</p>");
if(!empty($countryErr))
	print("<p>".$countryErr."</p>");
if(!empty($genderErr))
	print("<p>".$genderErr."</p>");
if(!empty($whoAreYouErr))
	print("<p>".$whoAreYouErr."</p>");

print("<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>");
die();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>


</body>
</html>
