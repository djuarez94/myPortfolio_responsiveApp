<!doctype html>
<html lang="en">
<head>
  <title>Web Development</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="Assets/css/styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
				Web Development
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
					My time at Mt. Sierra College has also introduced me to web design and computer programming. Ever since I got my hands wet in the design and programming fields, I have become increasingly attached to my work. I have a constant thirst to learn as much as I can about computer programming/web design.
				</p>										
			</div>
		</div>

		<div class="parallax2 text-center" id="myWork">
			<h3 id="parallaxTextTitle2">
				My Work
			</h3>
		</div>
		<div class="row photo">
			<div class="text-center">
				<h3>
					Positive Quote Machine Generator
				</h3>
			</div>
				<div class="text-center star" id="workImages">
					<a href="https://djuarez94.github.io/randomQuoteMachine/"><img src="Assets/img/frontEndProj/positivequotemachine_ss-u75197-fr.jpg" alt=""></a>
				</div>
				
		</div>

		<div class="parallax2 text-center" id="contactMe">
			<h3 id="parallaxTextTitle2">
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
		<div class="row text-center">
			<a href="https://www.linkedin.com/in/david-juarez-915270117" target="_blank"><i id='socialIcons' class="fa fa-linkedin-square" style="color:#83848B; font-size: 3em; opacity: .5;"></i></a>
			<a href="https://www.freecodecamp.com/djuarez94" target="_blank"><i id='socialIcons' class="fa fa-free-code-camp" aria-hidden="true" style="padding-right: .25em; padding-left: .25em; color:#83848B; font-size: 3em; opacity: .5;"></i></a>
			<a href="https://github.com/djuarez94" target="_blank"><i id='socialIcons' class="fa fa-github-square" style="font-size:3em; color:#83848B; opacity: .5;"></i></a>
		</div>


		

	</body>

	<script type="text/javascript" src="Assets/js/jquery-1.11.3.min.js"></script>
	<script src="Assets/js/subPages.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</html>



