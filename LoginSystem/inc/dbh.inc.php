<?php

$server = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "logincreds";

$conn = mysqli_connect($server, $dbUsername, $dbPassword, $dbName);

if (!$conn) {
  die("Connection to server failed" . mysqli_connect_error());
}
