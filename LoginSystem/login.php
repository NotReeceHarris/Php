<?php
  include_once "nav.php"
 ?>


    <form action="inc/login.inc.php" method="post">
      <h2> Login page</h2>
      <input type="text" name="uid" placeholder="Email / Username"> <br>
      <input type="password" name="pwd" placeholder="Pasword"> <br>
      <button type="submit" name="submit">Login</button>
    </form>

    <?php
    if (isset($_GET["error"])) {
      if ($_GET["error"] == "none") {
        echo "<p>Sign up success now you can login</p>";
      } else if ($_GET["error"] == "emptyInput") {
        echo "<p>You need to fill out all options</p>";
      } else if ($_GET["error"] == "wrongLogin") {
        echo "<p>Incorrect login</p>";
      }
    }
     ?>


<?php
  include_once "footer.php"
?>
