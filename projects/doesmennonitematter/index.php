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
		<div class="overhang">
			<img <?php htmlsrcset('print_closeup.jpg', $pageClass, 3, true); ?> alt="Soft-focused photograph of the printed poster, with some of the lines which comprise the 'm' sharp enough to make out">
		</div>
		<p>I gathered the complete text of the Confession and set it in Linden Hill, an open source typeface by Barry Schwartz of the League of Moveable Type based on Frederic Goudy’s <a href="https://archive.org/stream/GoudyHalfCentury1946V2/goudy-half-century-1946-v2-0600dpijpg#page/n11/mode/1up">Deepdene</a>, and using Inkscape I flowed it within the frame defined by the shape of the words &rdquo;does mennonite matter&ldquo;, also in Linden Hill but set much larger.</p>
		<div class="overhang">
			<img <?php htmlsrcset('zoomanimation.gif', $pageClass, 3, true); ?> alt="An animation: the words &rdquo;does mennonite matter&ldquo; zoom in on the lowercase d&rsquo;s shoulder to reveal part of the Mennonite Confession of Faith">
		</div>
		<p>I selected Linden Hill for the same reason I select most typefaces: because I liked it and I thought it looked nice. I was and still am also going through through a serious L.o.M.T. phase. But I enjoy researching intentional-sounding retroactive reasons for my font choices, and so far for this project I’ve found that one of Deepdene’s first uses was in Simon &amp; Schuster’s <cite>The Bible Designed to be Read as Living Literature</cite>, published in 1936. It was an attempt to rescue biblical text from drowning in stodgy academic Christian commentary and trim it back to something anyone could read, for whatever reason they may want to read it. Its colophon, really a short essay dedicated to Deepdene, coos:
			<blockquote>The effect as a whole is regular and well-ordered, but the variety among the individual letters speeds the eye and avoids monotony with&nbsp;charm.</blockquote>
			<p class="caption"><a href="https://archive.org/stream/bibledesignedtob012390mbp#page/n1265/mode/2up">via</a> the Universal Digital Library &amp; the Internet Archive</p>
		</p>
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
