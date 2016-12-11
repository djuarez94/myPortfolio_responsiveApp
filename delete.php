<?php 

require 'orm_functions.php';
require 'error_reporting.php';
	
?>

<!doctype html>
<html lang="en">
<head>
  <title>Delete User</title>
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
		<div class="text-center" id="deleteForm">
			<form method="post" action="" id="loginForm2D">
			<h3>Delete User</h3>
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
							<input type="password" name="password" id="password" value="" 	placeholder="Type Password" />
						</li>
						</br>
						<li>
							<input id="submit_delete" type="submit" name="delete" value="Delete">
						</li>
					</ul>
				</form>
		</div>
<?php
			if (isset($_POST['delete']) && trim($_POST['delete']) != '') {
	if (isset($_POST['username']) && isset($_POST['password']) 
		&& trim($_POST['username']) != '' && trim($_POST['password']) != '') {

		$username = escape_quotes($_POST['username']);
		$password = escape_quotes(hash("sha512", $_POST['password']));

				$user = get_all_info("SELECT * FROM users WHERE username='$username'");

				// Get the first instance of the user and store it into an array
				$userArray = $user->fetch_assoc();

				if(count($userArray) <= 0) {
					die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>That username doesn't exist! Please type in the correct username. 
						<a href='delete.php'>Back</a></h4>");
				}
				if ($userArray['password'] != $password) {
					die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Incorrect password! <a href='delete.php'>Back</a></h4>");
				}
				insert_or_update_info("DELETE FROM users WHERE username='$username'");	

				setcookie("c_user" , '' , time()-50000, '/');

	        	$logged = false;

				echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>User has been deleted. <a href='index.php'>Home</a> </h4><br>";

	    		exit;
			}
			else {
			echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Please enter a username and password.</h4>";
			}
		}
?>
		<script type="text/javascript" src="Assets/js/jquery-3.1.1.min.js"></script>
		<script type="text/javascript" src="Assets/js/script.js"></script>
	</body>
</html>