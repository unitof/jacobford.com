<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$pageClass = "project";
	$object = "Gallatin Faculty Show";
	$client = "The Gallatin Galleries";
	$title = $object . " for " . $client;
	$middle = makelastspnb($object);
	$bottom = prependlcfor( makelastspnb($client) );
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
	<meta name="Description" content="Independent characters sharing elements: how to turn a gallery show&rsquo;s mission into its own visual identity.">
</head>
<body>
<div id="container">
<?php htmlheader($pageClass, $middle, $bottom); ?>
	<div id="story">
		<div class="overhang">
			<img src="detail_cover.jpg" alt="Closeup: gallatin / faculty / show / 2013, where one ligature from each line shares a stroke with its neighbor. Top three lines are black, bottom is cyan. All on just offwhite.">
			<p class="caption">Independent characters sharing elements: the exhibition's visual identity</p>
		</div>
		<p>Professors at NYU&rsquo;s Gallatin School do strange and wonderful things, much of which is worthy of display in Gallatin's first-floor gallery space. While working as an assistant curator for the Gallatin Galleries, I was responsible for designing a visual identity and assembling a printed exhibition catalog for 2013&rsquo;s iteration of the show.</p>
		<div class="overhang">
			<img src="cover.jpg" alt="Straighon: booklet cover: gallatin / faculty / show / 2013, where one ligature from each line shares a stroke with its neighbor">
			<p class="caption">Front cover</p>
			<img src="spread_gregory.jpg" alt="Two-page spread on Matthew Gregory">
			<p class="caption">Pages 18&ndash;19: Matthew Gregory</p>
			<img src="spread_joachim.jpg" alt="Two-page spread on Mitchell Joachim">
			<p class="caption">Pages 24&ndash;25: Mitchell Joachim</p>
			<img src="spread_katchadourian.jpg" alt="Two-page spread on Nina Katchadourian">
			<p class="caption">Pages 26&ndash;27: Nina Katchadourian</p>
			<img src="spread_mokgosi.jpg" alt="Two-page spread on Meleko Mokgosi">
			<p class="caption">Pages 32&ndash;33: Meleko Mokgosi</p>
			<img src="spread_colophon.jpg" alt="Two-page spread: left is blank, right contains a colophon">
			<p class="caption">Colophon</p>
		</div>
		<p>We knew things were going to get small, so I knew things were going to have to stay crisp. Much of the catalog's color scheme is the C and the K&mdash;cyan and key (black)&mdash;of CYMK, so there would be no risk of fuzzy text from misregistration artifacts.</p>
		<div class="overhang">
			<img src="detail_colophon.jpg" alt="Thank yous">
			<p class="caption">Or the Metacolophon, if you will</p>
		</div>
	</div>
<?php htmlfooter(); ?>
</div>
</body>
</html>
