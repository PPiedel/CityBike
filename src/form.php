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
      $surnameErr = "Only letters and white space allowed"; 
    }
  }

  #name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
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
