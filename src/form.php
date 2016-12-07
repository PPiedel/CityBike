<?php
// define variables and set to empty values
$surnameErr = $nameErr = $emailErr = $genderErr = $websiteErr = "";

$surname = $name = $email = $phone = $month = $message = $country = $gender = $whoAreYou ="";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
  $name = test_surname($_POST["surname"]);
  $lastname = test_input($_POST["name"]);
  $email = test_input($_POST["email"]);
  $phone = test_input($_POST["phone"]);
 

  function test_surname($data){
    if (empty($data) {
    $nameErr = "Name is required";
    } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
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
}

?>
