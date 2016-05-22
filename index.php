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
		<a class="portfolio-item" href="projects/deathstrip/">
			<div class="image-strip" id="deathstrip"></div>
			<h3 class="item-title">Death Strip: A Map of Berlin &amp; Time</h3>
		</a>
		<a class="portfolio-item" href="projects/violet100/">
			<div class="image-strip" id="violet100"></div>
			<h3 class="item-title">Violet 100: The NYU Spirit Week
				<span class="item-client"> for the NYU Student Senators Council</span>
			</h3>
		</a>
		<a class="portfolio-item" href="projects/urbandemocracylab/">
			<div class="image-strip" id="urbandemocracylab"></div>
			<h3 class="item-title">Civic Engagement Posters
				<span class="item-client"> for the Urban Democracy Lab</span>
			</h3>
		</a>
		<a class="portfolio-item" href="projects/gallatinfacultyshow/">
			<div class="image-strip" id="gallatinfacultyshow"></div>
			<h3 class="item-title">Gallatin Faculty Show
				<span class="item-client"> for the Gallatin Galleries</span>
			</h3>
		</a>
	</div>
</div>
</body>
</html>
