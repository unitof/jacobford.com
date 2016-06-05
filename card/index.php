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
	<section class="card-holder">
		<div class="card">
			<div class="card-face" id="back">
				<p class="contact email"><a class="hidden" href="mailto:j@cobford.com">j@cobford.com</a></p>
				<p class="contact phone">(<span class="three digits expand">best to <a href="mailto:j@cobford.com">email me</a> first</span>)<span class="subscribernumber digits contract"><span class="three digits">000</span>-<span class="four digits">0000</span></span></p>
			</div>
			<div class="card-face" id="front">
				<h2 class="name">Jacob Ford</h2>
				<h3 class="title">Designer&nbsp;<span class="lc">of</span> Things</h3>
			</div>
		</div>
	</section>
</div>
</body>
</html>
