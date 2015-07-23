<?php
$pageTitle = "CSCW $year Sponsors";
$section = 'sponsors';
$basePath = '..';
include_once ('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Sponsorship</h2>
				<ul class="subnav" id="nav_sponsor">
					<li><a href="index.php" class="active">Overview</a></li>
					<li><a href="become-a-sponsor.php">Sponsor Benefits</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main">
			<h1>Sponsors</h1>

			<p>Sponsorships are very important to the financial health of CSCW
				conferences, and the assistance provided by our sponsors is greatly
				appreciated. The expense of holding the CSCW conference is paid from
				two sources of income: registration fees paid by the attendees and
				sponsorships from corporations, universities, and other
				institutions. Sponsors’ funds allow CSCW conferences to hold down
				the cost of registration, especially for students.</p>

			<p>CSCW 2016 will provide benefits to sponsors in exchange for their
				financial support. The principal benefit is public acknowledgment of
				sponsors in the opening and closing plenary sessions, on the
				conference website, in the proceedings and final program, and on
				tote bags. The conference will also acknowledge our more generous
				sponsors for their contribution at social events including
				receptions, the conference banquet/party, coffee breaks, and student
				social events. Sponsor contribution to these events is noted in the
				conference program and on signs at the events. The conference will
				also support and coordinate with any sponsors that want to host
				their own social event for all conference participants.</p>

			<p>Sponsors are given the opportunity to provide information (e.g.,
				brochures) directly to CSCW attendees. Higher level sponsors are
				invited to present demonstrations of their relevant technology at
				the conference. CSCW 2016 will also accommodate sponsors interested
				in recruiting conference attendees. Sponsors may also receive
				complimentary CSCW 2016 registrations.</p>

			<p>Sponsors contribute to the CSCW conference community in myriad
				ways, including funding. We recognize the valuable contributions of
				our sponsors, and some CSCW participants in one year become
				researchers at our sponsors the next. We are ready to discuss how
				you would like to contribute or benefit from the conference.</p>

			<p>CSCW 2016 offers four levels of sponsorship: Friend, Contributor,
				Benefactor, and Champion.</p>

			<ul>
				<li><a href="become-a-sponsor.php#friends">Friends (contribution of
						less than $5,000)</a></li>
				<li><a href="become-a-sponsor.php#contributors">Contributors ($5,000
						or greater contribution)</a></li>
				<li><a href="become-a-sponsor.php#benefactors">Benefactors ($10,000
						or greater contribution)</a></li>
				<li><a href="become-a-sponsor.php#champions">Champions ($15,000 or
						greater contribution)</a></li>
			</ul>

			<p>
				See our <a href="become-a-sponsor.php">standard benefits</a> for
				each sponsorship level, but please keep in mind that benefits can be
				tailored to meet the needs of sponsors. Please contact the
				Sponsorship co-chairs at <a
					href="mailto:cscw<?php echo $year; ?>sponsorship@acm.org">cscw<?php echo $year; ?>sponsorship@acm.org</a>
				about becoming a sponsor for CSCW 2016.
			</p>

			<h2>Sponsorship Co-Chairs</h2>

			<p>
				Wendy Ju, Stanford University<br /> 
				Steve Poltrock, retired<br /> 
				<a href="mailto:cscw<?php echo $year; ?>sponsorship@acm.org">cscw<?php echo $year; ?>sponsorship@acm.org</a>
			</p>
		
			<h1>CSCW 2016 Sponsors</h1>
			<div class="sponsors-list">
				<a href="http://www.acm.org/" target="_blank"><img src="<?php echo $basePath; ?>/images/acm_logo_home.png" alt="ACM"></a>
				<a href="http://www.sigchi.org/" target="_blank"><img src="<?php echo $basePath; ?>/images/sigchi_logo_home.png" alt="SIGCHI"></a>
			</div>
			
			<h2>Contributor Sponsors</h2>
			<div class="sponsors-list">
				<a href="http://www.research.ibm.com/" target="_blank"><img src="<?php echo $basePath; ?>/images/IBM-Research-Logo.png" alt="IBM Research"></a>
			</div>
			
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>