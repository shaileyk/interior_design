<?php
var_dump($_POST);
die();
//if ($_SERVER["REQUEST_METHOD"] == "POST")
    //{
    // collect value of input field
  //      echo "welcome";
    
//}
// define variables and set to empty values
$usernameErr = $EmailErr = $passwordErr = $confirmErr = "";
$username = $Email = $password = $confirm = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $usernameErr = "Name is required";
  } else {
    $username = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

?>