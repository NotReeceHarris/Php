<?php
  include_once "nav.php"
 ?>


  <div>
    <h1>Welcome</h1>
    <p>This is my very creative website, ok maybe not. let me explain im not a front end developer im not good at making creative websites however i am good at backend development.</p>
    <p>to understand more about why i created this check out the <a href="about.php">about</a> page there is everything you need to know there.</p> <br>

    <?php
    if (isset($_SESSION["userUID"])) {
      echo "<p>Your are logged in as " . $_SESSION["userUID"] . "!</p>";
    }
    else {
      echo "<p>You are not logged in!</p>";
    }
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "none") {
        echo "<p>Notification: You have sucessfully loged in</p>";
      }
    }
     ?>

  </div>


 <?php
   include_once "footer.php"
  ?>
