<?php
  session_start();
 ?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Main Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">


</head>
<body>
  <header id="nav-wrapper">
    <nav id="nav">
      <div class="nav left">
        <span class="gradient skew"><h1 class="logo un-skew"><a href="#home"> Reeces Login System </a></h1></span>
      </div>
      <div class="nav right">
        <a href="index.php" class="nav-link active"><span class="nav-link-span"><span class="u-nav">Home</span></span></a>
        <a href="about.php" class="nav-link"><span class="nav-link-span"><span class="u-nav">About</span></span></a>
        <?php
        if (isset($_SESSION["userUID"])) {
          echo "<a> </a>";
          echo "<a href=\"inc/logout.inc.php\" class=\"nav-link\"><span class=\"nav-link-span\"><span class=\"u-nav\">Log Out</span></span></a>";
          echo "<a> </a>";
          echo "<a>| " . $_SESSION["userUID"] . "</a>";
        }
        else {
          echo "<a href=\"login.php\" class=\"nav-link\"><span class=\"nav-link-span\"><span class=\"u-nav\">Login</span></span></a>";
          echo "<a> </a>";
          echo "<a href=\"signup.php\" class=\"nav-link\"><span class=\"nav-link-span\"><span class=\"u-nav\">Sign up</span></span></a>";
        }
         ?>
         
      </div>
    </nav>
  </header>
