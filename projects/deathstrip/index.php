<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$pageClass = "project";
	$object = "Death Strip: A Map of Berlin & Time";
	$client = "";
	$title = $object;
	$middle = "Death Strip: A Map of&nbsp;Berlin&nbsp;&amp;&nbsp;Time";
	$bottom = makelastspnb("A Personal Academic Project");
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
			<img <?php htmlsrcset('deathstrip_full.png', $pageClass, 3, false); ?> alt="A map depicting the Death Strip slicing through Berlin.">
		</div>
		<p>The Berlin Wall was plural. Two concrete barriers divided East from West, and in between lay the Death Strip: a heavily-guarded minefield razed flat except for 302 watchtowers. The wall began to be officially dismantled in 1990, but it left a scar of emptiness through the center of a suddenly reunited city. This map shows what the Death Strip has become.</p>
		<div class="overhang">
			<img <?php htmlsrcset('deathstrip_detail.png', $pageClass, 3, true); ?> alt="Detail on map key">
			<p class="caption">Detail on map key</p>
		</div>
		<p>The project began with a set of OpenStreetMap layers containing the shapefiles for all buildings, water bodies, greenspace, roads, paths, and railways within an area of Berlin, compiled by and downloaded via what was then the WeoGeo Market, now called the Trimble Data Marketplace. Then there was a dream-come-true KML file containing the precise paths of both the inner and outer Berlin Walls, traced from known records and aerial imagery by an amazing person named Stephanie Lange, whose work I was able to find clinging onto some decaying servers in various dusty corners of the internet.</p>
		<img src="workspace_fme@max.jpg" alt="Screenshot of FME workspace">
		<p class="caption">FME workspace</p>
		<p>The OpenStreetMap layers and the Wall routes fed into a barely stable FME (Feature Merger Engine, from Safe) script I wrote, which—if I was lucky—managed to get the points jiving together in one projection system, determined the donut polygon formed by the inner and outer walls,  merged all the layers into roughly the correct stacking order, and spat out a massive SVG file which I could import into Illustrator for designing. (Inkscape lacked the necessary stamina and, when I would try to do anything as ambitious as zoom in, would crash instantly.)</p>
		<img src="workspace_ill@max.jpg" alt="Screenshot of Adobe Illustrator Workspace">
		<p class="caption">Illustrator workspace</p>
		<p>From there, a poster is just an inkjet printer a paper roll away. Matte, because it’s the cheapest paper type and I like it the most so I can convince myself I would still want it if it were the most expensive paper type.</p>
		<div class="overhang">
			<img <?php htmlsrcset('print_tiergarten.jpg', $pageClass, 3, true); ?> alt="Macro photo of printed poster, detail on Tiergarten">
		</div>
		<div class="hangover">
			<img <?php htmlsrcset('print_title.jpg', $pageClass, 3, true); ?> alt="Macro photo of printed poster, detail on title">
			<p class="caption">Printed by an Epson Stylus Pro 4900<br>onto Epson Premium Presentation Matte paper</p>
		</div>
		<div class="credits">
			<p>Berlin Wall route data <a href="https://web.archive.org/web/20090413050019/http://www.k-ita.de/~sl/2008/12/18/remainings-of-berlin-wall-the-former-border-strip/">compiled by</a> <span class="name">Stephanie Lange</span>, 2009.</p>
			<p>All other geospatial data from <span class="name">OpenStreetMap</span>, collected April 23, 2014.</p>
			<p>Designed by <span class="name">Jacob Ford</span> in May 2014.</p>
		</div>
	</div>
<?php htmlfooter(); ?>
</div>
</body>
</html>
