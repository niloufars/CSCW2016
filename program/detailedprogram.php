<?php
$pageTitle = "CSCW $year | Program Overview";
$section = 'program';
$basePath = '..';
include_once ('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Program</h2>
				<ul class="subnav" id="nav_program">
					<li><a href="index.php">Program Overview</a></li>
					<li><a href="keynotes.php">Keynote Speakers</a></li>
					<li><a href="detailedprogram.php" class="active">Detailed Program</a></li> 
					<li><a href="workshops.php">Workshops</a></li> 
<!-- 					<li><a href="posters.php">Interactive Posters</a></li> -->
<!-- 					<li><a href="panels.php">Panels</a></li> -->
<!-- 					<li><a href="dc.php">Doctoral Colloquium</a></li> -->
<!-- 					<li><a href="demos.php">Demonstrations</a></li> -->
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main" id="content">
			<h1>Advance Program</h1>
			<p>The CSCW 2016 advance program is available through Confer, a tool
				to help conference-goers discover and remember papers and people.
				You can <a href="http://confer.csail.mit.edu/login?redirect_url=/cscw2016/schedule">create an account</a>
				that you can use to access the program across devices; you can 
				also <a href="http://confer.csail.mit.edu/cscw2016/schedule">browse the program as a guest</a>.</p>
					</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>