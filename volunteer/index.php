<?php
$pageTitle = "CSCW $year | Volunteer";
$section = 'volunteer';
$basePath = '..';
include_once ('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Volunteering &amp; Mentorship</h2>
				<ul class="subnav" id="nav_volunteer">
					<li><a href="index.php" class="active">Overview</a></li>
					<li><a href="sv.php">Student Volunteers</a></li>
					<li><a href="mentor.php">Reviewer Mentor Program</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main" id="content">
			<h1>Volunteering &amp; Mentorship</h1>
			<p>
				Students are a vital component of the CSCW conference. Here you can
				find more information about <a href="sv.php">student volunteering</a>
				as well as the <a href="mentor.php">Reviewer Mentor Program</a>.
			</p>
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>