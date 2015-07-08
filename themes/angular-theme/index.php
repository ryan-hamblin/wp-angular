<!DOCTYPE html>
<html lang="en" ng-app="wp-app">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Ryan Hamblin | Software Engineer</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/styles/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo get_template_directory_uri(); ?>/styles/styles.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ng-controller="Main">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll " href="#page-top">
                    <i class="fa fa-home"></i><span class="light">Hamblin</span>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">Home</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
		<header class="intro">
			<div class="intro-body">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
							<h1 class="brand-heading">{{name}}</h1>
							<p class="intro-text">Software Engineer in Salt Lake City, Utah</p>
						<a href="#about" class="btn btn-circle page-scroll">
							<i class="fa fa-angle-double-down animated"></i>
						</a>
						</div>
					</div>
				</div>
			</div>
		</header>

		<!-- About Section -->
		<section id="about" class="container content-section text-center">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="portrait">
					</div>
					<h2>About Ryan</h2>
					<p>Hey there! My name is Ryan and I amd a Software Engineer. My journey began in the fall of 2014 when I took an about face turn from "Outdoor Recreation Professional" to Web Development <a href="http://startbootstrap.com/template-overviews/grayscale/"></a></p>
					<a href="#work" class="btn btn-circle page-scroll">
						<i class="fa fa-angle-double-down animated"></i>
					</a>
				</div>
			</div>
		</section>

		<!-- Work Experience-->
		<section id="work" class="container content-section text-center">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h1>Work Experience</h1>
					<div class="col-md-4 ">
						<h3><a href="http://www.lifevantage.com" targe="_blank">LifeVantage</a></h3>
						<h5>UI/UX Developer</h5>
						<p>fill fill fill</p>
					</div>
					<div class="col-md-4">
						<h3><a href="http://www.devmounta.in" targe="_blank">DevMountain</a></h3>
						<h5>Student Mentor</h5>
						<p>fill fill fill</p>
					</div>
					<div class="col-md-4">
						<h3><a href="http://www.qzzr.com" targe="_blank">Qzzr</a></h3>
						<h5>Web Developer Intern</h5>
						<p>fill fill fill</p>
					</div>
				</div>
			</div>
			<div class="container text-center">
					<h3>Skill Set</h3>
					<ul>
						<li>HTML5</li>
						<li>CSS3</li>
						<li>JavaScript</li>
						<li>AngularJS</li>
						<li>JQuery</li>
						<li>NodeJS</li>
						<li>Express</li>
					</ul>
				</div>
				
					<a href="#contact" class="btn btn-circle page-scroll">
						<i class="fa fa-angle-double-down animated"></i>
					</a>
		</section>

    <!-- Contact Section -->
		<section id="contact" class="container content-section text-center">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<h2>Feel free to drop a line!</h2>
					<p><a href="mailto:ryanhca@gmail.com">ryanhca@gmail.com</a>
					</p>
					<ul class="list-inline banner-social-buttons">
						<li>
							<a href="https://twitter.com/ryanleehamblin" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
						</li>
						<li>
							<a href="https://github.com/ryanhca" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
						</li>
						<li>
							<a href="https://www.linkedin.com/pub/ryan-hamblin/a3/a7/a88" target="_blank" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">LinkedIn</span></a>
						</li>
					</ul>
				</div>
			</div>
		</section>
    
    <!-- Footer -->
    <footer>
        <div class="container content-section text-center">
            <p>&copy; <?php echo date('Y') ?> Ryan Hamblin</p>
            <a href="#page-top" class="btn btn-circle page-scroll">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
        </div>
    </footer>

    <!-- JavaScript includes-->
   
    <script src="<?php echo get_template_directory_uri(); ?>/angular/angular.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/angular-route/angular-route.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js-files/app.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js-files/mainCtrl.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js-files/routeProvider.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js-files/contentCtrl.js"></script>

    <!-- Google Maps API Key - Use your own API key to enable the map feature. More information on the Google Maps API can be found at https://developers.google.com/maps/ -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwyjqIxmqeW9Up3oBq52O--bZi8r66eAM&sensor=false"></script>

    <!-- Custom Theme JavaScript -->
 		<script src="js-files/theme.js"></script> 

</body>

</html>
