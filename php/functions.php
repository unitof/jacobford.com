<?php

function htmlhead($title) {
	$htmltitle = htmlentities($title);
	$html = <<<HTML
	<link rel="stylesheet" type="text/css" href="../../css/typography.css">
	<link rel="stylesheet" type="text/css" href="../../css/stylish.css">
	<link rel="stylesheet" type="text/css" href="../../css/stripes.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<title>{$htmltitle}</title>
HTML;
	echo $html;
}

?>