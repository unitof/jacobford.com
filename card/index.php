<!DOCTYPE html>
<?php
	require_once("../php/functions.php");
	$pageClass = "card";
	$title = "Take My Card";
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
	<meta name="Description" content="The business card of Jacob Ford, Designer of Things.">
</head>
<body ontouchstart>
<div id="container">
<?php htmlheader($pageClass) ?>
	<div class="card" id="front">
		<p class="contact email">j@cobford.com</p>
		<p class="contact phone">(<span class="three digits expand">best to email me first</span>)<span class="subscribernumber digits contract"><span class="three digits">000</span>-<span class="four digits">0000</span></span></p>
	</div>
	<!--
	<div class="card" id="back">
		<h2 class="name">Jacob Ford</h2>
		<h3 class="title">Designer&nbsp;<span class="lc">of</span> Things</h3>
	</div>
	-->
</div>
</body>
</html>
