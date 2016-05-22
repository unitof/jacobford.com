<!DOCTYPE html>
<?php
	require_once("php/functions.php");
	$pageClass = "index";
	$title = "The Portfolio of Jacob Ford";
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
	<meta name="Description" content="Designer of Things.">
</head>
<body>
<div id="container">
<?php htmlheader($pageClass) ?>
	<div id="stripestack">
		<a class="portfolio-item" href="projects/deathstrip/" id="deathstrip">
			<div class="image-strip" style="background-image: url(../projects/deathstrip/str_deathstrip.jpg);"></div>
			<h3 class="item-title">Death Strip: A Map of Berlin &amp; Time</h3>
		</a>
		<a class="portfolio-item" href="projects/violet100/" id="violet100">
			<div class="image-strip" style="background-image: url(../projects/violet100/str_violet100.jpg);"></div>
			<h3 class="item-title">Violet 100: The NYU Spirit Week
				<span class="item-client"> for the NYU Student Senators Council</span>
			</h3>
		</a>
		<a class="portfolio-item" href="projects/urbandemocracylab/" id="urbandemocracylab">
			<div class="image-strip" style="background-image: url(../projects/urbandemocracylab/str_urbandemocracylab.png);"></div>
			<h3 class="item-title">Civic Engagement Posters
				<span class="item-client"> for the Urban Democracy Lab</span>
			</h3>
		</a>
		<a class="portfolio-item" href="projects/gallatinfacultyshow/" id="gallatinfacultyshow">
			<div class="image-strip" style="background-image: url(../projects/gallatinfacultyshow/str_gallatinfacultyshow.jpg);"></div>
			<h3 class="item-title">Gallatin Faculty Show
				<span class="item-client"> for the Gallatin Galleries</span>
			</h3>
		</a>
	</div>
</div>
</body>
</html>
