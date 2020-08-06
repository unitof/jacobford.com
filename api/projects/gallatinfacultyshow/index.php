<!DOCTYPE html>
<?php
	require_once("api/functions.php");
	$pageClass = "project";
	$object = "Gallatin Faculty Show";
	$client = "The Gallatin Galleries";
	$title = $object . " for " . $client;
	$middle = makelastspnb($object);
	$bottom = prependlcfor($client);
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
			<img src="detail_cover.jpg" srcset="detail_cover@2x.jpg 2x, detail_cover@3x.jpg 3x, detail_cover@max.jpg 4x" alt="Closeup: gallatin / faculty / show / 2013, where one ligature from each line shares a stroke with its neighbor. Top three lines are black, bottom is cyan. All on just offwhite.">
			<p class="caption">Independent characters sharing elements: the exhibition's visual identity</p>
		</div>
		<p>Professors at NYU&rsquo;s Gallatin School do strange and wonderful things, much of which is worthy of display in Gallatin’s first-floor gallery space. While working as an assistant curator for the Gallatin Galleries, I was responsible for designing a visual identity and assembling a printed exhibition catalog for 2013&rsquo;s iteration of the show.</p>
		<div class="overhang">
			<img src="cover.jpg" srcset="cover@2x.jpg 2x, cover@3x.jpg 3x, cover@max.jpg 4x" alt="Straigthon: booklet cover: gallatin / faculty / show / 2013, where one ligature from each line shares a stroke with its neighbor">
			<p class="caption">Front cover</p>
			<img src="spread_gregory.jpg" srcset="spread_gregory@2x.jpg 2x, spread_gregory@3x.jpg 3x, spread_gregory@max.jpg 4x" alt="Two-page spread on Matthew Gregory">
			<p class="caption">Pages 18&ndash;19: Matthew Gregory</p>
			<img src="spread_joachim.jpg" srcset="spread_joachim@2x.jpg 2x, spread_joachim@3x.jpg 3x, spread_joachim@max.jpg 4x" alt="Two-page spread on Mitchell Joachim">
			<p class="caption">Pages 24&ndash;25: Mitchell Joachim</p>
			<img src="spread_katchadourian.jpg" srcset="spread_katchadourian@2x.jpg 2x, spread_katchadourian@3x.jpg 3x, spread_katchadourian@max.jpg 4x" alt="Two-page spread on Nina Katchadourian">
			<p class="caption">Pages 26&ndash;27: Nina Katchadourian</p>
			<img src="spread_mokgosi.jpg" srcset="spread_mokgosi@2x.jpg 2x, spread_mokgosi@3x.jpg 3x, spread_mokgosi@max.jpg 4x" alt="Two-page spread on Meleko Mokgosi">
			<p class="caption">Pages 32&ndash;33: Meleko Mokgosi</p>
			<img src="spread_colophon.jpg" srcset="spread_colophon@2x.jpg 2x, spread_colophon@3x.jpg 3x, spread_colophon@max.jpg 4x" alt="Two-page spread: left is blank, right contains a colophon">
			<p class="caption">Colophon</p>
		</div>
		<p>We knew things were going to get small, so I knew things were going to have to stay crisp. Much of the catalog's color scheme is the C and the K&mdash;cyan and key (black)&mdash;of CYMK, so there would be no risk of fuzzy text from misregistration artifacts.</p>
		<div class="overhang">
			<img src="detail_colophon.jpg" srcset="detail_colophon@2x.jpg 2x, detail_colophon@3x.jpg 3x, detail_colophon@max.jpg 4x" alt="Colophon: This catalog is one of five hundred / designed by Jacob Ford / and printed by DG3. // The text is set in various / weights and sizes of Archer, / designed by Hoefler &amp; Frere-Jones / just a few blocks down the street. // Thanks to Andrew and Julia / for hugs and white balancing / and to Keith / for letting me make a colophon.">
			<p class="caption">Or the Metacolophon, if you will</p>
		</div>
		<div class="credits">
			<p>Project managed and show curated by <span class="name">Keith Miller</span>.</p>
			<p>Assistance and encouragement from <span class="name">Andrew Harvey</span> and <span class="name">Julia Berke</span>.</p>
			<p>Designed by <span class="name">Jacob Ford</span> in 2013.</p>
		</div>
	</div>
<?php htmlfooter($pageClass); ?>
</div>
</body>
</html>
