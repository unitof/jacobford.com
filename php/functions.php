<?php

function htmlhead($title, $pageClass = "") {
	$htmltitle = htmlentities($title);
	$ga = <<<HTML
	<script>
	if (document.cookie.indexOf("JFDev=dev") == -1) {
		if (document.location.hostname.indexOf("jacobford.com") !== -1) {
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
	<link rel="stylesheet" type="text/css" href="css/stripes.css">
HTML;
			break;

		default:
			$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/css/typography.css">
	<link rel="stylesheet" type="text/css" href="/css/stylish.css">
	<link rel="stylesheet" type="text/css" href="/css/stripes.css">
HTML;
			break;
	}

	$html .= "\n" . $ga;
	echo $html . "\n";
}

?>