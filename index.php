<!DOCTYPE html>
<?php
session_start();
session_regenerate_id();
?>
<html>
	<head>
		<title>Naas Demo</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/site.css">
	</head>
	<body>
		<form>
			<div class="container">
				<div class="page-header">
					<h1>Naas Demo</h1>
				</div>
				<div class="row">
					<div class="col-xs-7 pull-left site-video-large">
						<div class="embed-responsive embed-responsive-16by9">
							<video id="main-video" class="embed-responsive-item" controls poster="images/video-main.png" >
								<source  src="sample.mp4" type="video/mp4">
							</video>
						</div>
					</div>
					<div class="col-xs-5">
						<a href="index.php"><h2>Winter X Games Aspen</h2></a>
						<p>
						The X Games is an annual sports event, controlled and arranged by American sports broadcaster ESPN (with coverage also shown on its sister network ABC), which focuses on extreme sports. The inaugural X Games were held in the summer of 1995 in Newport, Rhode Island. Participants compete to win bronze, silver, and gold medals, as well as prize money.</p>
						<p>The competition often features new tricks such as Tony Hawk's 900 in skateboarding, Travis Pastrana's double backflip in freestyle motocross, Heath Frisby's first ever snowmobile front flip in Snowmobile Best Trick, and Torstein Horgmo's first landed triple cork in a snowboard competition. Concurrent with competition is the "X Fest" sports and music festival, which offers live music, athlete autograph sessions, and interactive elements.</p>
						<p>As part of the X Games, there have been performances by various rock bands over the years, as well as a DJ being on-site at all events. The X Games have made it a point since its founding to stage an eco-friendly event. Such measures include using biodiesel fuel in their vehicles and organizing recycling campaigns.[1]</p>
					</div>
				</div>
				<div>
					<div class="panel panel-info col-xs-7">
						<div class="row panel-heading">Other Videos</div>
						<div class="panel-body">
								<div class="col-xs-4">
									<a href="index.php" class="thumbnail"><img src="images/video1.png" alt="Video1">
										<div class="caption">X Games</div></a>
								</div>
								<div class="col-xs-4">
									<a href="index.php" class="thumbnail"><img src="images/video2.png" alt="Video1"><div class="caption">X Games</div></a>
								</div>
								<div class="col-xs-4">
									<a href="index.php" class="thumbnail"><img src="images/video3.png" alt="Video1"><div class="caption">X Games</div></a>
								</div>
						</div>
					</div>
						
				</div>
			</div>
				
				<script type="text/javascript" src="js/jquery.min.js"></script>
				<script type="text/javascript" src="js/video.js"></script>
			</form>	</body>
		</html>