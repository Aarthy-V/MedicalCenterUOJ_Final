<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">
    <style>
        * {
	margin: 0;
	padding: 0;
}
.wrapper {
	width: 1170px;
	margin: 0 auto;
}
header {
	height: 60px;
	background: #030407;
	padding: 0 50px;
}
.logo {
	width: 30%;
	float: left;
	color: #fff;
	font-weight: bold;
	line-height: 60px;
	font-size: 25px;
}
nav {
	width: 68%;
	float: right;
}
nav ul {
	list-style: none;
	float: right;
}
nav ul li {
	display: inline-block
}
nav ul li a {
	text-decoration: none;
	color: #fff;
	font-weight: bold;
	margin: 0 10px;
	line-height: 60px
}
.banner {
	color: #fff;
	display: grid;
	place-items: center;
	height: 95vh;
	background-image: url(b1.jpg);
	background-size: cover;
	background-position: center center;
}
.banner h1 {
	font-size: 70px;
	font-family: alfa slab one;
}
.banner a {
	text-decoration: none;
	background: orangered;
	display: inline-block;
	color: #fff;
	padding: 10px 20px;
	font-size: 18px;
	margin-top: 25px;
	border-radius: 50px;
	text-transform: uppercase;
}
.content {
	padding: 5% 0;
}
.img-area {
	display: flex;
	width: 95%;
	margin: auto;
	margin-left: 10px;
}
.img-area img {
	width: 48%;
	margin: 30px 15px;
}
.content p {
	font-size: 18px;
	line-height: 1.7;
	font-family: sans-serif;
	margin-bottom: 20px;
}
footer {
	background: #000;
	color: #fff;
	padding: 15px 50px;
	text-align: center;
}
/* responsive css */

@media only screen and (min-width: 768px) and (max-width: 991px) {
	header {
		padding: 0 30px;
	}
	.wrapper {
		width: 100%;
	}
	.logo {
		width: 100%;
		text-align: center;
	}
	nav {
		width: 100%;
		float: none;
		text-align: center;
	}
	nav ul {
		float: none;
	}
	nav ul li a {
		margin: 0 5px;
		line-height: 18px;
	}
	.banner .wrapper {
		text-align: center;
	}
}
@media (max-width:767px) {
	header {
		padding: 0 30px;
	}
	.wrapper {
		width: 100%;
	}
	.logo {
		width: 100%;
		text-align: center;
	}
	nav {
		width: 100%;
		float: none;
		text-align: center;
	}
	nav ul {
		float: none;
	}
	nav ul li a {
		margin: 0 5px;
		line-height: 20px;
		font-size: 10px;
	}
	.banner {
		width: 100vw;
	}
	.banner .wrapper {
		text-align: center;
	}
	.banner {
		height: 45vh;
	}
	.banner h1 {
		font-size: 30px;
	}
	.content p {
		text-align: center;
	}
}
    </style>
</head>
<body>
	<header>
		<div class="wrapper">
			<div class="logo">
				Logo
			</div>
			<nav>
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">About</a>
					</li>
					<li>
						<a href="#">Services</a>
					</li>
					<li>
						<a href="#">Contact</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="banner">
		<div class="wrapper">
			<br>
			<br>
			<br>
			<h4>Hello, Welcome to my Website</h4>
			<h1>University Medical Center</h1>
			<p>You can Book your appointment</p><a href="login.php">LOGIN</a>
		</div>
	</div>
	<div class="content">
		<div class="wrapper">
			<div class="img-area"><img alt="" src="4.jpg"><img alt="" src="3.jpg"></div>
			<p>High-quality health care helps prevent diseases and improve quality of life. Healthy People 2030 focuses on improving health care quality and making sure all people get the health care services they need.</p>
			<p>Helping health care providers communicate more effectively can help improve health and well-being. Strategies to make sure health care providers are aware of treatment guidelines and recommended services are also key to improving health.</p>
			<p>Some people don’t get the health care services they need because they don’t have health insurance or live too far away from providers who offer them. Interventions to increase access to health care services — like lowering costs, improving insurance coverage, and increasing use of telehealth — can help more people get the care they need.</p>
		</div>
	</div>
	<footer>
		<p>All Right Reserved by @University of Jaffna</p>
	</footer>
</body>
</html>
