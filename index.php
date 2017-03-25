<?php require_once( 'couch/cms.php' ); ?>

<cms:template tittle='Home'>
<cms:editable name='blog_content1' type='richtext' />
<cms:editable name='image_slider1'
crop='1'
width='600'
height='300'
type='image'
/>

<cms:editable name='blog_content2' type='richtext' />
<cms:editable name='image_slider2'
crop='1'
width='600'
height='300'
type='image'
/>

<cms:editable name='blog_content3' type='richtext' />
<cms:editable name='image_slider3'
crop='1'
width='600'
height='300'
type='image'
/>
</cms:template>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Aurelius | A premium Business and Portfolio theme</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/styles.css" />

	<!-- Scripts -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.roundabout-1.0.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript">
		$(document).ready(function() { //Start up our Featured Project Carosuel
			$('#featured ul').roundabout({
				easing: 'easeOutInCirc',
				duration: 600
			});
		});
	</script>

	<!--[if IE 6]>
	<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
	<script>
	  /* EXAMPLE */
	  DD_belatedPNG.fix('.button');
	  DD_belatedPNG.fix('.quicknavgrid_3 img');

	  /* string argument can be any CSS selector */
	  /* .png_bg example is unnecessary */
	  /* change it to what suits you! */
	</script>
	<![endif]-->
</head>
<body>
	<div id="wrapper" class="container_12 clearfix">

		<!-- Text Logo -->
		<h1 id="logo" class="grid_4">Aurelius</h1>

		<!-- Navigation Menu -->
		<ul id="navigation" class="grid_8">
			<li><a href="contact.html"><span class="meta">Get in touch</span><br />Contact Us</a></li>
			<li><a href="blog.html"><span class="meta">Latest news</span><br />Blog</a></li>
			<li><a href="portfolio.html"><span class="meta">Our latest work</span><br />Portfolio</a></li>

			<li><a href="about.html"><span class="meta">Who are we?</span><br />About</a></li>
			<li><a href="index.html" class="current"><span class="meta">Homepage</span><br />Home</a></li>
		</ul>

		<div class="hr grid_12">&nbsp;</div>
		<div class="clear"></div>

		<!-- Featured Image Slider -->
		<div id="featured" class="clearfix grid_12">
			<ul>
				<li>
					<a href="portfolio_single.html">
						<span>Read about this project</span>
						
						<img src="<cms:show image_slider1 />">
						
					</a>
				</li>
				<li>
					<a href="portfolio_single.html">
						<span>Read about this project</span>
						<img src="<cms:show image_slider2 />">
					</a>
				</li>
				<li>
					<a href="portfolio_single.html">
						<span>Read about this project</span>
						<img src="<cms:show image_slider3 />">
					</a>
				</li>
			</ul>
		</div>
		
		<div class="hr grid_12 clearfix">&nbsp;</div>

		<!-- Caption Line -->
		<cms:editable name='main_content' type='richtext'>
		<h2 class="grid_12 caption clearfix">Welcome! This is <span>Aurelius</span>, a slick, professional <u>Business</u> &amp; <u>Portfolio</u> theme built to engage the user in your work.</h2>
		
		<div class="hr grid_12 clearfix quicknavhr">&nbsp;</div>
		<div id="quicknav" class="grid_12">
			<a class="quicknavgrid_3 quicknav alpha" href="portfolio.html">
					<h4 class="title ">Recent Work</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="images/Art_Artdesigner.lv.png" /></p>

			</a>
			<a class="quicknavgrid_3 quicknav" href="about.html">
					<h4 class="title ">Learn about us</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="images/info.png" /></p>

			</a>
			<a class="quicknavgrid_3 quicknav" href="blog.html">
					<h4 class="title ">Read our blog</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="images/Blog_Artdesigner.lv.png" /></p>

			</a>
			<a class="quicknavgrid_3 quicknav lastelem" href="#">
					<h4 class="title ">Follow on Twitter</h4>
					<p>Cras vestibulum lorem et dui mollis sed posuere leo semper. </p>
					<p style="text-align:center;"><img alt="" src="images/hungry_bird.png" /></p>
			</a>
		</div>
		</cms:editable>
		<div class="hr grid_12 clearfix">&nbsp;</div>
		<!-- Footer -->
		<cms:editable name='footer' type='richtext'>
		<p class="grid_12 footer clearfix">
			<span class="float"><b>&copy; Copyright</b> <a href="">QwibbleDesigns</a> - remove upon purchase.</span>
			<a class="float right" href="#">top</a>
		</p>
		</cms:editable>
	</div><!--end wrapper-->
</body>
</html>
<?php COUCH::invoke(); ?>
