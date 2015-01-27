<?php
include_once(dirname(__FILE__) . '/config.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- On test release branch, do not let search engines index pages -->
	<meta name="robots" content="noindex, nofollow">

	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title><?php if($pageTitle != '') { echo $pageTitle . ' | '; } ?>CSCW <?php echo $year; ?></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Mobile Specific Metas
	================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS
	================================================== -->
	<link rel="stylesheet" href="<?php echo $basePath; ?>/css/base.css">
	<link rel="stylesheet" href="<?php echo $basePath; ?>/css/styles.css">
	<link rel="stylesheet" href="<?php echo $basePath; ?>/css/layout.css">

	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="<?php echo $basePath; ?>/favicon.ico?v=2" />

	<!-- Webfonts
	================================================== -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,400' rel='stylesheet' type='text/css'>
	
	<!-- Google Analytics -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-50637706-1', 'acm.org');
		ga('send', 'pageview');
	</script>
	
</head>
<body class="<?php echo $section; ?>">

	<header role="banner" class="clearfix">
		<div class="container">
			<div class="brand clearfix">
				<div class="logo">
					<a href="<?php echo $basePath; ?>/">CSCW <?php echo $year; ?></a>
				</div>
				<div class="title-block">
					<h1><small>The <?php echo $nth; ?> ACM conference on</small> 
					Computer-Supported Cooperative<br> Work and Social Computing
					<small><?php echo "$datesYear"; ?></small></h1>
				</div>
			</div>

		</div>
		<div class="header-strip">
			
		</div>
	</header>
	<a href="#menu" class="menu-link">Menu</a>			
	<nav role="navigation" id="menu">
		<ul>
			<li><a href="<?php echo $basePath; ?>/" class="home">Home</a></li>
			<li><a href="<?php echo $basePath; ?>/submit/" class="submit">Submit</a></li>
			<li><a href="<?php echo $basePath; ?>/attend/" class="attend">Attend</a></li>
			<li><a href="<?php echo $basePath; ?>/program/" class="program">Program</a></li>
			<li><a href="<?php echo $basePath; ?>/volunteer/" class="volunteer">Volunteer</a></li>
			<li><a href="<?php echo $basePath; ?>/committee/" class="committee">Committee</a></li>
			<li><a href="<?php echo $basePath; ?>/sponsors/" class="sponsors">Sponsors</a></li>
		</ul>
	</nav>