<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title><?php if($pageTitle != '') { echo $pageTitle . ' | '; } ?>CSCW 2015</title>
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
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
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
					<a href="/2015">CSCW 2015</a>
				</div>
				<div class="title-block">
					<h2><small>The 18th ACM conference on</small> Computer-Supported Cooperative Work and <span>Social Computing</span></h2>
					<h3>March 14-18, 2015 | Vancouver, BC, Canada</h3>
				</div>
			</div>
		</div>
	</header>
	<a href="#menu" class="menu-link">Menu</a>			
	<nav role="navigation" id="menu">
		<ul>
			<li><a href="/2015/" class="home">Home</a></li>
			<li><a href="/2015/submit/" class="submit">Submit</a></li>
			<li><a href="/2015/attend/" class="attend">Attend</a></li>
			<li><a href="/2015/program/" class="program">Program</a></li>
			<li><a href="/2015/volunteer/" class="volunteer">Volunteer</a></li>
			<li><a href="/2015/committee/" class="committee">Committee</a></li>
			<li><a href="/2015/sponsors/" class="sponsors">Sponsors</a></li>
		</ul>
	</nav>