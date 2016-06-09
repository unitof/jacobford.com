<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$pageClass = "project";
	$object = "Tomographic Topography";
	// $client = "Myself";
	$title = $object;
	$middle = $object;
	$bottom = makelastspnb("A Personal Academic Project");
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
	<meta name="Description" content="We use our vision to investigate things we cannot see. Why not also use our sense of touch? 3D-printed brain scans would allow us to feel the mind.">
</head>
<body>
<div id="container">
<?php htmlheader($pageClass, $middle, $bottom, true); ?>
	<div id="story">
		<div class="overhang">
			<img src="closetop.jpg" alt="Spikes jut up from a tangible brain model. The peaks represent areas of high activity. Valleys represent areas of low activity.">
		</div>
		<p>When we want want to know what&rsquo;s going on inside someone&rsquo;s brain, we inject a radioactive tracer into their blood and give it a minute or two to flow throughout the body. The most active areas of the brain demand the most blood, so they begin emitting the most radiation, which we can measure. The process is called a PET scan: <i>positron emission tomography</i>. The result is a grid of numbers: a two-dimensional slice of the brain divided into a grid x- and y-coordinates, each assigned a numeric value corresponding to its level of brain activity.</p>
		<div class="underhang">
			<img src="petiioutputgrid.jpg" alt="A grid of numbers on a typewritten document represents recorded radiation levels in an early PET test. Inscribed in the lower left-hand corner are those numbers mapped to a black-to-white gradient.">
			<p class="caption">Image <a href="http://jnm.snmjournals.org/content/16/3/210.full.pdf+html?sid=7ae896d0-ab5a-4ed0-94b3-0eb5aab36e28">via</a> Michael E. Phelps (N.b. the E.) et al.</p>
		</div>
		<p>But humans are notoriously bad at deriving meaning from grids of numbers, so the numbers are mapped to color values, using a black-to-white gradient. The lowest value is mapped to black, the highest to white, and all values in between are assigned corresponding shades of grey. The grid is now an image,  It&rsquo;s our cultural instinct to represent data visually, but the habit has consequenses.</p>
		<p>On a simple black-to-white gradient, the difference between close values can be difficult to detect, </p>
		<p>Gradients have long been used to store topographic data using NASA&rsquo;s GeoTIFF specification. High elevations are mapped to white, low to black. The only difference is that we never analyze terrain data as these flat images. The GeoTIFF image is only an intermediary data format, and as soon as possible we convert it into a 3D model of the land it represents.</p>
		<div>
			<img class="border" src="iol.png" alt="Infrastructures of Labor: grey boxes stacked like columns in a newspaper">
			<p class="caption">Infrastructures of Labor</p>
		</div>
		<div>
			<img src="lis.png" alt="Life is Sacred: bright yellow and grey and about Antanas Mockus">
			<p class="caption">Life is Sacred</p>
		</div>
		<div>
			<img src="trthr.png" alt="The Right to Have Rights: Citizenship and the Future of Cities, in red, maroon, and very light pink where the Is are stacked and vertically joined">
			<p class="caption">The Right to Have Rights</p>
		</div>
		<div>
			<img src="to.png" alt="The Occupiers: The Making of a 99 Percent Movement in four shades of grey">
			<p class="caption">The Occupiers</p>
		</div>
		<div>
			<img src="tftt.png" alt="The Fire This Time: Decolonizing Higher Education, in red and very light pink">
			<p class="caption">The Fire This Time</p>
		</div>
		<div>
			<img src="ior.png" alt="Infrustructures of Resiliance: dark grey and bright red and an ampersand">
			<p class="caption">Infrustructures of Resiliance</p>
		</div>
		<div>
			<img src="nrwu.png" alt="No Revolution Without Us: Feminists of the Black Panther Party, hot pink and dark black split down the middle; Black Panthers right, Feminists left">
			<p class="caption">No Revolution Without Us</p>
		</div>
		<div>
			<img src="stpm.png" alt="(Still) the Progressive Mayor?: Bill de Blasio in Year Two.">
			<p class="caption">(Still) the Progressive Mayor?</p>
		</div>
		<div class="credits">
			<p>Projects managed by <span class="name">Rebecca Amato</span>.</p>
			<p>Deadlines lovingly kept by <span class="name">Jason Laning</span>.</p>
			<p>Designed by <span class="name">Jacob Ford</span> in 2015 and 2016.</p>
		</div>
	</div>
<?php htmlfooter($pageClass); ?>
</div>
</body>
</html>
