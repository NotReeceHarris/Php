<?php

if (isset($_POST["submit"])) {
  $uid = $_POST["uid"];
  $password = $_POST["pwd"];

  require_once "dbh.inc.php";
  require_once "func.inc.php";

  if (emptyInputLogin($uid, $password) !== false) {
    header("location: ../login.php?error=emptyInput");
    exit();
  }

  loginUser($conn, $uid, $password);

} else {
  header("location: ../login.php");
  exit();
}
