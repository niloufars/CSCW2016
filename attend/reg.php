<?php
$pageTitle = 'Attending CSCW';
$section = 'attend';
$basePath = '..';
include_once ('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Attending</h2>
				<ul class="subnav" id="nav_attend">
					<li><a href="index.php">Overview</a></li>
					<li><a href="reg.php" class="active">Conference Registration</a></li>
					<li><a href="hotel.php">Hotel</a></li>
					<li><a href="visas.php">Visas</a></li>
					<li><a href="travel.php">Travel &amp; Transportation</a></li>
					<li><a href="local.php">Local Attractions</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main">
			<h1>Registration</h1>
			<p>Please check back for rates, deadlines, and further information about registering for CSCW <?php echo $year; ?>.</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
			<p>&nbsp;</p>
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>