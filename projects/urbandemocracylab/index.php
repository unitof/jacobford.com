<!DOCTYPE html>
<?php
	require_once("../../php/functions.php");
	$pageClass = "project";
	$object = "Civic Engagement Posters";
	$client = "the Urban Democracy Lab";
	$title = $object . " for " . $client;
	$middle = $object;
	$bottom = prependlcfor( makelastspnb($client) );
?>
<html>
<head>
<?php htmlhead($pageClass, $title); ?>
	<meta name="Description" content="A research lab founded by NYU Gallatin, Urban Democracy &ldquo;promotes critical, creative, just, and sustainable forms of urbanism, through scholarship, curricular activities, public engagement, and programming.&rdquo; We plan events that make people think, and I tried to make our posters do the same.">
</head>
<body>
<div id="container">
<?php htmlheader($pageClass, $middle, $bottom, true); ?>
	<div id="story">
		<div class="overhang">
			<img src="mfte.png" alt="Marching for the Extraordinary: a panel dicussion on the culture and spectacle of contemporary street bands.">
		</div>
		<p>A research laboratory founded by NYU Gallatin, the Urban Democracy Lab &ldquo;promotes critical, creative, just, and sustainable forms of urbanism, through scholarship, curricular activities, public engagement, and programming.&rdquo; We plan events that make people think, and I tried to make our posters do the same. Most were displayed in the Broadway-facing windows at Gallatin&rsquo;s One Washington Place lobby. Some included companion MailChimp templates for email campaigns.</p>
		<div class="overhang">
			<img src="war.svg" alt="We Are Revolutionaries" onerror="this.onerror=null; this.src='war.png'">
			<div class="gallery">
				<div class="frame"><img src="war-reject1.png" alt=""></div>
				<div class="frame"><img src="war-reject2.png" alt=""></div>
				<div class="frame"><img src="war-reject3.png" alt=""></div>
			</div>
			<p class="caption">Top: final design for We Are Revolutionaries<br>Bottom: three rejected designs made along the way</p>
		</div>
		<p>Copyediting is a vital part of design, and often this meant slicing paragraphs of event description into a phrase or two, then trusting the poster&lsquo;s graphic tension and visual puns to communicate the rest. But our audience is more than its attention span, and try to design posters that function in three phases:
		<ol>
			<li>The passerby: color scheme and iconography work to present something curious, something worth looking at. I do not spend minutes soaking in every advertisement in my periphery; I can&rsquo;t expect my viewers to do the same</li>
			<li>The skimmer: my poster may have earned someone&rsquo;s attention, but attention isn&rsquo;t dedication. Short phrases set in large type and composition should make the event&rsquo;s basic subject clear within five seconds, so the viewer knows if it&rsquo;s worth reading on.</li>
			<li>The reader: <i>now</i> we may expect the viewer to read blocks of text, but only very special viewers make it this far. They deserve something succint and well-composed. Details ready to be added to a calendar.</li>
		</ol></p>
		<div>
			<img class="border" src="iol.png" alt="Infrastructures of Labor: grey boxes stacked like a newspaper">
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
<?php htmlfooter(); ?>
</div>
</body>
</html>
