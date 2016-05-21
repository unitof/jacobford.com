<?php

function htmlhead($title, $pageClass = "") {
	$htmltitle = htmlentities($title);
	switch ($pageClass) {
		case "project":
			$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="../../css/typography.css">
	<link rel="stylesheet" type="text/css" href="../../css/stylish.css">

HTML;
			break;

		case "index":
			$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="css/typography.css">
	<link rel="stylesheet" type="text/css" href="css/stylish.css">
	<link rel="stylesheet" type="text/css" href="css/stripes.css">

HTML;
			break;

		default:
			$html = <<<HTML
	<title>{$htmltitle}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" type="text/css" href="/css/typography.css">
	<link rel="stylesheet" type="text/css" href="/css/stylish.css">
	<link rel="stylesheet" type="text/css" href="/css/stripes.css">

HTML;
			break;
	}
	echo $html;
}

?>