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
<?php htmlindexstrip("deathstrip", "Death Strip: A Map of Berlin &amp; Time", "", "jpg"); ?>
<?php htmlindexstrip("violet100", "Violet 100: The NYU Spirit Week", "for the NYU Student Senators Council", "jpg"); ?>
<?php htmlindexstrip("urbandemocracylab", "Civic Engagement Posters", "for the Urban Democracy Lab", "png"); ?>
<?php htmlindexstrip("gallatinfacultyshow", "Gallatin Faculty Show", "for the Gallatin Galleries", "jpg"); ?>
	</div>
</div>
</body>
</html>
