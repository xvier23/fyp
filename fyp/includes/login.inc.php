<?php

if (isset($_POST["submit"])) {

  // Get Form Data
  $username = $_POST["uid"];
  $pwd = $_POST["pwd"];


  require_once "dbh.inc.php";
  require_once 'functions.inc.php';

  // Clear input if Error
  if (emptyInputLogin($username, $pwd) === true) {
    header("location: ../login.php?error=emptyinput");
		exit();
  }

  // Login if No Error
  loginUser($conn, $username, $pwd);

} else {
	header("location: ../login.php");
    exit();
}
