<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$pageClass = "project";
	$object = "Violet 100: The NYU Spirit Week";
	$client = "The NYU Student Senators Council";
	$title = $object; // for grammatical reasons, not syntactical and I know it
	$middle = makelastspnb($object);
	$bottom = prependlcfor( makelastspnb($client) );
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
	<meta name="Description" content="Originally it stood for 100 hours of NYU spirit. Now it is a weeklong series of events celebrating university pride, and students needed to know it was happening. The week needed an identity.">
</head>
<body>
<div id="container">
<?php htmlheader($pageClass, $middle, $bottom); ?>
	<div id="story">
		<div class="overhang">
			<img src="kimmel_straight.jpg" alt="A map depicting the Death Strip slicing through Berlin.">
		</div>
		<p>Originally it stood for 100 hours of NYU spirit. Now it is a weeklong series of events celebrating university pride, and students needed to know it was happening.</p>
		<img src="thegrid.png" srcset="thegrid.svg" alt="VIO / LET / 100">
		<p>I developed what become known as the Tic-Tac-Toe identity (though I strongly preferred The Grid), to be used across all promotional material. It showed up on coffee cup sleeves, napkin dispensers in the university cafeterias, hats, shrits, and on all flyers for the individual events which Violet 100 comprised.</p>
		<p>Then we decided to make a sticker the size of a building.</p>
		<div class="superoverhang">
			<img src="kimmel_facademockup.png" srcset="kimmel_facademockup.svg" alt="Installation mockup: a drawn view of the Kimmel facade with measurements, and locations marked for the vinyl.">
			<p class="caption">installation mockup</p>
		</div>
		<!-- <p>On a cold windy day I went and measured all the windows and designed a template on which we could mockup our designs. Two schedules pointed in from either side to a Tic Tac Toe box, and the whole thing was made amazing with a split and rotated box across all four center doors.</p> -->
		<div class="overhang">
			<img src="kimmel_install.jpg" alt="The install team applies the vinyl.">
			<p class="caption">The install team</p>
		</div>
		<!-- <p>John excellently vectorized two NYU Bobcats to flank the center doors, each with strips to match its neighboring schedule bars.</p> -->
		<div class="overhang">
			<img src="kimmel_angle.jpg" alt="VIOLET 100 stretchs across four glass panes on the front of NYU's Kimmel Center for University Life.">
			<p class="caption">the decal&rsquo;s first night in the wild</p>
		</div>
		<p>But we kept some things small, for scale.</p>
		<img src="cellpocket.png" alt="The V100 Tic-Tac-Toe board decorates a cell phone." style="max-width: 200px;">
		<div class="credits">
			<p>Project managed by <span class="name">Petey Shivery</span>.</p>
			<p>Flanking bobcats designed by <span class="name">John Belknap</span>.</p>
			<p>Designed by <span class="name">Jacob Ford</span> in February 2016.</p>
		</div>
	</div>
<?php htmlfooter($pageClass); ?>
</div>
</body>
</html>
