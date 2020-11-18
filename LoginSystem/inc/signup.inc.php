<?php

if (isset($_POST["submit"])) {

  $name = $_POST["fullName"];
  $email = $_POST["email"];
  $uid = $_POST["uid"];
  $pwd = $_POST["pwd"];
  $pwdRepeat = $_POST["pwdRepeat"];

  require_once 'dbh.inc.php';
  require_once 'func.inc.php';

  if (emptyInputSignup($name, $email, $uid, $pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=emptyInput");
    exit();
  }
  if (invalidUid($uid) !== false) {
    header("location: ../signup.php?error=invalidUid");
    exit();
  }
  if (invalidEmail($email) !== false) {
    header("location: ../signup.php?error=invalidEmail");
    exit();
  }
  if (matchPassword($pwd, $pwdRepeat) !== false) {
    header("location: ../signup.php?error=passwordsDontMatch");
    exit();
  }
  if (uidExists($conn, $uid, $email) !== false) {
    header("location: ../signup.php?error=usernameTaken");
    exit();
  }
  createUser($conn, $name, $email, $uid, $pwd);
} else {
  header("location: ../signup.php");
  exit();
}
