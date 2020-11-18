<?php
  include_once "nav.php"
 ?>

  <div class="particles-js">
    <form action="inc/signup.inc.php" method="post">
      <h2> Sign Up page</h2>
      <input type="text" name="fullName" placeholder="Full Name"> <br>
      <input type="text" name="email" placeholder="Email"> <br>
      <input type="text" name="uid" placeholder="Username"> <br>
      <input type="password" name="pwd" placeholder="Pasword"> <br>
      <input type="password" name="pwdRepeat" placeholder="Confirm Pasword"> <br>
      <button type="submit" name="submit">Submit</button>
    </form>

    <?php
      if (isset($_GET["error"])) {
        if ($_GET["error"] == "emptyInput") {
          echo "<p>You didn't fill out all options</p>";
        }
        else if ($_GET["error"] == "invalidUid") {
          echo "<p>Username is invalid</p>";
        }
        else if ($_GET["error"] == "invalidEmail") {
          echo "<p>That is not a valid email</p>";
        }
        else if ($_GET["error"] == "passwordsDontMatch") {
          echo "<p>Password doesnt match</p>";
        }
        else if ($_GET["error"] == "usernameTaken") {
          echo "<p>Sorry... that username/eamil is taken</p>";
        }
        else if ($_GET["error"] == "stmtFailed") {
          echo "<p>Oops an error has appeared</p>";
        }
        else {
          echo "";
        }
      }
     ?>

  </div>

  <?php
    include_once "footer.php"
   ?>
