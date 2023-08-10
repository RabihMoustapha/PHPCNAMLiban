	<?php
	session_start();
	if ($_SESSION['isloggedin'] != 1) {
		header("Location:Login.php");
	}
	?>
	<html>

	<head>
		<title>Services</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../Css/Service.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="../Java Script/Service.js" type="text/javascript"></script>
	</head>

	<body>
		<header>
			<h2 class="logo">
			</h2>
			<nav class="navigation">
				<a class="a1" href="Contact.php">CONTACT</a>
				<a class="a1" href="Home.php">HOME</a>
				<a class="a1" href="Main.php">MAIN</a>
				<a class="not-visited">SERVICES</a>
				<a class="a1" href="View.php">VIEW</a>
				<a href="Log-out.php">
					<button class="btnlogin-popup">
						LOGOUT
					</button>
				</a>
			</nav>
		</header>
		<section class="service">
			<div class="content-box">
				<div class="container">
					<h1>Our Services</h1>
					<div class="row service">
						<div class="col-md-3 text-center">
							<div class="icon" onclick="Accept()">
								<i class="fa fa-paint-brush" style="font-size:2em;margin-left:6px;margin-top:10px"></i>
							</div>
							<h3>Web <span>client</span></h3>
							<p>
								Become an client in Game Hub link
							</p>
						</div>
					</div>
					<div class="row service">
						<div class="col-md-3 text-center">
							<div class="icon" onclick="accept()">
								<i class="fa fa-user" style="font-size:2.5em;margin-left:10px;margin-bottom:5px"></i>
							</div>
							<h3>Web <span>Member</span></h3>
							<p>
								Become a member in GameHub
							</p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</body>

	</html>