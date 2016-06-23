<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$pageClass = "project";
	$object = "Does Mennonite Matter?";
	$client = "the Franconia Conference";
	$title = $object . " for " . $client;
	$middle = $object;
	$bottom = prependlcfor( makelastspnb($client) );
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
</head>
<body>
<div id="container">
<?php htmlheader($pageClass, $middle, $bottom, true); ?>
	<div id="story">
		<div class="overhang">
			<img <?php htmlsrcset('poster.png', $pageClass, 3, true); ?> alt="The entire Mennonite USA Confession of Faith, in tiny text, flowed to form the words &ldquo;does mennonite matter&rdquo;. A question mark and event details follow.">
		</div>
		<p>The Franconia Conference is a network of mostly southeastern Pennsylvanian Mennonite churches, and simmering within almost every one of their administrative offices is a youth pastor who enjoys the asking questions that make bored people curious, and perfectly contented people people nervous. In early 2012, a few of them wanted to ask one of those questions in front of an audience, the question was “Does Mennonite matter?,” and they wanted me to design a poster for it.</p>
		<p>We were trying to fight theological dryness, so I knew the poster had to confront it. The <a href="http://mennoniteusa.org/confession-of-faith/"><cite>Confession of Faith In a Mennonite Perspective</cite></a> is a 24-article document which all member churches of Mennonite USA agree to: probably the most formally sanctioned answer to our event’s question. It has been translated, <a href="http://anabaptistwiki.org/mediawiki/index.php?title=Online_Anabaptist-Mennonite_Library">edited</a>, varyingly <a href="https://thinkingpacifism.net/2012/05/09/the-mennonite-confession-of-faith-and-homosexuality/">interpreted</a>, <a href="http://www.pinkmenno.org/2015/07/pink-menno-press-release-on-july-2-2015-action-at-mennonite-church-usa-convention/">protested</a>, and probably&mdash;by a lot of our audience&mdash;ignored, all since its adoption by Mennonite USA in 1995. It needed to be on our poster.</p>
		<p>It needed to <em>be</em> our poster.</p>
		<p>I gathered the complete text of the Confession and set it in Fanwood, an open source typeface by Barry Schwartz of the League of Moveable Type based on Rudolf Ruzicka’s <a href="https://www.linotype.com/420/fairfield-family.html?site=details">Fairfield</a>, and using Inkscape I flowed it within the frame defined by the shape of the words &rdquo;does mennonite matter&ldquo;, also in Fanwood but at a much larger size.</p>
		<div class="overhang">
			<img <?php htmlsrcset('zoomanimation.gif', $pageClass, 3, true); ?> alt="An animation: the words &rdquo;does mennonite matter&ldquo; zoom in on the lowercase d&rsquo;s shoulder to reveal part of the Mennonite Confession of Faith">
		</div>
		<p>I selected this typeface for the same initial reason I select most typefaces: because I liked it and I thought it looked nice and I was and still am going through a L.o.M.T. phase. But I enjoy researching smart-sounding retroactive reasons for my font choices, and so far for this project I’ve found this: Ruzicka’s defense for the small number of ligatures in Fairfield.
		<blockquote>The lowercase f’s, both roman and italic, fit not only all the characters, but even themselves—the twenty six leaden soldiers could fight their battles untied yet in accord.</blockquote>
		<p class="caption">Quote <a href="https://www.linotype.com/756/rudolph-ruzicka.html">via</a> Linotype</p>
		</p>
		<p>Similar, I think, to the mission of the Does Mennonite Matter? event. To confront tension and to fight groupthink within a religious body that still wants to be united, so that members may fight their battles untied yet in accord.</p>
		<div class="credits">
			<p>Project managed by <span class="name">Mike Ford</span>, or <span class="name">Dad</span>.</p>
			<p>Event planned by <span class="name">Ben Wideman</span>.</p>
			<p>Designed by <span class="name">Jacob Ford</span> in February 2014.</p>
		</div>
	</div>
<?php htmlfooter($pageClass); ?>
</div>
</body>
</html>
