<?php 
require 'orm_functions.php';
require 'error_reporting.php';
?>
<!doctype html>
<html lang="en">
<head>
  <title>Update User</title>
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
		<div class="text-center" >
			<form method="post" action="" id="updateForm">
				<ul>
					<li>
						<label for="old_username">Enter Existing Username</label>
						<br>
						<input placeholder="Existing Username" id="old_username" type="text" name="old_username" value="" />
					</li>
					<li>
						<label for="old_password">Enter Existing Password</label>
						<br>
						<input placeholder="Existing Password" id="old_password" type="password" name="old_password" value="" />
					</li>
					<li>
						<label for="new_username">Enter New Username</label>
						<br>
						<input placeholder="New Username" id="new_username" type="text" name="new_username" value="" />
					</li>
					<li>
						<label for="new_password">Enter New Password</label>
						<br>
						<input placeholder="New Password" id="new_password" type="password" name="new_password" value=""/>
					</li>
					<li>
						<label for="new_name">Enter New Name</label>
						<br>
						<input placeholder="New Name" id="new_name" type="text" name="new_name" value=""/>
					</li>
					<br>
					<li>
						<input placeholder="Existing Password" id='submit2' type="submit" name="update" value="Update">
					</li>
				</ul>
			</form>
		</div>
		<?php
			// Check to see if user has posted the information
if (isset($_POST['update']) && trim($_POST['update']) != '') {
	if (isset($_POST['old_username']) && isset($_POST['old_password']) 
		&& trim($_POST['old_username']) != '' && trim($_POST['old_password']) != '') {

		// Save and check old username and password
		$old_username = escape_quotes($_POST['old_username']);
		$old_password = escape_quotes(hash("sha512", $_POST['old_password']));

		$user = get_all_info("SELECT * FROM users WHERE username='$old_username'");

		// Get the first instance of the user and store it into an array
		$userArray = $user->fetch_assoc();

                if(count($userArray) <= 0) {
			die("That username doesn't exist! Please type in the correct username. 
				<a href='update.php'>Back</a>");
		}
		if ($userArray['password'] != $old_password) {
			die("Incorrect password! <a href='update.php'>Back</a>");
}

$new_name = '';
if ($_POST['new_name']) {
	// Get the existing name if users input the name
	$old_name = $userArray['name'];

	$new_name = escape_quotes(strip_tags($_POST['new_name']));

	insert_or_update_info("UPDATE users SET name='$new_name'
 		WHERE name='$old_name' AND username='$old_username'");

 	echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Name has been updated. Please <a href='login.php'>log in</a> 
        with your new credentials. </h4 ><br>";	
} else {
	echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Since no Name was given, Name is still " . $userArray['name'] . "</h4 ><br>";
}

// Check new username if user put it
if (trim($_POST['new_username']) != '' && isset($_POST['new_username']) ) {
	$new_username = escape_quotes(strip_tags($_POST['new_username']));

	$check = get_all_info("SELECT * FROM users WHERE username='$new_username'");
	// Get the first instance of the user and store it into an array
	$userArray = $check->fetch_assoc();

	if (count($userArray) > 0) {
		die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>That username already exists! Try creating another username. 
			<a href='register.php'>Back</a></h4 >");
	}
	if (!ctype_alnum($new_username)) {
		die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Username contains special characters! Only numbers and letters 
			are permitted. <a href='update.php'>Back</a></h4 >" );
	}
	if (strlen($new_username) > 20) {
		die("<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Username must contain less than 20 characters. 
			<a href='update.php'>Back</a></h4 >" );
	}

	insert_or_update_info("UPDATE users SET username='$new_username'
 		WHERE username='$old_username'");

	echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Username has been updated. Please <a href='login.php'>log in</a> 
            with your new credentials. </h4 ><br>";	
} else {
	echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Since no Username was given, Username is still " 
        . $userArray['username'] . "</h4 ><br>";
}

// Check new password
	if (trim($_POST['new_password']) != '' && isset($_POST['new_password'])) {

		$new_password = escape_quotes(hash("sha512", $_POST['new_password']));

		insert_or_update_info("UPDATE users SET password='$new_password'
	 		WHERE password='$old_password'");

		echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Password has been updated. Please <a href='login.php'>log in</a>
                 with your new credentials. <h4 ><br>";	
	} else {
		echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Since no Password was given, Password remains the same. </h4 ><br>";
	}
}
else {
	echo "<h4 style='color: red; padding-top: 2%; padding-left: 1%; padding-right: 1%;' class='text-center'>Please enter a username and password.</h4 >";
}
}
		?>
	</body>

	<script type="text/javascript" src="Assets/js/jquery-1.11.3.min.js"></script>
	<script src="Assets/js/script.js"></script>
</html>