<?php
  include_once "nav.php"
 ?>

 <p>I Created this webpage to demontare that i can do backend development i created this within 1 hour (including tea brakes), i didnt do any css or majot html work because im not good at web design im more intreaded in security and back-end development
 </p>
 <p>&nbsp;
 </p>
 <p>how to setup phpmy admin
 </p>
 <p>
   <img src="imgs/Screenshot 2020-11-18 135842.png" alt="" />
 </p>
 <p>after creating a database edit the file called&nbsp;
   <em>'inc/dbh.inc.php' and change the creds to make the config true,
   </em>
 </p>
 <p>
   <em>once you have saved the config then create colums in your database for mysqli enter
   </em>
 </p>
 <p>&nbsp;
 </p>
 <pre>
 <code>
 <span style="background-color: #333333; color: #ffffff;">
 CREATE TABLE users (
 usersID int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
 usersNAME varchar(128) NOT NULL,
 usersEMAIL varchar(128) NOT NULL,
 usersUID varchar(128) NOT NULL,
 usersPWD varchar(128) NOT NULL);</span>
 <br />
 <br />
 <span style="background-color: #ffffff;">or&nbsp;if&nbsp;your&nbsp;using&nbsp;other&nbsp;softwares&nbsp;make&nbsp;this&nbsp;in&nbsp;order&nbsp;with&nbsp;the&nbsp;correct&nbsp;names
 <br />
 <br />usersID     | auto increment not null max of 11 characters
 <br />usersNAME   | varchar 128 not null
 <br />usersEMAIL  | varchar 128 not null
 <br />usersUID    | varchar 128 not null
 <br />usersPWD&nbsp;   | varchar 128 not null
 <br />
 <br />for&nbsp;more&nbsp;info&nbsp;check&nbsp;the&nbsp;github&nbsp;
 <a href="https://github.com/NotReeceHarris/PhpProjects/tree/main/LoginSystem">HERE
 </a>
 </span>
 </code>
 </pre>


<?php
   include_once "footer.php"
  ?>
