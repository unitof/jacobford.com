<!DOCTYPE html>
<?php
	require_once(__DIR__."/functions.php");
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
<?php htmlindexstrip("deathstrip", "Death Strip: A Map of Berlin &amp; Time", "", "jpg"); ?>
<?php htmlindexstrip("tomographictopography", "Tomographic Topography", "", "jpg"); ?>
<?php htmlindexstrip("urbandemocracylab", "Civic Engagement Posters", "for the Urban Democracy Lab", "png"); ?>
<?php htmlindexstrip("doesmennonitematter", "Does Mennonite Matter?", "for the Franconia Conference", "jpg"); ?>
<?php htmlindexstrip("gallatinfacultyshow", "Gallatin Faculty Show", "for the Gallatin Galleries", "jpg"); ?>
<?php htmlindexstrip("violet100", "Violet 100: The NYU Spirit Week", "for the NYU Student Senators Council", "jpg"); ?>
	</div>
<?php htmlfooter($pageClass); ?>
</div>
</body>
</html>
