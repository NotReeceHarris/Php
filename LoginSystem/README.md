
<p align=center>

  <img src="https://i.imgur.com/u479LPz.png" alt="Api filtering" />

  <br>
  <br>
  <span>Secure login system, code example.<br></span>
  <br>
  <a target="_blank" href="https://www.python.org/downloads/" title="Python version"><img src="https://img.shields.io/badge/php-8.0.1-green.svg"></a>
</p>

## Configer config file
Within the inc folder there will be a file named `dbh.inc.php`
you will find database name, address, login info chage to make them true

## Create correct database
1. create a phpmyadmin/sql database names `logincreds`
2. create the correct table
```sql
CREATE TABLE users (
    usersID int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    usersNAME varchar(128) NOT NULL,
    usersEMAIL varchar(128) NOT NULL,
    usersUID varchar(128) NOT NULL,
    usersPWD varchar(128) NOT NULL
);
```

## Features within the login system
* 1. sqli protection 
```php
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
} // this is done by making pre make statements to check the request
```
* 2. this login system has 8 error checks wich include (emptyInputs, invalidUid, invalidEmail, passwordMatching, userAlreadyExists, etc)
* 3. hashing passwords OBVIOUSLY it wouldnt be a login system if it didn't
* 4. session checks
* 5. header and footer includes using php
