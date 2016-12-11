<?php
require 'orm_functions.php';
require 'error_reporting.php';
?>

<!doctype html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
  <body id="loginBG">
    <?php include "nav2.php" ?>
    <div class="text-center" id="loginForm">
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
    <?php
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
           die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>That username already exists! Try creating another username. 
                       <a href='register.php'>Back</a><h4>");
        }
        if (!ctype_alnum($username)) {
         die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Username contains special characters! Only numbers and letters are permitted. <a href='register.php'>Back</a><h4>" );
        }
        if (strlen($username) > 20) {
      die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Username must contain less than 20 characters. <a href='register.php'>Back</a><h4>" );
        }

        if (strlen($username) < 5) {
            die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Username must contain at least 6 characters. 
                       <a href='register.php'>Back</a><h4>" );
        }

        $salt = hash("sha512", rand() . rand() . rand());

        // setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
        // setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");

        insert_or_update_info("INSERT INTO users (username, password, name, salt) 
            VALUES ('$username', '$password', '$name', '$salt')");


        die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Your account has been created and you are now logged in.<h4>");

        header("Location: index.php");
      exit;

    } else {
        echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Please enter a username and password.<h4>";
    }
}
    ?>
  </body>

  <script type="text/javascript" src="Assets/js/jquery-1.11.3.min.js"></script>
  <script src="Assets/js/script.js"></script>
</html>