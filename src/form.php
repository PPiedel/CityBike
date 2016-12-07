<?php
// define variables and set to empty values
$surnameErr = $nameErr = $emailErr = $genderErr = $websiteErr = "";

$surname = $name = $email = $phone = $month = $message = $country = $gender = $whoAreYou ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = test_name($_POST["surname"]);
  $lastname = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
 

  function test_name($data){
    if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
    $nameErr = "Only letters and white space allowed";
    }
  }

  function test_last_name($data){
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
    }
  }

  function test_email($data){
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
    }
  }

  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}





$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}
}

?>
