<!--
Chris McKenna
CIS 166AE
Module 9 Assignment
-->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <title>LoginBox</title>
</head>
<body>

<?php

	// Include LoginBox
  include ('includes/LoginBox.php');

  // Creates new LoginBox object
  $login_box = new LoginBox();
	
	// NO SPACE BEFORE DASH
  $login_box ->SetLabel('Log In');

  // Defines Exception message in case LoginBox can not be displayed
  try
  {
    echo $login_box->DisplayLogin();
    $login_exception = new Exception("LoginBox could not be displayed.");
  }
  catch(Exception $login_exception)
  {
    echo $login_exception->getMessage();
  }

  // Checks login credentials once user hits submit
  if(isset($_POST["submit"])){
		
		// YOU MUST MAKE SURE THIS DOES NOT ERROR BY CHECKING/VALIDATING VARAIBLES
		// $username = $_POST["username"] ?? '';
		// $password = $_POST["password"] ?? '';
		// $login_box->CheckLogin($username, $password);
		// NO SPACE BEFORE DASH
    $login_box ->CheckLogin($_POST["username"], $_POST["password"]);
  }

?>
</body>
</html>
