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
						<strong>April 11, 2016:</strong> The proceedings of the conference are also now available here: <a href="program/toc.html">Papers</a> and <a href="program/toc_companion.html">Demos, Doctoral Symposium, Posters, and Workshops</a>. 
					</p>
					<p>
						<strong>February 26, 2016:</strong> The full proceedings of the conference are available open access for the next 30 days via the ACM DL: <a href="http://dl.acm.org/citation.cfm?id=2818048">papers</a> and <a href="http://dl.acm.org/citation.cfm?id=2818052">extended abstracts</a>. 
					</p>
					<p>
						<strong>February 24, 2016:</strong> The registration desk will be open Friday, Feb 26 at 5:15 pm and remain open until 6:30 pm. 
					</p>
					<p>
						<strong>January 28, 2016:</strong>The conference hotel reduced rate rooms are now sold out.
						See the list of <a href="attend/hotel.php#overflow">overflow hotels</a> for alternatives. 
					</p>
					<p>
						<strong>January 8, 2016:</strong><a href="attend/reg.php">Early bird registration</a> deadline extended to <em>January 15, 2016.</em> 
					</p>
					<p>
						<strong>December 3, 2015:</strong> <a href="program/lastingimpact.php">Lasting Impact Award announced!</a>
					</p>
					<p>
						<strong>December 2, 2015:</strong> The Telepresence Application deadline has been extended to 
						<em>Dec 18</em>. See <a href="attend/telepresence.php#participation">here</a> to apply.
					</p>
					<p>
						<strong>November 11, 2015:</strong> You can now submit position papers to the 16 workshops at CSCW: <a href="program/workshops.php">Accepted workshops</a>
					</p>
					<p>
						<strong>November 10, 2015:</strong> <a href="https://www.regonline.com/cscw16">Conference registration</a> is now open!
					</p>
					<p>
						<strong>November 5, 2015:</strong> The <a href="program/detailedprogram.php">full schedule of papers</a> is now available.
					</p>
					<p>
						<strong>October 17, 2015:</strong> Reminder: 
						<a href="submit/demos.php">Demos</a>, <a href="submit/panels.php">Panels</a>, 
						<a href="submit/posters.php">Posters</a>, and <a href="submit/dc.php">Doctoral Colloquium</a>
						submissions are all due <em>November 6th, 2015</em>.
					</p>
					<p>
						<strong>October 17, 2015:</strong> We are pleased to
						announce our closing keynote speaker will be
						<a href="program/keynotes.php#closing">Mike Krieger</a> from Instagram!
					</p>
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
		<article class="ten columns" role="main" id="content">
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
				<h2>Champions</h2>
				<div class="sponsors-list">
					<a href="http://intel.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/intel.png" alt="Intel"></a>
					<a href="https://research.facebook.com/" target="_blank"><img class="sponsor-facebook" src="<?php echo $basePath; ?>/images/facebook_logo.png" alt="Facebook"></a>
				</div>
				<h2>Benefactors</h2>
				<div class="sponsors-list">
					<a href="http://research.microsoft.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/microsoft-research.gif" alt="Microsoft Research"></a>
				</div>
				<h2>Contributors</h2>
				<div class="sponsors-list">
					<a href="http://www.fxpal.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/fxpal_logo.png" alt="FXPAL"></a>
					<a href="http://www.research.ibm.com/" target="_blank"><img class="sponsor-ibm" src="<?php echo $basePath; ?>/images/IBM-Research-Logo.png" alt="IBM Research"></a>
					<a href="http://www.research.google.com/" target="_blank"><img class="sponsor-google" src="<?php echo $basePath; ?>/images/google_logo_home.png" alt="Google"></a>
				</div>
				<h2>Friends</h2>
				<div class="sponsors-list">
					<a href="http://www.diku.dk/english" target="_blank"><img src="<?php echo $basePath; ?>/images/ucopenhagen-cs.png" alt="University of Copenhagen, Computer Science Department (DIKU)" style="max-height:250px"></a>
					<a href="http://www.sap.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/sap.png" alt="SAP"></a>
					<a href="http://en.itu.dk/" target="_blank"><img src="<?php echo $basePath; ?>/images/itu-copenhagen.png" alt="IT University of Copenhagen"></a>
					<a href="http://www.kitchencabinetkings.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/kitchen_cabinet_kings_logo.png" alt="Kitchen Cabinet Kings"></a>
				</div>
			</div>
			
		</article>

	</div>
</div>
<?php
include_once ('_inc/footer.php');
?>