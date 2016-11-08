<!doctype html>
<html lang="en">
<head>
  <title>Graphic Design</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
	<body>
		<nav class="navbar navbar-inverse" id="mainNav1">
  				<div class="container-fluid">
   					 <div class="navbar-header">
      					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span>
        					<span class="icon-bar"></span> 
      					</button>
      					<a class="navbar-brand" href="index.php"><img src="Assets/img/Logo/topHalf_Logo.png" alt=""></a>
    				</div>
    				<div class="collapse navbar-collapse" id="myNavbar">
				     	<ul class="nav navbar-nav">
				        	<li class="active"><a id ="about" href="#aboutMe">About Me</a></li>
				        	<li><a id ="work" href="#myWork">My Work</a></li> 
				        	<li><a id ="contact" href="#contactMe">Contact Me</a></li> 
				     	</ul>
    				</div>
  				</div>
			</nav>
			<div class="row text-center" id ="secondNav2">
				<a id="GD" href="graphicDesign.php">Graphic Design</a>
				<a id="WD" href="webDevelopment.php">Web Development</a>
			</div>
		<div class="parallax text-center">
			<h3 id="parallaxTextTitle">
				Graphic Design
			</h3>
		</div>
		<div class="row" id="aboutMe">
			<div class="text-center">
				<img id="myPhoto" src="Assets/img/myPhoto.jpg" width="290px" alt="">
				<h3 id="titleText">
					<u>David Juarez</u>
				</h3>
				<h3>
					Graphic Designer
					</br>&</br> 
					Web Developer
				</h3>

				<p class="star">
					Welcome! I am David, and I am beginning my senior year at Mt. Sierra College where I am persuing my Bachelor's Degree in Graphic Design. What made me go down the road of a Graphic Designer was my love for drawing. I began drawing from a young age and this eventually evolved into becoming a hobby that I love to do. Now I want to use my passion for drawing in order to communicate with others visually through my work.
				</p>										
			</div>
		</div>
		<div class="parallax2 text-center" id="myWork">
			<h3 id="parallaxTextTitle">
				My Work
			</h3>
		</div>
		<div class="row photo" id="myWork">
			<div class="text-center">
				<h3>
					Digital Painting
				</h3>
			</div>
				<div class="col-md-3 text-center star" id="workImages">
					<img src="Assets/img/cupPainting/Still Life_new.jpg" alt="">
				</div>
				<div class="col-md-3 text-center star" id="workImages">
					<img src="Assets/img/limePainting/DES230_DavidJuare_Wk7_StillLife_new.jpg" alt="">
				</div>
				<div class="col-md-3 text-center star" id="salmaHayek">
					<img src="Assets/img/salmaHayek/DES231_DJuarez_PortaitPainting_Wk06-1_new.jpg" alt="">
				</div>
				<div class="col-md-3 text-center star" id="workImages">
					<img src="Assets/img/skullPainting/DES231_DJuarez_ExeSkullPainting_Wk04_R1_new.jpg" alt="">
				</div>
		</div>

		<div class="row photo" id="myWork">
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

		<div class="row photo" id="myWork">
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

		<div class="row photo" id="myWork">
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

		<div class="row photo" id="myWork">
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

		<div class="parallax2 text-center" id="contactMe">
			<h3 id="parallaxTextTitle">
				Contact  Me
			</h3>
		</div>

		<div class="row text-center">
			<form class="form-horizontal  text-left">
				<div class="form-group text-left">
   					<label for="name">Name:</label>
    				<input type="name" class="form-control" id="name" placeholder= "Who will I be communicating with?">
  				</div>
  				<div class="form-group text-left">
   					<label for="email">Email:</label>
    				<input type="email" class="form-control" id="email" placeholder= "What is your email?">
  				</div>
  				<div class="form-group text-left">
   					<label for="pwd">Subject:</label>
    				<input type="password" class="form-control" id="pwd" placeholder= "What is your email about?">
  				</div>
  				<div class="form-group text-left">
   					<label for="message">Message:</label>
    				<!-- <input type="message" class="form-control" id="msg"> -->
					<textarea id="message" name="message" disabled style="width:100%" placeholder= "Type message here..." ></textarea>	
  				</div>
  				<button type="submit" class="btn btn-default">Submit</button>
			</form>
		</div>

	</body>

	<script type="text/javascript" src="Assets/js/jquery-1.11.3.min.js"></script>
	<script src="Assets/js/subPages.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</html>



