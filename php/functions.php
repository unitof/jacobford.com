<?php

function prependlcfor($string, $nbsp = true) {
	return '<span class="lc">for</span>&nbsp;' . $string;
}

function makelastspnb($string) {
	$lastSpacePos = strrpos($string, " ");
	return substr_replace($string, "&nbsp;", $lastSpacePos, 1);
}

function toRoot($pageClass) {
	switch ($pageClass) {
		case 'project':
			$toRoot = '../../';
			break;

		case 'card':
			$toRoot = '../';
			break;

		case 'index':
			$toRoot = '';
			break;

		default:
			$toRoot = '/'; // generally-works fallback
			break;
	}
	return $toRoot;
}

function htmlhead($pageClass = "", $title = "") {
	$htmltitle = htmlspecialchars($title);
	$ga = <<<HTML
	<script>
	var hn = document.location.hostname;
	var propId = 'UA-78108122-1';
	if (hn == 'staging.jacobford.com') { propId = 'UA-78108122-2'; }
	if (hn.search(/^(.+\.)?jacobford\.com/i) !== -1) {
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		ga('create', propId, 'auto');
		if (document.cookie.includes("JFDev=dev") == true ) { ga('set', 'dimension1', 'true'); }
		ga('send', 'pageview');
	} else { console.log("Google Analytics disabled: hostname not jacobford.com"); }
	</script>
HTML;
	$toRoot = toRoot($pageClass);

	$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{$toRoot}css/typography.css">
	<link rel="stylesheet" type="text/css" href="{$toRoot}css/stylish.css">
HTML;
	$html .= "\n" . $ga;
	echo $html . "\n";
}

function htmlheader($pageClass = "", $middle = "", $bottom = "") {
	switch ($pageClass) {
		case "project":
			$html = <<<HTML
	<div id="header" class="project-header">
		<h2 class="header-top">
			<a href="../../" class="header-returnlink">The Portfolio <span class="lc">of</span>&nbsp;Jacob&nbsp;Ford</a>
		</h2>
		<h1 class="header-mid">{$middle}</h1>
		<h2 class="header-bot">{$bottom}</h2>
	</div>
HTML;
			break;

		case "card":
			$html = <<<HTML
	<div id="header" class="index-header">
		<h2 class="header-top">The Business Card&nbsp;<span class="lc">of</span></h2>
		<h1 class="header-mid">Jacob Ford</h1>
		<h2 class="header-bot">Designer&nbsp;<span class="lc">of</span> Things</h2>
	</div>
HTML;
			break;

		case "index":
			$html = <<<HTML
	<div id="header" class="index-header">
		<h2 class="header-top">The Portfolio&nbsp;<span class="lc">of</span></h2>
		<h1 class="header-mid">Jacob Ford</h1>
		<h2 class="header-bot">Designer&nbsp;<span class="lc">of</span> Things</h2>
	</div>
HTML;
			break;

		default:
			$html = <<<HTML
	<div id="header" class="project-header">
		<h2 class="header-top">
			<a href="/" class="header-returnlink">The Portfolio <span class="lc">of</span>&nbsp;Jacob&nbsp;Ford</a>
		</h2>
		<h1 class="header-mid">Coming Soon</h1>
		<h2 class="header-bot">A Project Still in the Works</h2>
	</div>
HTML;
			break;
	}

	echo $html . "\n";
}

function htmlsrcset_density($src, $upTo = 3, $max = false) {
	$lastDotPos = strrpos($src, ".");
	$slug = substr($src, 0, $lastDotPos);
	$ext = substr($src, $lastDotPos + 1);
	$upTo = floor($upTo);
	$srcval = $src;
	$srcsetval = $src . ' ' . '1x, ';
	/* TODO: check if file exists before listing; deprecate $max */
	for ( $x = 2; $x <= $upTo; $x++ ) {
		$srcsetval .= $slug . '@' . $x . 'x' . '.' . $ext . ' ' . $x . 'x, ';
	}
	if ( $max ) {
		$srcsetval .= $slug . '@max.' . $ext . ' ' . ($upTo + 1) . 'x, ';
	}
	$html = 'src="' . $srcval . '"';
	if ($srcsetval) {
		$html .= ' srcset="' . $srcsetval . '"';
	}
	echo rtrim($html, ', ');
}

/* Generates src, srcset, and sizes attributes for use in an img element */
function htmlsrcset($src, $maxDisplayWidth = '', $upTo = 3, $max = false) {
	if ( is_string($maxDisplayWidth) ) {
		switch ($maxDisplayWidth) {
			case 'overhang':
			case 'oh':
				$maxDisplayWidth = 1000;
				break;
			
			case 'underhang':
			case 'uh':
				$maxDisplayWidth = 500;
				break;

			case 'superoverhang':
			case 'soh':
				$maxDisplayWidth = 6000; /* iffy, probably best just to define in the function call for SOHs */
				break;

			case 'nohang':
			case 'nh':
			case 'hang':
			default:
				$maxDisplayWidth = 800;
				break;
		}
	}
	$slug = substr($src, 0, strrpos($src, "."));
	$ext = substr($src, strrpos($src, ".") + 1);
	$upTo = floor($upTo);
	$srcval = $src;
	for ( $x = 1; $x <= $upTo; $x++ ) {
		if ($x == 1) {
			$filename = $src;
		} else {
			$filename = "{$slug}@{$x}x.{$ext}";
		}
		list($width) = getimagesize($filename);
		$srcsetval .= "{$filename} {$width}w, ";
	}
	if ( $max ) {
		list($maxWidth) = getimagesize($slug . '@max.' . $ext);
		$srcsetval .= "{$slug}@max.{$ext} {$maxWidth}w, ";
	}
	$sizesval = "(max-width: {$maxDisplayWidth}px) 100vw, {$maxDisplayWidth}px";
	$srcsetval = rtrim($srcsetval, ', ');
	$sizesval = rtrim($sizesval, ', ');
	$html = "src=\"{$srcval}\"";
	if ($srcsetval) {
		$html .= " srcset=\"{$srcsetval}\"";
	}
	if ($sizesval) {
		$html .= " sizes=\"{$sizesval}\"";
	}
	echo $html;
}

function htmlfooter($pageClass = "") {
	switch ($pageClass) {
		case "project":
			$html = <<<HTML
	<div id="footer" class="project-footer">
		<a href="../../" class="icon-link hidden">
			<div class="icon icon-index">
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe icon-index-expand"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
			</div>
			<h2>Return <span class="lc">to</span> the Index</h2>
		</a>
		<a href="../../card/" class="icon-link hidden">
			<div class="icon icon-card"></div>
			<h2>Take my Card</h2>
		</a>
	</div>
HTML;
			break;

		case "card":
			$html = <<<HTML
	<div id="footer" class="project-footer">
		<a href="../../" class="icon-link hidden">
			<div class="icon icon-index">
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe icon-index-expand"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
			</div>
			<h2>Return <span class="lc">to</span> the Index</h2>
		</a>
	</div>
HTML;
			break;

		case "index":
			$html = <<<HTML
	<div id="footer" class="project-footer">
		<a href="../../card/" class="icon-link hidden">
			<div class="icon icon-card"></div>
			<h2>Take my Card</h2>
		</a>
	</div>
HTML;
			break;

		default:
			$html = <<<HTML
	<div id="footer" class="project-footer">
		<!-- TODO: This a element prevents the
		     margin collapsing that should be
		     happening with div#footer. Any fix? -->
		<a href="/" class="icon-link hidden">
			<div class="icon icon-index">
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe icon-index-expand"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
			</div>
			<h2>Return <span class="lc">to</span> the Index</h2>
		</a>
		<a href="/card/" class="icon-link hidden">
			<div class="icon icon-card"></div>
			<h2>Take my Card</h2>
		</a>
	</div>
HTML;
	}

	echo $html . "\n";
}
/*
Make sure the following exist before invoking htmlindexstrip():
	/projects/[slug]/index.php
	/projects/[slug]/str_[slug].[imgExt]
*/
function htmlindexstrip($slug, $title = "", $client = "", $imgExt = "jpg") {
	if ($client == "") {
		$html = <<<HTML
		<a class="portfolio-item" href="projects/{$slug}/" id="{$slug}">
			<div class="image-strip" style="background-image: url(../projects/{$slug}/str_$slug.{$imgExt});"></div>
			<h3 class="item-title">{$title}</h3>
		</a>
HTML;
	} else {
		$html = <<<HTML
		<a class="portfolio-item" href="projects/{$slug}/" id="{$slug}">
			<div class="image-strip" style="background-image: url(../projects/{$slug}/str_{$slug}.{$imgExt});"></div>
			<h3 class="item-title">{$title}
				<span class="item-client">{$client}</span>
			</h3>
		</a>
HTML;
	}

	echo $html . "\n";
}

function htmldesignedbyline($year = "", $name = "Jacob Ford") {
	$htmlname = makelastspacenb($name);
	if ($year == "") {
		$html = '<p>Designed by <span class="name">{$htmlname}</span>.</p>';
HTML;
	} else {
		$html = '<p>Designed by <span class="name">{$htmlname}</span> in {$year}.</p>';
	}
	echo $html . "\n";
}

?>
