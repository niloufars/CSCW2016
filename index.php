<?php
$pageTitle = '';
$section = 'home';
$basePath = '.';
include_once ('_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Updates</h2>
				<div class="inner" id="updates">
					<p>
						<strong>October 17, 2015:</strong> Announcing the <a href="attend/telepresence.php">CSCW 2016 telepresence initiative.</a> 
						The deadline to apply is <em>December 1st, 2015</em>.
						
					</p>
	
					<p>
						<strong>October 1, 2015:</strong> We are pleased to
						announce our opening keynote speaker will be
						<a href="program/keynotes.php#opening">Simon Rogers</a> from Google!
					</p>
					<p>
						<strong>August 18, 2015:</strong> Hotel registration is now
						available <a href="https://resweb.passkey.com/go/ACMCSCW">here</a>, and
						the <a href="http://cscw.acm.org/2016/program/">preliminary program</a> is up.
					</p>
					<p>
						<strong>August 3, 2015:</strong> Enrollment for CSCW 2016 student
						volunteers is now open! Go <a href="http://www.chisv.org/cscw2016">here</a> to
						submit your application. The deadline for registering is <em>October
						9, 2015</em>. More information about student volunteering
						<a href="http://cscw.acm.org/2016/volunteer/sv.php">here</a>.
					</p>
					<p>
						<strong>June 4, 2015:</strong> ACM members should <a href="http://plone4.sigchi.org/communities/cscw">register
						for the CSCW Community</a> (it’s free and allows you
						to vote for community leaders and get key announcements). Also,
						the <a href="https://stanforduniversity.qualtrics.com/jfe/form/SV_bDv685h34oscLMp">CSCW
						Community Survey</a> is available through June 12.
					</p>
					<p>
						<strong>April 8, 2015:</strong> PCS is open for submissions! <a
							href="submit/index.php">Papers may be submitted</a> between now
						and May 22, 2015 (11:59 pm PDT).
					</p>
					<p>
						<strong>Feb 16, 2015:</strong> CSCW 2016 Website launched!
					</p>
				</div>
			</div>

			<div class="item">
				<h2>Connect</h2>
				<div class="inner" id="connect">

					<a class="twitter-timeline"
						href="https://twitter.com/hashtag/cscw2016"
						data-widget-id="542591485024022529">#cscw2016 Tweets</a>
					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

					<div class="fb-like-box"
						data-href="http://www.facebook.com/acmCSCW"
						data-colorscheme="light" data-show-faces="false"
						data-header="true" data-stream="true" data-show-border="false"></div>

					<div id="fb-root"></div>
					<script>(function(d, s, id) {
							var js, fjs = d.getElementsByTagName(s)[0];
							if (d.getElementById(id)) return;
							js = d.createElement(s); js.id = id;
							js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=221539358035056&version=v2.0";
							fjs.parentNode.insertBefore(js, fjs);
						}(document, 'script', 'facebook-jssdk'));</script>
				</div>
			</div>

		</aside>
		<article class="ten columns" role="main">
			<h1>Welcome to CSCW <?php echo $year; ?>!</h1>
			<p>The <?php echo $nth; ?> ACM Conference on Computer-Supported Cooperative Work and Social Computing (CSCW <?php echo $year; ?>) will be held <?php echo $datesYear; ?> in <a
					href="<?php echo $cityUrl; ?>" target="_blank"><?php echo $cityCountry; ?>.</a>
			</p>
			<p>CSCW is the premier venue for presenting research in the design
				and use of technologies that affect groups, organizations,
				communities, and networks. Bringing together top researchers and
				practitioners from academia and industry who are interested in the
				area of social computing, CSCW encompasses both the technical and
				social challenges encountered when supporting collaboration. The
				development and application of new technologies continues to enable
				new ways of working together and coordinating activities. Although
				work is an important area of focus for the conference, CSCW also
				embraces research and technologies supporting a wide variety of
				recreational and social activities using a diverse range of devices.</p>
			<p>CSCW <?php echo $year; ?> will offer multiple venues for contribution, including Papers, Workshops, Panels, Interactive Posters, Demonstrations, and a Doctoral Colloquium. Please see the <a
					href="submit/index.php">Call for Participation</a> for deadlines
				and additional information.
			</p>
			<p>
				We invite you to begin planning not only your <a
					href="submit/index.php">submissions</a>, but also your <a
					href="attend/index.php">attendance</a> and <a
					href="volunteer/index.php">involvement</a> at the <?php echo $year; ?> conference and to <a
					href="http://www.sigchi.org/communities/cscw" target="_blank">join</a>
				the CSCW Community!
			</p>
			<h2>Conference Co-chairs</h2>
			<p>
				Darren Gergle, Northwestern University<br />
				Meredith Ringel Morris, Microsoft Research<br />
				<a href="mailto:cscw<?php echo $year; ?>chairs@acm.org">cscw<?php echo $year; ?>chairs@acm.org</a>
			</p>
			<h2>Conference Sponsors</h2>
			<p>
				If you work for a company or other institution with a strong
				interest in CSCW, please consider encouraging your employer to 
				<a href="sponsors/">become a sponsor</a>. The
				conference will gratefully acknowledge your employer’s contribution,
				and it will help prevent increases in registration fees.
			</p>
			
			<div class="sponsors-aside">
				<h1>2016 Sponsors</h1>
				<div class="sponsors-list">
					<a href="http://www.acm.org/" target="_blank"><img src="<?php echo $basePath; ?>/images/acm_logo_home.png" alt="ACM"></a>
					<a href="http://www.sigchi.org/" target="_blank"><img src="<?php echo $basePath; ?>/images/sigchi_logo_home.png" alt="SIGCHI"></a>
				</div>
				<h2>Benefactors</h2>
				<div class="sponsors-list">
					<a href="http://research.microsoft.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/microsoft-research.gif" alt="Microsoft Research"></a>
				</div>
				<h2>Contributors</h2>
				<div class="sponsors-list">
					<a href="http://www.research.ibm.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/IBM-Research-Logo.png" alt="IBM Research"></a>
				</div>
			</div>
			
		</article>

	</div>
</div>
<?php
include_once ('_inc/footer.php');
?>