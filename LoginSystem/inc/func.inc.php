<?php

function emptyInputSignup($name, $email, $uid, $pwd, $pwdRepeat) {
  $result;
  if (empty($name) || empty($email) || empty($uid) || empty($pwd) || empty($pwdRepeat)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function invalidUid($uid) {
  $result;
  if (!preg_match("/^[a-zA-Z0-9]*$/", $uid)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
function invalidEmail($email) {
  $result;
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $result = true;
  }
  else {
    $result = false;
  }
  return $result;
}
function matchPassword($pwd, $pwdRepeat) {
  $result;
  if ($pwd !== $pwdRepeat) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function uidExists($conn, $uid, $email) {
  $sql = "SELECT * FROM users WHERE usersUID = ? OR usersEMAIL = ?;";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtFailed");
    exit();
  }
  mysqli_stmt_bind_param($stmt, "ss", $uid, $email);
  mysqli_stmt_execute($stmt);
  $resultData = mysqli_stmt_get_result($stmt);

  if ($row = mysqli_fetch_assoc($resultData)) {
    return $row;
  }
  else {
    $result = false;
    return $result;
  }

  mysqli_stmt_close($stmt);
}
function createUser($conn, $name, $email, $uid, $pwd) {
  $sql = "INSERT INTO users (usersNAME, usersEMAIL, usersUID, usersPWD) VALUES (?, ?, ?, ?);";
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
    header("location: ../signup.php?error=stmtFailed");
    exit();
  }

  $hashed_password = password_hash($pwd, PASSWORD_DEFAULT);

  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $uid, $hashed_password);
  mysqli_stmt_execute($stmt);
  mysqli_stmt_close($stmt);
  header("location: ../login.php?error=none");
  exit();
}
function emptyInputLogin($uid, $pwd) {
  $result;
  if (empty($uid) || empty($pwd)) {
    $result = true;
  } else {
    $result = false;
  }
  return $result;
}
function loginUser($conn, $uid, $pwd) {
  $uidExist = uidExists($conn, $uid, $uid);
  if ($uidExist === false) {
    header("location: ../login.php?error=wrongLogin");
    exit();
  }

  $pwdHashed = $uidExist["usersPWD"];
  $checkPassword = password_verify($pwd, $pwdHashed);
  if ($checkPassword === false) {
    header("location: ../login.php?error=wrongLogin");
    exit();
  }
  else if ($checkPassword === true) {
    session_start();
    $_SESSION["userID"] = $uidExist["usersID"];
    $_SESSION["userUID"] = $uidExist["usersUID"];
    header("location: ../index.php?error=none");
    exit();
  }
}
