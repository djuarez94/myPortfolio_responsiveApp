<?php

require 'orm_functions.php';
require 'error_reporting.php';

if (isset($_POST['register']) && trim($_POST['register']) != '') {
    if (isset($_POST['username']) && isset($_POST['password']) && 
           trim($_POST['username']) != '' && trim($_POST['password']) != '') {

        $username = escape_quotes($_POST['username']);
        $password = escape_quotes(hash("sha512", $_POST['password']));


        // In case user doesn't enter a name
   $name = '';
        if ($_POST['name']) {
            $name = escape_quotes(strip_tags($_POST['name']));
        }

        $check = get_all_info("SELECT * FROM users WHERE username='$username'");

        // Get the first instance of the user and store it into an array
        $userArray = $check->fetch_assoc();

        if (count($userArray) > 0) {
           die("That username already exists! Try creating another username. 
                       <a href='register.php'>Back</a>");
        }
        if (!ctype_alnum($username)) {
         die("Username contains special characters! Only numbers and 
                       letters are permitted. <a href='register.php'>Back</a>" );
        }
        if (strlen($username) > 20) {
      die("Username must contain less than 20 characters. 
                       <a href='register.php'>Back</a>" );
        }

        if (strlen($username) < 5) {
            die("Username must contain at least 6 characters. 
                       <a href='register.php'>Back</a>" );
        }

        $salt = hash("sha512", rand() . rand() . rand());

        insert_or_update_info("INSERT INTO users (username, password, name, salt) 
            VALUES ('$username', '$password', '$name', '$salt')");

        setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
        setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");

        die("Your account has been created and you are now logged in.");

    } else {
        echo "Please enter a username and password.";
    }
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Juarez Design : Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/css/styles.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body id="loginBG">
    <div class="row text-center" id ="mainNav1" >
      <a href="index.php"><img src="Assets/img/Logo/topHalf_Logo.png" alt=""></a>
    </div>
    <div class="row text-center" id="loginForm">
      <form method="post" action="" id="registerForm">
        <ul>
          <li>
            <label id="username2" for="username">Name</label>
            </br>
            <input type="text" name="name" id="name2" value="" placeholder="Type Name" />
          </li>
            </br>
          <li>
            <label id="username2" for="username">Username</label>
            </br>
            <input type="text" name="username" id="username" value="" placeholder="Type Username" />
          </li>
            </br>
          <li>
            <label id="password2" for="password">Password</label>
            </br>
            <input type="password" name="password" id="password" value="" placeholder="Type Password" />
          </li>
            </br>
          <li>
            <input id ="registerBtn" type="submit" name="register" value="Register">
          </li>
        </ul>
      </form>
    </div>
  </body>

  <script type="text/javascript" src="Assets/js/jquery-1.11.3.min.js"></script>
  <script src="Assets/js/script.js"></script>
</html>