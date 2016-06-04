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
<body>
<div id="container">
<?php htmlheader($pageClass) ?>
	<div class="card" id="front">
		<h3 class="contact email">j@cobford.com</h3>
		<h3 class="contact phone">(<span class="three digits expand">email me first</span>)<span class="subscribernumber digits contract"> <span class="three digits">000</span>-<span class="four digits">0000</span></span></h3>
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
