<?php
if (isset($_POST['logout']) && trim($_POST['logout']) != '') {
    setcookie("c_user" , '' , time()-50000, '/');
    $logged = false;
    header("Location: index.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
<head>
  <title>Logout</title>
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
		<div class="row text-center" id="loginForm">
			<form method="post" action="logout.php" id="loginForm2">
				<ul>
					<li>
						<input type="submit" name="logout" value="Logout">
					</li>
				</ul>
			</form>
		</div>
	</body>

	<script type="text/javascript" src="Assets/js/jquery-1.11.3.min.js"></script>
	<script src="Assets/js/script.js"></script>
</html>		