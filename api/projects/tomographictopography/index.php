<!DOCTYPE html>
<?php
	require_once("api/functions.php");
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
	<style type="text/css">
		/* target the Mojo model in the grid, make it sit just right */
		.gallery .frame.modeloffset {
			position: relative;
		}
		.gallery .frame.modeloffset img {
			visibility: hidden;
		}
		.gallery .frame.modeloffset::after {
			content: "";
			position: absolute;
			width: 123.622047244%;
			height: 122.047244094%;
			top: -20.5%;
			left: -1%;
			background-image: url('gradientgrid/bnclrmojo@3x.png');
			background-size: contain;
		}
	</style>
</head>
<body>
<div id="container">
<?php htmlheader($pageClass, $middle, $bottom, true); ?>
	<div id="story">
		<div class="overhang">
			<img <?php htmlsrcset('crowncloseup.jpg', $pageClass, 3, true); ?> alt="Spikes jut up from a tangible brain model. The peaks represent areas of high activity. Valleys represent areas of low activity.">
			<p class="caption">Printed on a 3D Systems ProJet 660</p>
		</div>
		<p>When we want want to know what&rsquo;s going on inside someone&rsquo;s brain, we inject a radioactive tracer into their blood and give it a minute or two to flow throughout the body. The most active areas of the brain demand the most blood, so they begin emitting the most radiation, which we can measure. The process is called a PET scan: <i>positron emission tomography</i>. The result is a grid of numbers: a two-dimensional slice of the brain divided into a grid x- and y-coordinates, each assigned a numeric value corresponding to its level of brain activity.</p>
		<div class="underhang">
			<img src="petiioutputgrid.png" alt="A grid of numbers on a typewritten document represents recorded radiation levels in an early PET test. Inscribed in the lower left-hand corner are those numbers mapped to a black-to-white gradient.">
			<p class="caption">Image <a href="http://jnm.snmjournals.org/content/16/3/210.full.pdf+html?sid=7ae896d0-ab5a-4ed0-94b3-0eb5aab36e28">via</a> Michael E. Phelps (N.b. the E.) et al.</p>
		</div>
		<p>But humans struggle to derive intrinsic meaning from grids of numbers, so the numbers are mapped to color values, using a black-to-white gradient. The lowest value is mapped to black, the highest to white, and all values in between are assigned corresponding shades of grey. The grid becomes an image; coordinates now pixels. It&rsquo;s our cultural instinct to represent data visually, but the habit has consequences.</p>
		<p>On a simple black-to-white gradient, the difference between close values can be difficult to detect. Say we have a gradient mapping the values from 0 to 1 along a greyscale gradient from black to white&mdash;for this example, units aren&rsquo;t important. Now say it is necessary to distinguish the color value of 0.4 from that of 0.5. We take samples of the gradient at those two points, and we get two very similar shades of grey. Those with healthy vision could probably differentiate between the two shades of grey, but most would have a difficult time placing the shades back in the gradient, and estimating their corresponding values.</p>
		<div class="overhang">
			<img src="gradientcompare.png" srcset="gradientcompare.svg, gradientcompare@2x.png 2x, gradientcompare@3x.png 3x" alt="Values from 0 to 1 are distributed along two gradients: one goes from black (0) to white (1). The other begins black (0), then cycles through violet, blue, green, yellow, orange, and then red (1). Samples are taken at the values 0.4 and 0.5 on each gradient. On the black-to-white one, it's two similar shades of grey. On the rainbow one, it's blue and green.">
		</div>
		<p>So we began to use color. When we map values along a gradient with multiple color stops, close values become much easier to distinguish. If we switch from a black-to-white gradient to one which begins at black then cycles through the rainbow of the visible spectrum, those same values of 0.4 and 0.5 are the now the difference between green and blue, instead of medium grey and lighter grey. Alternatives to the rainbow gradient were developed which used different colors in different orders, or interspersed bands within the gradient to aid in differentiation</p>
		<p>And eventually it gets completely out of hand.</p>
		<div class="overhang">
			<div class="gallery">
				<div class="frame"><img src="gradientgrid/bnclr14.gif" alt="Gradient cycles through black, green, blue, pink, black, red, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr30.gif" alt="Gradient cycles through violet, merlot, periwinkle, green, violet, chartreuse, teal, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr3.gif" alt="Gradient cycles through black, red, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr15.gif" alt="Gradient cycles through black, red, violet, yellow, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr16.gif" alt="Gradient cycles through violet, white, navy, yellow"></div>
				<div class="frame"><img src="gradientgrid/bnclr22.gif" alt="Gradient cycles through white, violet, blue, green, yellow, orange, red"></div>
				<div class="frame"><img src="gradientgrid/bnclr17.gif" alt="Gradient cycles through violet, blue, green, orange, red"></div>
			</div>
			<div class="gallery">
				<div class="frame"><img src="gradientgrid/bnclr31.gif" alt="Gradient cycles through violet, blue, green, yellow; with pink bands interspersed"></div>
				<div class="frame"><img src="gradientgrid/bnclr23.gif" alt="Gradient cycles through black, violet, blue, green, yellow, orange, red; with black bands interspersed"></div>
				<div class="frame"><img src="gradientgrid/bnclr13.gif" alt="Gradient cycles through black, violet, blue, green, yellow, orange, red"></div>
				<div class="frame"><img src="gradientgrid/bnclr0.gif" alt="Gradient from black to white"></div>
				<div class="frame"><img src="gradientgrid/bnclr29.gif" alt="Gradient cycles through teal, yellow, violet, green, violet, merlot, violet, black, violet, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr26.gif" alt="Gradient cycles through black, violet, blue, green, yellow, orange, red, merlot; with black bands interspersed"></div>
				<div class="frame"><img src="gradientgrid/bnclr37.gif" alt="Gradient cycles through violet, blue, red, violet; with green bands interspersed"></div>
			</div>
			<div class="gallery">
				<div class="frame"><img src="gradientgrid/bnclr35.gif" alt="Gradient cycles through violet, black, violet, merlot, periwinkle, green, violet, chartreuse, teal"></div>
				<div class="frame"><img src="gradientgrid/bnclr21.gif" alt="Gradient cycles through red, pink, violet, teal, creamy green, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr34.gif" alt="Gradient cycles through violet, blue, green, yellow, orange, red"></div>
				<div class="frame"><img src="gradientgrid/bnclr36.gif" alt="Gradient cycles through violet, green, blue, red, periwinkle, brown, periwinkle, green, violet"></div>
				<div class="frame"><img src="gradientgrid/bnclr33.gif" alt="Gradient cycles through violet, blue, yellow, red, merlot"></div>
				<div class="frame"><img src="gradientgrid/bnclr24.gif" alt="Gradient cycles through green, teal, pink, yellow, red, blue, black"></div>
				<div class="frame"><img src="gradientgrid/bnclr32.gif" alt="Gradient cycles through black, creamy green, violet, creamy green, merlot, violet, creamy green, merlot, pink, creamy white, pink, red"></div>
			</div>
			<p class="caption">Every scan shows the exact same data from the exact same PET scan, but each mapped to a different gradient<br>Images <a href="https://web.archive.org/web/20050307163158/http://www.nucmed.buffalo.edu/nrlgy1.htm#fdg_normal_brainx31">via</a> Brian Murphy</p>
		</div>
		<p>With a wealth of color options arrives a wealth of problems. Brian Murphy, collector of these images, points out one, which he calls <em>dialing a defect</em>: with a whole stockpile of gradients available, one can simply choose (or create) the gradient which happens to highlight whatever area of the brain they want to draw attention to, and objectivity can wither. Different medical schools have adopted different gradients as their respective &ldquo;favorites,&rdquo; and their students are trained on <em>that</em> gradient. Collaboration suffers. And we&rsquo;ve formed strong cultural associations with certain colors&mdash;red means hot, or danger, or stop; blue means cold; green means good, or go&mdash;strong enough that even the most well-trained neuroscientist might have trouble viewing certain colors with pure objectivity, especially when a ployingly saturated color like red falls in the middle of a gradient, and means nothing of significance.</p>
		<div class="underhang">
			<div class="gallery">
				<div class="frame"><img src="stoplight.jpg" srcset="stoplight@2x.jpg 2x" alt="A stoplight lit red"></div>
				<div class="frame"><img src="faucets.jpg" alt="A water cooler with handles red and blue"></div>
			</div>
			<p class="caption">Stoplight <a href="https://commons.wikimedia.org/wiki/File:Modern_British_LED_Traffic_Light.jpg">via</a> Unisouth<br>Cooler <a href="http://www.purewaterdynamics.com/boiling-water-dispensers.asp">via</a> Pure Water Dynamics</p>
		</div>
		<p>A neuroscientist&rsquo;s understanding of brain activity is a stack of representation away from the patient&rsquo;s actual brain. Activity is measured via bloodflow, which is measured via radiation, which is measured numerically by a machine. The number values are mapped to color values along a gradient, and the resulting image is printed in ink or displayed on a screen, the light of which passes through a neuroscientist&rsquo;s eye and is processed in that neuroscientist&rsquo;s brain. The system is kind of beautiful in its intricacy, but now we&rsquo;re depending on a doctor&rsquo;s color perception to analyze something which is invisible.</p>
		<p>And what about colorblind neuroscientists? What about <em>completely</em> blind neuroscientists? We&rsquo;ve accidentally excluded an entire community of people who cannot fully see from a field which is all about exploring something which cannot be seen.</p>
		<div class="overhang">
			<img src="rockymtnsdem.jpg" alt="The elevation of Larkspur Mountain, mapped along a gradient from black to white">
			<p class="caption">DEM image of Larkspur Mountain, Colorado, <a href="http://terrain.party/">via</a> Terrain.Party</p>
		</div>
		<p>There&rsquo;s another popular use for gradients: storing geographic elevation data. Terrain data can be stored as a regular image file, where each pixel represents a geographic coordinate, and the color value of that pixel corresponds to the elevation at that point. The highest elevation is mapped to white, the lowest to black. It&rsquo;s called a DEM image: a digital elevation model, stored as an image. The only difference is that we never really analyze these flat images <em>as</em> terrain data. The image is only an intermediary data format, and as soon as possible it is converted into a 3D model of the land it represents.</p>
		<p>So I ran the result of a PET scan through software designed for converting DEM images into 3D elevation models, and got the terrain of a working brain. The wondrous thing about 3D models is that they can be 3D-printed, and brain activity can be made tactile.</p>
		<div class="overhang">
			<img <?php htmlsrcset('brainmodel.jpg', $pageClass, 3, true); ?> alt="Cream-colored 3D model of a brain scan: spikes coming straight up out of a square.">
			<p class="caption">Printed on a Stratasys Mojo</p>
		</div>
		<p>Physical space is much more universal, much less arbitrary than visual space. No training is necessary; we&mdash;the human species&mdash;have been exploring and manipulating it for a very long time. It comes very naturally that a physical peak on a 3D model might represent an area of high activity in the brain, and that a valley could represent a relatively inactive area. Background scatter radiation, the radiating lines which in some color gradients becomes oddly apparent, is easy for the human brain to isolate and filter out on a physical model. We could employ calipers and measuring sticks&mdash;devices we already use to measure physical reality&mdash;to measure and compare brain activity. The blind could <em>feel</em> brain activity, and understand it using a sense already keenly developed.</p>
		<div class="overhang">
			<div class="gallery">
				<div class="frame"><img src="gradientgrid/bnclr14.gif" alt="Gradient cycles through black, green, blue, pink, black, red, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr30.gif" alt="Gradient cycles through violet, merlot, periwinkle, green, violet, chartreuse, teal, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr3.gif" alt="Gradient cycles through black, red, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr15.gif" alt="Gradient cycles through black, red, violet, yellow, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr16.gif" alt="Gradient cycles through violet, white, navy, yellow"></div>
				<div class="frame"><img src="gradientgrid/bnclr22.gif" alt="Gradient cycles through white, violet, blue, green, yellow, orange, red"></div>
				<div class="frame"><img src="gradientgrid/bnclr17.gif" alt="Gradient cycles through violet, blue, green, orange, red"></div>
			</div>
			<div class="gallery">
				<div class="frame"><img src="gradientgrid/bnclr31.gif" alt="Gradient cycles through violet, blue, green, yellow; with pink bands interspersed"></div>
				<div class="frame"><img src="gradientgrid/bnclr23.gif" alt="Gradient cycles through black, violet, blue, green, yellow, orange, red; with black bands interspersed"></div>
				<div class="frame"><img src="gradientgrid/bnclr13.gif" alt="Gradient cycles through black, violet, blue, green, yellow, orange, red"></div>
				<div class="frame modeloffset"><img src="gradientgrid/bnclrmojo_ingrid.png" alt="A 3D-printed model of the data which cycles through heights"></div>
				<div class="frame"><img src="gradientgrid/bnclr29.gif" alt="Gradient cycles through teal, yellow, violet, green, violet, merlot, violet, black, violet, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr26.gif" alt="Gradient cycles through black, violet, blue, green, yellow, orange, red, merlot; with black bands interspersed"></div>
				<div class="frame"><img src="gradientgrid/bnclr37.gif" alt="Gradient cycles through violet, blue, red, violet; with green bands interspersed"></div>
			</div>
			<div class="gallery">
				<div class="frame"><img src="gradientgrid/bnclr35.gif" alt="Gradient cycles through violet, black, violet, merlot, periwinkle, green, violet, chartreuse, teal"></div>
				<div class="frame"><img src="gradientgrid/bnclr21.gif" alt="Gradient cycles through red, pink, violet, teal, creamy green, white"></div>
				<div class="frame"><img src="gradientgrid/bnclr34.gif" alt="Gradient cycles through violet, blue, green, yellow, orange, red"></div>
				<div class="frame"><img src="gradientgrid/bnclr36.gif" alt="Gradient cycles through violet, green, blue, red, periwinkle, brown, periwinkle, green, violet"></div>
				<div class="frame"><img src="gradientgrid/bnclr33.gif" alt="Gradient cycles through violet, blue, yellow, red, merlot"></div>
				<div class="frame"><img src="gradientgrid/bnclr24.gif" alt="Gradient cycles through green, teal, pink, yellow, red, blue, black"></div>
				<div class="frame"><img src="gradientgrid/bnclr32.gif" alt="Gradient cycles through black, creamy green, violet, creamy green, merlot, violet, creamy green, merlot, pink, creamy white, pink, red"></div>
			</div>
		</div>
		<p>This project does not exist to say everything we&rsquo;ve been doing to analyze the brain is incorrect, but to ask why we&rsquo;ve chosen our sense of vision to be the authoritative experience of the world and its data. Why not also trust in our sense of touch?</p>
		<div class="overhang">
			<div class="embed r16x9">
				<iframe src='https://www.youtube.com/embed/cW2fR_6aM-Q' frameborder='0' allowfullscreen></iframe>
			</div>
		</div>
		<div class="credits">
			<p>Inspired by <span class="name">Joseph Dumit</span>&rsquo;s <a href="http://press.princeton.edu/titles/7674.html"><cite>Picturing Personhood</cite></a>.</p>
			<p>Developed in <span class="name">Matthew Stanley</span>&rsquo;s <a href="http://gallatin.nyu.edu/academics/courses/2015/FA/IDSEM-UG1534_001.html">class</a> at NYU Gallatin.</p>
			<p>Designed by <span class="name">Jacob Ford</span> in December 2015.</p>
		</div>
	</div>
<?php htmlfooter($pageClass); ?>
</div>
</body>
</html>
