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

	<!--Main Content-->
	<div class="uk-grid product_content_info uk-container-center">
		<div class="uk-visible-large uk-width-1-4"></div>
	    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
	    	<img src="assets/img/circuit_board.jpg">
	    	<a href="units.html"><h3>Circuit Boards</h3></a>
	    	<p>Available for direct replacement for damaged boards. They need to be specified by voltage 12VDC, 24VDC, 120VAC, 240VAC. Some retrofit capabilities to older STS300 series models are possible. Contact us to confirm.</p>
	    </div>
	    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1 replace_style">
			<?php include 'assets/data/Website Tables/Circuit Boards/Circuit Boards.html';?>
	    </div>
		<div class="uk-visible-large uk-width-1-4"></div>
		<div class="uk-visible-large uk-width-1-4"></div>
	    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
	    	<a href="clamps.html"><img src="assets/img/clamp_2.png"></a>
	    	<a href="clamps.html"><h3>Ground Cable Clamps</h3></a>
	    	<p>Multiple styles and features to meet your needs</p>
	    </div>
	    <div class="uk-width-large-1-4 uk-width-medium-1-2 uk-width-small-1-1">
	    	<a href="options.html"><img src="assets/img/lights_2.png"></a>
	    	<a href="options.html"><h3>Options</h3></a>
	    	<p>Add features to increase the effectiveness of your ground monitoring system</p>
	    </div>
	</div>
	<!--END  Main Content-->


<?php include 'footer.php';?>

</body>
</html>