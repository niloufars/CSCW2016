<?php
$pageTitle = "CSCW $year | Submitting | Posters";
$section = 'submit';
$basePath = '..';
include_once ('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Submitting</h2>
				<ul class="subnav" id="nav_submit">
					<li><a href="index.php">Overview</a></li>
					<li><a href="papers.php">Papers</a></li>
					<li><a href="workshops.php">Workshops</a></li>
					<li><a href="posters.php" class="active">Interactive Posters</a></li>
					<li><a href="panels.php">Panels</a></li>
					<li><a href="dc.php">Doctoral Colloquium</a></li>
					<li><a href="demos.php">Demonstrations</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main">
			<h1>Interactive Posters</h1>

			<h2>Important Dates</h2>

			<ul>
				<li><strong>November 6, 5:00pm PDT, 2015:</strong> Submission due</li>
				<li><strong>December 15:</strong> Final notifications</li>
				<li><strong>Evening of February 29, 2016:</strong> Posters reception
					at CSCW</li>
			</ul>

			<p>CSCW <?php echo $year; ?> will include an interactive poster category for
				late-breaking and preliminary results, smaller results not suitable
				for a full or short paper, contributions by collaborative
				(inter-)national research projects, innovative ideas not yet
				validated through user studies, early student research, and other
				research best presented in an interactive forum.</p>

			<p>Posters will be presented in a special Poster Session on Monday
				evening, February 29th where researchers will interact directly with
				conference attendees. The posters will then remain up throughout the
				remainder of the conference.</p>

			<p>Accepted Interactive Poster abstracts will be published in ACM
				Digital Library and distributed to conference attendees as part of
				the Conference Extended Abstracts.</p>

			<h2>Interactive Poster Submission Requirements</h2>
			<p>
				Interactive Poster submissions should include an extended abstract
				no longer than 4 pages, including all figures and references, in the
				<a href="http://www.sigchi.org/publications/chipubform">SIGCHI
					Extended Abstract Format</a>. This extended abstract will be
				published in the ACM Digital Library as part of the Conference
				Extended Abstracts. In addition, submissions should also include a
				separate Tabloid sized draft of the poster for review purposes. A
				Tabloid is an 11 × 17 inches format. Please submit the 4-page paper
				in PDF format and name this file ContactAuthorsLastName.pdf. Please
				submit the poster draft in PDF format and name this file
				ContactAuthorsLastName_poster.pdf. Both the extended abstract and
				the poster draft should include author names (not anonymous
				submission).
			</p>

			<p>
				Interactive poster abstract submissions (extended abstract and
				poster draft) must be uploaded online at the PCS submission system
				by 5:00pm (17:00) PDT on November 6, 2015 to be considered. All
				attachments must be less than 5MB. Any questions regarding this
				process or from complications due to large files can be directed to
				<a href="mailto:cscw<?php echo $year; ?>posters@acm.org">cscw<?php echo $year; ?>posters@acm.org</a>.
			</p>

			<p>
				All questions should be directed to <a
					href="mailto:cscw<?php echo $year; ?>posters@acm.org">cscw<?php echo $year; ?>posters@acm.org</a>.
			</p>

			<h2>Interactive Poster Abstract Authoring Tips</h2>
			<p>The following tips may help you prepare a successful Poster
				abstract:</p>
			<ul>
				<li>State the contribution and originality of your work clearly and
					explicitly: What is the problem? How does your approach help? Why
					is it better than other available approaches?</li>
				<li>Interactive posters abstracts may be chosen based on either the
					significance of the problem or the originality of your approach.</li>
				<li>Focus on the contribution of your work rather than the
					background, including just enough background to make clear how your
					work differs from significant prior research.</li>
				<li>Include the major graphical elements that will likely be used in
					the poster itself.</li>
			</ul>
			<h2>Printing and Displaying Your Poster</h2>
			<p>The space allocated for each poster is 48 inches by 48 inches.
				Posters are recommended to be no longer or wider than 45 inches in
				either dimension; however, up to 47 inches is allowable. Smaller
				posters are acceptable. For example, either A0 (vertical format) or
				A1 is an acceptable size for the poster.</p>
			<p>Posters should be affixed to the poster boards with push pins, not
				tape. The conference will provide push pins. Each board will have a
				label indicating where your poster should be placed; please allow
				time to find your board and set up your poster.</p>

			<h2>Interactive Posters Co-Chairs</h2>
			<p>
				Matt Bietz, UC Irvine<br /> 
				Vanessa Evers, University of Twente<br />
				<a href="mailto:cscw<?php echo $year; ?>posters@acm.org">cscw<?php echo $year; ?>posters@acm.org</a>
			</p>
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>