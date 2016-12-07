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
if(!empty($surnameErr))
	print($surnameErr."<br>");
if(!empty($nameErr))
	print($nameErr."<br>");
if(!empty($emailErr))
	print($emailErr."<br>");
if(!empty($phoneErr))
	print($phoneErr."<br>");
if(!empty($monthErr))
	print($monthErr."<br>");
if(!empty($messageErr))
	print($messageErr."<br>");
if(!empty($countryErr))
	print($countryErr."<br>");
if(!empty($genderErr))
	print($genderErr."<br>");
if(!empty($whoAreYouErr))
	print($whoAreYouErr."<br>");
if(empty($surnameErr)&&empty($nameErr)&&empty($emailErr)&&empty($phoneErr)&&empty($monthErr)&&empty($messageErr)&&empty($countryErr)&&empty($genderErr)&&empty($whoAreYouErr))
{
	print("Wszystko jest cudownie<br>");
}
die();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>
