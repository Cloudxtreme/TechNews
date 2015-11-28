<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TechNews</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="assets/img/technews-icon.ico">
	<link rel="stylesheet" type="text/css" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.min.css">
</head>
<body>
	<div class="container-fluid no-padding">
		<!-- BREAKING-NEWS -->
		<section class="breaking-news">
			<div class="container">
				<div class="row">
					<div class="col-md-2 col-sm-3 hidden-xs no-padding-right">
						<p class="text-uppercase breaking-news-text no-margin">Breaking news</p>
					</div>
					<div class="col-md-10 col-sm-9 hidden-xs">
						<div class="breaking-news-content">
							<marquee><a class="white-link" href="#">Uda Uni Yuk Ikutan Hackathon Sumbar 1.0</a> | <a class="white-link" href="#">Yuk Nonton Livestream Chrome Dev Summit 2015</a> | <a class="white-link" href="#">Punya Skill Python? Yuk Kerja Remote</a></marquee>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- END: BREAKING-NEWS -->
		<!-- NAVIGATION-MAIN -->
		<nav class="nav navbar-default navbar-static-top navbar-main">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-technews-navbar-collapse" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand no-padding" href="index.php"><img class="logo logo-top" src="assets/img/technews-logo.png" alt="technews"/></a>
				</div>
				<div class="navbar navbar-collapse navbar-right no-margin collapse" id="bs-technews-navbar-collapse">
					<ul class="nav navbar-nav">
						<li class="<?php echo ($page == 'index' ? 'on' : '') ?>"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Kategori<span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="#">Popular Posts</a></li>	
								<li><a href="#">All Posts</a></li>						
								<li class="<?php echo ($page == 'category_news' ? 'on' : '') ?>"><a href="category_news.php">News</a></li>
								<li><a href="#">Info</a></li>
								<li><a href="#">Event</a></li>
								<li><a href="#">Tips & Trik</a></li>
								<li><a href="#">Tools</a></li>
							</ul>
						</li>		
						<li class="<?php echo ($page == 'login' ? 'on' : '') ?>"><a href="login.php">Log in</a></li>
						<li class="<?php echo ($page == 'signup' ? 'on' : '') ?>"><a href="signup.php">Sign up</a></li>		
					</ul>
					<form class="navbar-form navbar-right no-margin no-padding navbar-search" role="search">
						<div class="form-group form-search">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default btn-search"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					</form>	
				</div>
			</div>			
		</nav>
		<!-- END:NAVIGATION-MAIN -->
