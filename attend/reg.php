<?php
$pageTitle = 'Registration';
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
					<li><a href="telepresence.php">Telepresence</a></li>
					<li><a href="accessibility.php">Accessibility</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main" id="content">
			<h1>Registration</h1>
			<p>
				To register, visit the <a href="https://www.regonline.com/cscw16">CSCW
					2016 conference registration page</a>. Rates can be found below.
				Please note that Early registration rates are available through
				January 8 and Advance registration rates through February 5.
			</p>

			<h2>Registration Fees</h2>
			<div class="responsive-table">
				<table>
					<thead>
						<tr>
							<th></th>
							<th>Early Registration<br>(Jan 8)
							</th>
							<th>Advance Registration<br>(Feb 5)
							</th>
							<th>On-site Registration</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Student</td>
							<td>$275</td>
							<td>$345</td>
							<td>$395</td>
						</tr>
						<tr>
							<td>One-Day</td>
							<td>$375</td>
							<td>$400</td>
							<td>$425</td>
						</tr>
						<tr>
							<td>ACM/SIG Members</td>
							<td>$695</td>
							<td>$795</td>
							<td>$895</td>
						</tr>
						<tr>
							<td>Non-ACM/SIG Members</td>
							<td>$795</td>
							<td>$895</td>
							<td>$995</td>
						</tr>
					</tbody>
				</table>
			</div>

			<h2>Workshop Registration</h2>
			<div class="responsive-table">
				<table>
					<thead>
						<tr>
							<th></th>
							<th>Early Registration<br>(Jan 8)
							</th>
							<th>Advance Registration<br>(Feb 5)
							</th>
							<th>On-site Registration</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>ACM/SIG Member <br> Workshop w/Registration
							</td>
							<td>$175</td>
							<td>$175</td>
							<td>$175</td>
						</tr>

						<tr>
							<td>Non-ACM/SIG Member <br> Workshop w/Registration
							</td>
							<td>$195</td>
							<td>$195</td>
							<td>$195</td>
						</tr>

						<tr>
							<td>Student <br> Workshop Registration
							</td>
							<td>$175</td>
							<td>$175</td>
							<td>$175</td>
						</tr>

						<tr>
							<td>Workshop Only, <br> No Conference
							</td>
							<td colspan="3">($100 will be added to above fee schedule)</td>
						</tr>
					</tbody>
				</table>

			</div>
			<p>Remote attendance via Telepresence Robots is a new option available to a limited number of CSCW attendees this year. The application deadline for this option is December 18th. <a href="telepresence.php">Learn more here.</a></p>
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>