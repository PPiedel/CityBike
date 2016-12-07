<?php
// define variables and set to empty values
$name = $lastname = $email = $phone = $month = $message = $country = $gender = $whoAreYou ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
  $name = test_input($_POST["name"]);
  $lastname = test_input($_POST["lastname"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
  $month = test_input($_POST["month"]);
  $message = test_input($_POST["message"]);
  $country = test_input($_POST["country"]);
  $gender = test_input($_POST["gender"]);
  $whoAreYou = test_input($_POST["whoAreYou"]);
  
  function test_input($data) 
  {
	  return $data;
  }
  
  /*
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed";
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteErr = "Invalid URL";
}
}
*/
?>