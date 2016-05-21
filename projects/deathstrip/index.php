<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$object = "Death Strip: A Map of Berlin & Time";
	// $client = "myself";
	$title = $object;
?>
<html>
<head>
<?php htmlhead($title); ?>
	<meta name="Description" content="The Berlin Wall was plural. Two concrete barriers divided East from West, and in between lay the Death Strip: a heavily-guarded minefield razed flat except for 302 watchtowers. The wall began to be officially dismantled in 1990, but it left a scar of emptiness through the center of a suddenly reunited city. This map shows what the Death Strip has become.">
</head>
<body>
<div id="container">
	<div id="header" class="project-header">
		<h2 class="header-top">The Portfolio <span class="lc">of</span>&nbsp;Jacob&nbsp;Ford</h2>
		<h1 class="header-mid">Death Strip: A Map of&nbsp;Berlin&nbsp;&amp;&nbsp;Time</h1>
		<h2 class="header-top">A&nbsp;Personal Academic&nbsp;Project</h2>
	</div>
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
</div>
</body>
</html>
