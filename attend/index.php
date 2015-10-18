<?php 
$pageTitle = 'Attending CSCW';
$section = 'attend';
$basePath = '..';
include_once('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Attending</h2>
				<ul class="subnav" id="nav_attend">
					<li><a href="index.php" class="active">Overview</a></li>
					<li><a href="reg.php">Conference Registration</a></li>
					<li><a href="hotel.php">Hotel</a></li>
					<li><a href="visas.php">Visas</a></li>
					<li><a href="travel.php">Travel &amp; Transportation</a></li>
					<li><a href="local.php">Local Attractions</a></li>
					<li><a href="telepresence.php">Telepresence</a></li>
					<li><a href="accessibility.php">Accessibility</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main" id="content">
			<h1>Attending CSCW <?php echo $year; ?></h1>
			<p><img src="../images/2016-img/Ggb_by_night.jpg" alt="False Creek" class="img-right"  style="width: 400px"/>CSCW <?php echo $year; ?> will take place at the Hyatt Regency San Francisco in San Francisco, CA.</p>
			<p>
				Located on the West Coast of the United States, San Francisco is one of the most
				renowned cities of the world and offers unique opportunities for site-seeing,
				shopping, and entertainment. San Francisco offers steep rolling hills, eclectic
				architecture, and world-famous attractions such as the Golden Gate Bridge, cable
				cars, the former prison on Alcatraz island, Fisherman’s Wharf, and Chinatown
				district. </p>

				<p>
					San Francisco contains more than 50 hills and many famous neighborhoods – such
					as Nob Hill, Potrero Hill, and Russian Hill – are named after the hills they are
					situated on. The historical center of the city, anchored by Market St and the
					waterfront, contains Financial District and Union Square, the principal shopping and
					hotel district. Other neighborhoods with interesting personalities are the Haight, the
					Castro, Noe Valley, and The Mission. The city offers many culinary delights such as
					Latin food in the Mission District, Asian food in Chinatown, and Italian food in North
					Beach. 
				</p>
				<p>
					San Francisco has a cool and mild Mediterranean climate. Late-Feb temperatures lie
					between a low of 48F and a high of 60F. 
				</p>
				<p>
					San Francisco and the Bay area offer something for everyone. For those who enjoy
					skiing or snowboarding, Lake Tahoe offers an abundance of world-class ski resorts.
					Wine aficionados can enjoy wine-tasting at Napa and Sonoma. Yosemite National
					Park and Sequoia &amp; Kings Canyon National Parks are a few hours away and offer
					excellent hiking and camping opportunities for outdoor enthusiasts. 
				</p>

				<p>Please find information here about <a href="reg.php" class="text">registering</a> for CSCW <?php echo $year; ?>, booking your stay at the conference <a href="hotel.php" class="text">hotel</a>, and obtaining a <a href="visas.php" class="text">visa</a>. You can also find information here about <?php echo $city; ?> <a href="travel.php" class="text">travel, transportation, and accessibility</a> as well as details about local <a href="local.php">tourist attractions</a>.</p>    
				<h3>Local Arrangements Co-Chairs</h3>
				<p>Judd Antin, Facebook<br />
					Sharoda Paul, GE Global Research<br />
					<a class="email" href="mailto:cscw<?php echo $year; ?>local@acm.org">cscw<?php echo $year; ?>local@acm.org</a></p>
				</article>
				
			</div>	
		</div>
		<?php 
		include_once('../_inc/footer.php');
		?>