<?php

function prependlcfor($string, $nbsp = true) {
	return '<span class="lc">for</span>&nbsp;' . $string;
}

function makelastspnb($string) {
	$lastSpacePos = strrpos($string, " ");
	return substr_replace($string, "&nbsp;", $lastSpacePos, 1);
}

function htmlhead($pageClass = "", $title = "") {
	$htmltitle = htmlspecialchars($title);
	$ga = <<<HTML
	<script>
	if (document.cookie.includes("JFDev=dev") == false) {
		if (document.location.hostname.search(/^(.+\.)?jacobford\.com/i) !== -1) {
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-78108122-1', 'auto');
			ga('send', 'pageview');
		} else { console.log("Google Analytics disabled: hostname not jacobford.com"); }
	} else { console.log("Google Analytics disabled: developer cookie detected"); }
	</script>
HTML;

	switch ($pageClass) {
		case "project":
			$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../../css/typography.css">
	<link rel="stylesheet" type="text/css" href="../../css/stylish.css">
HTML;
			break;

		case "index":
			$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<link rel="stylesheet" type="text/css" href="css/stylish.css">
HTML;
			break;

		default:
			$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/typography.css">
	<link rel="stylesheet" type="text/css" href="/css/stylish.css">
HTML;
			break;
	}

	$html .= "\n" . $ga;
	echo $html . "\n";
}

function htmlheader($pageClass = "", $middle = "", $bottom = "") {
	switch ($pageClass) {
		case "project":
			$html = <<<HTML
	<div id="header" class="project-header">
		<h2 class="header-top">
			<a href="../../" class="nav-returnlink">The Portfolio <span class="lc">of</span>&nbsp;Jacob&nbsp;Ford</a>
		</h2>
		<h1 class="header-mid">{$middle}</h1>
		<h2 class="header-bot">{$bottom}</h2>
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
			<a href="/" class="nav-returnlink">The Portfolio <span class="lc">of</span>&nbsp;Jacob&nbsp;Ford</a>
		</h2>
		<h1 class="header-mid">Coming Soon</h1>
		<h2 class="header-bot">A Project Still in the Works</h2>
	</div>
HTML;
			break;
	}

	echo $html . "\n";
}

function htmlfooter($pageClass = "", $returnTo = "the Index") {
	$html = <<<HTML
	<div id="footer" class="project-footer">
		<!-- TODO: This a element prevents the
		     margin collapsing that should be
		     happening with div#footer. Any fix? -->
		<a href="../../" class="nav-returnlink no-dec">
			<div class="icon-index">
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe icon-index-expand"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
				<div class="icon-index-stripe"></div>
			</div>
			<h2>Return <span class="lc">to</span> {$returnTo}</h2>
		</a>
	</div>
HTML;

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
