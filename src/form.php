<?php
// define variables and set to empty values
$surnameErr = $nameErr = $emailErr = $phoneErr = $monthErr = $messageErr =$countryErr =$genderErr =$whoAreYouErr ="";

$surname = $name = $email = $phone = $month = $message = $country = $gender = $whoAreYou ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  #surname
  if (empty($_POST["surname"])) {
    $surnameErr = "Surname is required";
  } else {
    $surname = test_input($_POST["surname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
      $surnameErr = "Imię : tylko litery i spacje dozwolone."; 
    }
  }

  #name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Nazwisko : tylko litery i spacje dozwolone."; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }
  
  #phone
    $phone = test_input($_POST["tel"]);
    if (!preg_match("/^[0-9 ]{9}$/",$phone)) {
      $phoneErr = "Numer telefonu musi się składać z 9 cyfr."; 
    }
	
	#month
  if (empty($_POST["month"])) {
    $monthErr = "Miesiac jest wymagany";
  } else{
     $month = test_input($_POST["month"]);
      if (!preg_match("/^[a-zA-Z ]*$/",$month)) {
      $monthErr = "Miesiac : tylko litery dozwolone."; 
    }
  }

 
  
  if (empty($_POST["message"])) {
    $messageErr = "Wiadomość jest pusta";
  } else {
    $comment = test_input($_POST["message"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Brakuje płci";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
print($surnameErr."<br>");
print($nameErr."<br>");
print($emailErr."<br>");
print($phoneErr."<br>");
print($monthErr."<br>");
print($messageErr."<br>");
print($countryErr."<br>");
print($genderErr."<br>");
print($whoAreYouErr."<br>");
die();
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }
?>
