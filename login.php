<?php 

require 'orm_functions.php';
require 'error_reporting.php';
	
?>

<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
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
			<form method="post" action="" id="loginForm2">
				<ul>
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
						<input id='submit2' type="submit" name="login" value="Login">
					</li>
				</ul>
			</form>
		</div>
		<div class="text-center">
			<h4 id="registerQuote">Don't have an account? Sign up <a href="register.php"><b>here!</b></a></h4>
		</div>
		<?php
			if (isset($_POST['login']) && trim($_POST['login']) != "") {
	if (isset($_POST['username']) && isset($_POST['password']) && trim($_POST['username']) != "" && trim($_POST['password']) != "") {

		$username = escape_quotes($_POST['username']);
		$password = escape_quotes(hash("sha512", $_POST['password']));

		$user = get_all_info("SELECT * FROM users WHERE username ='$username'");

		//Get the first instance of the user and store it into an array
		$userArray = $user->fetch_assoc();


		if (count($userArray) <= 0) {
			die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>That username does not exist! Try making <u>$username</u> today by signing up <a href='register.php'>here!</a><h4>");
		}
		if ($userArray['password'] != $password) {
			die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Incorrect Password! Please retype password and username.");
		}

	$salt = hash("sha512", rand() . rand() . rand());

		setcookie("c_user", hash("sha512", $username), time() + 24 * 60 * 60, "/");
		setcookie("c_salt", $salt, time() + 24 * 60 * 60, "/");

		$userID = $userArray['id'];
		insert_or_update_info("UPDATE users SET salt='$salt' WHERE id='$userID'");

		header("Location: index.php");
    	exit;
	}
	else {
		echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Please enter Username and Password.</h4>";
	}
}
		?>
	</body>

	<script type="text/javascript" src="Assets/js/jquery-1.11.3.min.js"></script>
	<script src="Assets/js/script.js"></script>
</html>



