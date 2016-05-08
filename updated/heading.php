<!DOCTYPE html>
<html class="uk-height-viewport uk-width-1-1">
<head>
	<title>Special Technical Servies</title>
	<link rel="stylesheet" href="assets/libraries/uikit/css/uikit.min.css" />
	<link rel="stylesheet" href="assets/css/user.css" />
	<link rel="icon" href="assets/img/favicon.ico">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
	<script src="assets/libraries/uikit/js/uikit.min.js"></script>
	<script src="assets/js/user.js"></script>
</head>
<body class="uk-height-1-1">	

	<!--Main Nav Bar-->
	<nav class="uk-navbar uk-navbar-attached">
        <div class="uk-container uk-container-center">
    		<div class="assisted_center">
	            <a class="uk-navbar-brand uk-visible-large" href="index.php"><img class="uk-margin uk-margin-remove uk-visible-large" src="assets/img/logoBrand.png" width="90" height="30"></a>

	            <ul class="uk-navbar-nav uk-visible-large">
	                <li><a href="index.php">HOME</a></li>
	                <li class="uk-parent" data-uk-dropdown><a href="products.php">PRODUCTS<i class="uk-icon-caret-down"></i></a>
	                	<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">
					    <ul class="uk-nav uk-nav-navbar">
		            		<li><a href="units.php">Ground Monitoring System</a></li>
		            		<li><a href="cables.php">Grounding Cables</a></li>
		            		<li><a href="clamps.php">Grounding Clamps</a></li>
		            		<li><a href="accessories.php">Accessories</a></li>
			            </ul>
						</div>
	                </li>
	                <li><a href="replacement.php">REPLACEMENT PARTS</a></li>
	                <li><a href="ordering_guide.php">ORDERING GUIDE</a></li>
	                <li><a href="applications.php">APPLICATIONS</a></li>
	                <li><a href="tech_info.php">TECHNICAL INFORMATION</a></li>
	            </ul>
	        </div>
            <a href="#offNav" class="uk-navbar-toggle uk-hidden-large" data-uk-offcanvas></a>

            <div class="uk-navbar-brand uk-navbar-center uk-hidden-large"><a href="index.php"><img src="assets/img/logoBrand.png" width="90" height="30"></a></div>
        </div>
    </nav>

	<!--Off Nav Bar-->
	<div id="offNav" class="uk-offcanvas">
		<div class="uk-offcanvas-bar">
			<ul class="uk-navbar-nav">
		        <li><a href="index.php">HOME</a></li>
		        <li class="uk-parent" data-uk-dropdown="{delay: 500, pos: 'bottom-center'}"><a href="products.php">PRODUCTS</a>
					<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom" >
					    <ul class="uk-nav uk-nav-navbar">
		            		<li><a href="units.php">Ground Monitoring System</a></li>
		            		<li><a href="cables.php">Grounding Cables</a></li>
		            		<li><a href="clamps.php">Grounding Clamps</a></li>
		            		<li><a href="accessories.php">Accessories</a></li>
			            </ul>
					</div>
		        </li>
		        <li><a href="replacement.php">REPLACEMENT PARTS</a></li>
		        <li><a href="ordering_guide.php">ORDERING GUIDE</a></li>
		        <li><a href="applications.php">APPLICATIONS</a></li>
		        <li><a href="tech_info.php">TECHNICAL INFORMATION</a></li>
		    </ul>
		</div>
	</div>
	<!--END Off Nav Bar-->
</body>