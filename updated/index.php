<!DOCTYPE html>
<html class="uk-height-viewport uk-width-1-1">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">﻿
	<title>Special Technical Servies - Home</title>
	<link rel="stylesheet" href="assets/libraries/uikit/css/uikit.min.css" />
	<link rel="stylesheet" href="assets/css/user.css" />
	<link rel="icon" href="assets/img/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="assets/libraries/uikit/js/uikit.min.js"></script>
	<script src="assets/js/user.js"></script>
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-76721709-1', 'auto');
		ga('send', 'pageview');	
	</script>
</head>
<body class="uk-height-1-2">

<?php include 'heading.php';?>

	<!--Banner Picture-->
	<div class="uk-grid">
		<div class="uk-width-1-1">
			<div id="background-area">
				<img class="display" src="assets/img/banner.jpg" alt=banner>
			<div>
		</div>
	</div>
	<!--END Banner Picture-->


	<!--Mini Content-->
	<section id="miniLinks" class="uk-width-3-5  uk-container-center">
		<article class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
		<h3><img class="uk-res"src="assets/img/energy.png">Static Control</h3>
		<p>STS offers many options to help protect personal equipment, material, and plant operations from catastrophic damage. </p>
		<a href="units.php">Read More <i class="uk-icon-caret-right"></i></a>
		</article>

		<article class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
		<h3><img src="assets/img/wrench.png">Replacement Parts</h3>
		<p>Did something break? View our wide range of replacement parts available.</p>
		<a href="replacement.php">Read More <i class="uk-icon-caret-right"></i></a>
		</article>

		<article class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
		<h3><img src="assets/img/truck.png">Current Applications</h3>
		<p>Our products can be found on mobile vehicles, machinery, receiving containers, and marine vessels.</p>
		<a href="applications.php">Read More <i class="uk-icon-caret-right"></i></a>
		</article>

		<article class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
		<h3><img src="assets/img/purchase.png">Purchasing Product</h3>
		<p>Already know what you need? Check out our extensive ordering selections available.</p>
		<a href="ordering_guide.php">Read More <i class="uk-icon-caret-right"></i></a><!--Add RFQ link here eventually -->
		</article>

	</section>

<?php include 'footer.php';?>

</body>
</html>