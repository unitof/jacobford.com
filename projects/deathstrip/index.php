<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$pageClass = "project";
	$object = "Death Strip: A Map of Berlin & Time";
	$client = "";
	$title = $object;
	$middle = "Death Strip: A Map of&nbsp;Berlin&nbsp;&amp;&nbsp;Time";
	$bottom = "A&nbsp;Personal Academic&nbsp;Project";
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
	<meta name="Description" content="The Berlin Wall was plural. Two concrete barriers divided East from West, and in between lay the Death Strip: a heavily-guarded minefield razed flat except for 302 watchtowers. The wall began to be officially dismantled in 1990, but it left a scar of emptiness through the center of a suddenly reunited city. This map shows what the Death Strip has become.">
</head>
<body>
<div id="container">
<?php htmlheader($pageClass, $middle, $bottom); ?>
	<div id="story">
		<div class="overhang">
			<img src="deathstrip_full.jpg" alt="A map depicting the Death Strip slicing through Berlin.">
		</div>
		<p>The Berlin Wall was plural. Two concrete barriers divided East from West, and in between lay the Death Strip: a heavily-guarded minefield razed flat except for 302 watchtowers. The wall began to be officially dismantled in 1990, but it left a scar of emptiness through the center of a suddenly reunited city. This map shows what the Death Strip has become.</p>
		<div class="overhang">
			<img src="deathstrip_detail.png" alt="Detail on map key">
			<p class="caption">detail on map key</p>
		</div>
		<p>I downloaded a set of OpenStreetMap layers containing the shapes of all buildings, water bodies, greenspace, roads, paths, and railways within an area of Berlin, then wrote an FME scrip to merge them with dataset compiled by Stephanie Lange containing the inner and outer Berlin Wall coorindates and export all that as a massive SVG file which I could import into Illustrator for design refinements.</p>
		<div class="credits">
			<p>Berlin Wall route data <a href="https://web.archive.org/web/20090413050019/http://www.k-ita.de/~sl/2008/12/18/remainings-of-berlin-wall-the-former-border-strip/">compiled by</a> <span class="name">Stephanie&nbsp;Lange</span>, 2009.</p>
			<p>All other geospatial data from <span class="name">OpenStreetMap</span>, collected April 23, 2014.</p>
			<p>Designed by <span class="name">Jacob&nbsp;Ford</span> in May 2014.</p>
		</div>
	</div>
<?php htmlfooter(); ?>
</div>
</body>
</html>
