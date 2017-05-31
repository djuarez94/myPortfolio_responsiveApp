<?php

// require_once 'cookie_login.php';
//
// if ($logged == true) {
//     echo $userArray['username'] . " is logged in";
// } else {
//     echo "User not logged in";
// }

$feedback =''; //empty until there is feedback.

if (isset($_POST['name']))
{
	/*-------------------------------------
	| Initialize Variables
	-------------------------------------*/
	$to = "davidjuarez1411@gmail.com";
	$subject = "Portfolio Contact";

	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	/*-------------------------------------
	| Validation
	-------------------------------------*/
	if ($name == '' || $email == '' || $subject == '' || $message == '')
	{
		$feedback = 'Fill out all the fields';
	}
	else
	{
		/*-------------------------------------
		| Compose
		-------------------------------------*/
		$body = '
			Hi! My name is ' . $name . ' and my subject is  ' . $subject . '. <br><br>

			' . $message . '<br>

			Sincerely,<br>
			' . $name . '<br>
			P.S. Oh yeah, my email is ' . $email . '.
		';

		/*-------------------------------------
		| Make it look like a real eamil
		-------------------------------------*/
		$headers = "From: davidjuarez1411@gmail.com" . "\r\n";
		$headers .= "Reply-To: ". strip_tags($_POST['req-email']) . "\r\n";
		// $headers .= "CC: susan@example.com\r\n";
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";


		/*-------------------------------------
		| Send the email
		-------------------------------------*/
		if (!mail($to, $subject, $body, $headers))
		{
			$feedback = 'We were unable to send from our hosted server.';
		}
		else
		{
			$feedback = 'Message Sent from our servers. Let\'s hope it gets through the mail servers!';
		}
	}
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Web Development</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
	<body>

<?php include "nav2.php" ?>
<?php include "nav.php" ?>
		<div class="parallax text-center">
			<h3 id="parallaxTextTitle">
				Graphic Design
			</h3>
		</div>
		<div id="aboutMe">
			<div class="text-center">
				<img id="myPhoto" src="Assets/img/myPhoto.jpg" width="290px" alt="">
				<h3 id="titleText">
					<u>David Juarez</u>
				</h3>
				<h3>
					Graphic Designer
					<br>&<br>
					Web Developer
				</h3>

				<p class="star" id="GDpara">
					Welcome! I am David, and I am beginning my senior year at Mt. Sierra College where I am persuing my Bachelor's Degree in Graphic Design. What made me go down the road of a Graphic Designer was my love for drawing. I began drawing from a young age and this eventually evolved into becoming a hobby that I love to do. Now I want to use my passion for drawing in order to communicate with others visually through my work.
				</p>
			</div>
		</div>
		<div class="parallax2 text-center" id="myWork">
			<h3 id="parallaxTextTitle2">
				My Work
			</h3>
		</div>
		<div class="photo" id="myWork">
			<div class="text-center">
				<h3>
					Digital Painting
				</h3>
			</div>
				<div class="col-md-3 text-center star" id="workImages">
					<img src="Assets/img/cupPainting/Still Life_new.jpg" alt="">
				</div>
				<div class="col-md-3 text-center star" id="workImages">
					<img class="lime" src="Assets/img/limePainting/DES230_DavidJuare_Wk7_StillLife_new.jpg" alt="">
				</div>
				<div class="col-md-3 text-center star">
					<img id="salma" src="Assets/img/salmaHayek/DES231_DJuarez_PortaitPainting_Wk06-1_new.jpg" alt="">
				</div>
				<div class="col-md-3 text-center star" id="workImages">
					<img src="Assets/img/skullPainting/DES231_DJuarez_ExeSkullPainting_Wk04_R1_new.jpg" alt="">
				</div>
		</div>

		<div class="photo" id="myWork">
			<div class="text-center">
				<h3 id="titleText">
					<h3>
						Illustrations
					</h3>
				</h3>
			</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/illustrations/robotBody copy_new.png" alt="">
				</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/illustrations/robotHead_new.png" alt="">
				</div>
		</div>

		<div class="photo" id="myWork">
			<div class="text-center">
				<h3 id="titleText">
					<h3>
						Posters
					</h3>
				</h3>
			</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/posters/DES231_DJuarez_Movie Poster_new.jpg" alt="">
				</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/posters/musicPoster_new.jpg" alt="">
				</div>
		</div>


		<div class="photo" id="myWork">
			<div class="text-center">
				<h3 id="titleText">
					<h3>
						Logo Design
					</h3>
				</h3>
			</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/logos&Branding/goSip_logo copy_new.png" alt="">
				</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/logos&Branding/logoPackaging copy_new.png" alt="">
				</div>
		</div>
		<div class="photo" id="myWork">
			<div class="text-center">
				<h3 id="titleText">
					<h3>
						Interactive Design
					</h3>
				</h3>
			</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/interactiveDesign/appScreens_1_new.jpg" alt="">
				</div>
				<div class="col-md-6 text-center star" id="workImages">
					<img src="Assets/img/interactiveDesign/appScreens_2_new.jpg" alt="">
				</div>
		</div>

		<div class="parallax3 text-center" id="contactMe">
			<h3 id="parallaxTextTitle2">
				Contact  Me
			</h3>
		</div>

		<?php if (!empty($feedback)) : ?>
			<div class="alert alert-info">
				<?php echo $feedback; ?>
			</div>
		<?php endif; ?>

		<div id="contactMe" class="text-center">
			<form method="post" action="graphicDesign.php#contactMe" class="form-horizontal  text-left">
				<div class="form-group text-left">
   					<label for="name">Name:</label>
    				<input name="name" type="name" class="form-control" id="name" placeholder= "Who will I be communicating with?">
  				</div>
  				<div class="form-group text-left">
   					<label for="email">Email:</label>
    				<input name="email" type="email" class="form-control" id="email" placeholder= "What is your email?">
  				</div>
  				<div class="form-group text-left">
   					<label for="subject">Subject:</label>
    				<input name="subject" type="text" class="form-control" id="subject" placeholder= "What is your email about?">
  				</div>
  				<div class="form-group text-left">
   					<label for="message">Message:</label>
					<textarea rows="4" cols="50" id="GDmessage" name="message" style="width:100%" placeholder= "Type message here..." ></textarea>
  				</div>
  				<input id="button" type="submit" value="Submit" name="submit">
			</form>
		</div>
		<footer>
			<div class="email">
				<i class="fa fa-envelope" aria-hidden="true" style="font-size: 2em;"></i>
				<a href="mailto:davidjuarez1411@gmail.com"><p>davidjuarez1411@gmail.com</p></a>
			</div>
			<div class="number">
				<i class="fa fa-mobile" aria-hidden="true" style="font-size: 2.5em;"></i>
				<a href="tel:1-626-257-8499"><p>626.257.8499</p></a>
			</div>
			<div class="text-center">
				<a href="https://www.linkedin.com/in/david-juarez-915270117" target="_blank" ><i id='socialIcons' class="fa fa-linkedin-square" style="color:#fff; font-size: 3em; opacity: .5;"></i></a>
				<a href="https://www.freecodecamp.com/djuarez94" target="_blank" ><i id='socialIcons' class="fa fa-free-code-camp" aria-hidden="true" style="padding-right: .25em; padding-left: .25em; color:#fff; font-size: 3em; opacity: .5;"></i></a>
				<a href="https://github.com/djuarez94" target="_blank" ><i id='socialIcons' class="fa fa-github-square" style="font-size:3em; color:#fff; opacity: .5;"></i></a>
			</div>
		</footer>
		<a href='#' class="back-to-top" style="display: inline;">
			<i class="fa fa-arrow-circle-up"></i>
		</a>
	</body>

	<!-- <script src="Assets/js/subPages.js"></script>
	<script src="Assets/js/jquery-3.1.1.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="Assets/js/subPages.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</html>