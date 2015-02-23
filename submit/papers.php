<?php
$pageTitle = "CSCW $year | Submitting | Papers";
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
					<li><a href="papers.php" class="active">Papers</a></li>
					<li><a href="workshops.php">Workshops</a></li>
					<li><a href="posters.php">Interactive Posters</a></li>
					<li><a href="panels.php">Panels</a></li>
					<li><a href="dc.php">Doctoral Colloquium</a></li>
					<li><a href="demos.php">Demonstrations</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main">
			<H1>Papers</H1>
			<h3>Important Dates</h3>

			<ul>
				<li><strong>Friday May 22, 2015</strong>: Submissions DUE, 16:59 PDT
					(23:59 UTC)</li>
				<li><strong>Friday July 3, 2015</strong>: Review Round 1 Results
					Announced</li>
				<li><strong>Wednesday July 29, 2015</strong>: Revised Submissions
					DUE, 16:59 PDT (23:59 UTC)</li>
				<li><strong>Monday August 24, 2015</strong>: Final Paper
					Announcements</li>
				<li><strong>Tuesday October 13th, 2015</strong>: Camera Ready Copy
					DUE, 16:59 PDT (23:59 UTC)</li>
			</ul>

			<h2>Call for Papers</h2>
			<p>The <?php echo $year; ?> ACM Conference on Computer-Supported Cooperative Work and
				Social Computing will be held in <?php echo $cityCountry; ?> from <?php echo $datesYear; ?>. CSCW is an international and interdisciplinary peerreviewed
				conference seeking the best research on all topics relevant to
				collaborative and social computing.</p>

			<p>We invite authors to submit papers that inform the design or
				deployment of collaborative or social systems; introduce novel
				systems, interaction techniques, or algorithms; or study existing
				collaborative or social practices. The scope of CSCW includes social
				computing and social media, crowdsourcing, open collaboration,
				technologically-enabled or enhanced communication, CSCL, MOOCs, and
				related educational technologies, multi-user input technologies,
				collaboration, awareness, information sharing, and coordination.
				This scope spans socio-technical domains of work, home, education,
				healthcare, the arts, socializing, and entertainment. The technical
				program seeks novel research results or new ways of thinking about,
				studying, or supporting shared activities. We welcome contributions
				across a variety of research techniques, approaches, and domains,
				including:</p>


			<ul>
				<li><strong>Social and crowd computing.</strong> Studies, theories,
					designs, mechanisms, systems, and/or infrastructures addressing
					social media, social networking, wikis, blogs, online gaming,
					crowdsourcing, collective intelligence, virtual worlds or
					collaborative information seeking.</li>
				<li><strong>System design.</strong> Hardware, architectures,
					infrastructures, interaction design, technical foundations,
					algorithms, and/or toolkits that enable the building of new social
					and collaborative systems and experiences.</li>
				<li><strong>Theories and models.</strong> Critical analysis or
					organizing theory (e.g. sociological theories, group coordination,
					etc.) with clear relevance to the design or study of social and
					collaborative systems.</li>
				<li><strong>Empirical investigations.</strong> Findings, guidelines,
					and/or studies relating to technologies, practices, or use of
					communication, collaboration, and social technologies.</li>
				<li><strong>Social and collaborative practices.</strong>
					Characterizing the nature of collaboration and social interaction
					through studies of practice, including both work practice and
					non-work collaborative and social practices.</li>
				<li><strong>Mining and Modeling.</strong> Studies, analyses,
					algorithms, and infrastructures for making use of large and small
					scale data.</li>
				<li><strong>Methodologies and tools.</strong> Novel methods or
					combinations of approaches and tools used in building systems or
					studying their use.</li>
				<li><strong>CSCW and social computing for underserved populations.</strong>
					Studies, systems, design, and other research focused on social and
					collaborative computing for the elderly, disabled, impoverished, or
					otherwise underserved user communities.</li>
				<li><strong>Domain-specific social and collaborative applications.</strong>
					Including applications to healthcare, transportation, gaming,
					ICT4D, sustainability, education, accessibility, global
					collaboration, or other domains.</li>
				<li><strong>Collaboration systems based on emerging technologies.</strong>
					Mobile and ubiquitous computing, game engines, virtual worlds,
					multi-touch technologies, novel display technologies, vision and
					gesture recognition, big data, MOOCs, crowd labor markets, SNSes,
					or sensing systems.</li>
				<li><strong>Crossing boundaries.</strong> Studies, prototypes, or
					other investigations that explore interactions across disciplines,
					distance, languages, generations, and cultures, to help better
					understand how to transcend social, temporal, and/or spatial
					boundaries.</li>
			</ul>
			</p>
			<h2>Papers Co-Chairs</h2>
			<p>
				Joe Konstan, University of Minnesota <br /> Pernille Bjørn, IT
				University in Copenhagen <br /> <a
					href="mailto:cscw<?php echo $year; ?>papers@acm.org">cscw<?php echo $year; ?>papers@acm.org</a>
			</p>


			<h1>Format and Submission Process Details</h1>

			<h2>Submission Process</h2>

			<p>
				Papers must be submitted via the <a
					href="https://precisionconference.com/~sigchi/" target="_blank">Precision
					Conference System (PCS)</a> by 16:59 Pacific Daylight Time (PDT) /
				23:59 UTC on May 22nd 2015. The site will open for submissions
				beginning Monday April 20th. Papers in the "Revise &amp; Resubmit"
				category must be re-submitted via the PCS system by 16:59 PDT on
				July 29th 2015
			</p>

			<p>
				Authors submitting papers for peer-review to ACM publications make
				the following representations (see <a
					href="http://www.acm.org/publications/policies/author_representations"
					target="_blank">http://www.acm.org/publications/policies/author_representations</a>
				for full policy statement):
			</p>
			<ul>
				<li>That the paper submitted is original, that the listed authors
					are the creators of the work, that each author is aware of the
					submission and that they are listed as an author, and that the
					paper is an honest representation of the underlying work.</li>
				<li>That the work submitted is not currently under review at any
					other publication venue, and that it will not be submitted to
					another venue unless it has been rejected or withdrawn from this
					venue.</li>
				<li>That they have the rights and intent to publish the work in the
					venue to which it is submitted, if the work is accepted. For
					conference papers, this includes the expected ability and intent to
					have an author of the paper register for and attend the conference
					to present the paper, if required.</li>
				<li>That any prior publications on which this work is based are
					documented appropriately in the paper and/or in a cover letter
					available to reviewers. This documentation includes providing an
					explanation of the incremental contribution of submitted CSCW paper
					that extends prior results published elsewhere. (In cases of
					doubleblind review, this information should be supplied to the
					editor or program chair only.)</li>
			</ul>
			<p>In cases where an author feels a particular representation cannot
				be made, but that submission is appropriate, the author should
				contact the editor or program chair prior to submission to discuss
				the situation and determine whether submission will be permitted.</p>
			<p>All submissions must be new work that has not been published in a
				peer reviewed conference or journal. Work previously published in
				workshops that do not have published proceedings may be submitted
				(as-is or extended) to CSCW. Work previously published in workshops
				that do have published proceedings may only be submitted if the work
				is substantially extended from the workshop paper. In any case where
				part of a submitted paper has been previously published, the authors
				should contact the Papers Chairs to inform them of the prior
				publication, including its citation and a brief description of the
				changes incorporated into the CSCW-submitted version.</p>
			<p>
				Regarding the re-publication in English of work previously published
				in another language, please refer to the statement by ACM SIGCHI
				regarding specialized conferences: <a
					href="http://www.sigchi.org/conferences/organizing-a-sigchi-sponsored-conference"
					target="_blank">http://www.sigchi.org/conferences/organizing-a-sigchi-sponsored-conference</a>
			</p>

			<p>Confidentiality of submitted material will be maintained. Upon
				acceptance, the titles, authorship, and abstracts of papers will be
				used in the Advance Program. Submissions should contain no
				information or material that will be proprietary or confidential at
				the time of publication, and should cite no publication that will be
				proprietary or confidential at that time. Final versions of accepted
				papers must be formatted according to detailed instructions provided
				by the publisher. Copyright release forms must be signed for
				inclusion in the proceedings and the ACM Digital Library.</p>

			<h2>Formatting and Length</h2>

			<p>
				Please use the SIGCHI papers template to format your submission
				(there is a <a href="https://github.com/sigchi/Document-Formats/blob/master/Builds/sigchi-latex-proceedings.tar.gz?raw=true" target="_blank">Word
					version</a> and a <a href="https://github.com/sigchi/Document-Formats/blob/master/Builds/sigchi-word-proceedings.zip?raw=true"
					target="_blank">Latex version</a>). Papers should be converted to
				PDF before submission.
			</p>

			<p>There is no minimum or maximum length imposed on papers. Rather,
				reviewers will be instructed to weigh the contribution of a paper
				relative to its length. Papers should report research thoroughly but
				succinctly: brevity is a virtue. A typical length is 10 pages
				(formerly the maximum length limit), but may be shorter if the
				contribution can be described and supported in fewer pages--shorter,
				more focused papers (called Notes in prior years) are encouraged and
				will be reviewed like any other paper. While we will review papers
				longer than 10 pages, the contribution must warrant the extra
				length. Papers whose length is incommensurate with their
				contribution will be rejected.</p>

			<h2>Blind Review Policy</h2>

			<p>Papers are subject to blind reviewing. Your submission should have
				authors' names and affiliations removed, and avoid obvious
				identifying statements. Citations to your own relevant work should
				not be anonymous, but rather should be done without identifying
				yourself as the author. For example, say "Prior work by [authors]"
				instead of "In our prior work."</p>

			<h2>Video Figures</h2>

			<p>Consider submitting a video that illustrates your work, either as
				a video figure judged as part of your submission (no more than three
				minutes long and 50MB in size), or as a longer stand-alone
				submission to the video track. Videos are not required for paper
				submissions, but are strongly encouraged, particularly for papers
				contributing novel systems or interaction techniques.</p>

			<h1>Review process</h1>

			<h2>Revision Cycle</h2>

			<p>Papers will undergo two review cycles. After the first round of review, a 
				submission will receive either a "Revise &amp; Resubmit" or a "Reject" 
				notification (along with the reviews themselves). Submissions rejected 
				in the first round cannot be revised for CSCW <?php echo $year; ?>, but 
				authors can begin reworking them for submission to other venues. Authors 
				of papers designated "Revise &amp; Resubmit" will have two weeks to 
				revise their paper in response to the reviewers' comments. Authors will 
				need to allocate time for possible revisions during the period between  
				July 3rd and July 29, 2015. Revised papers must be re-submitted via the 
				PCS system by 16:59 PDT on July 29, 2015. <strong>Note
					that an invitation to "Revise &amp; Resubmit" is not a guarantee of
					acceptance--the revision will be re-reviewed as the basis for the
					final decision.</strong> This is similar to a journal process,
				except that it is limited to a single revision with a strict
				deadline.
			</p>

			<p>The revision cycle enables authors to address issues raised by
				reviewers that may have been a cause for rejection under prior
				conference reviewing schemes, such as the need to improve
				readability/grammar, discuss missing citations, redo some analyses,
				adopt terminology familiar to the field, and/or reframe ideas more
				clearly. It also allows authors of papers that may have been
				accepted under a single-cycle approach to further strengthen their
				papers, perhaps better positioning themselves for consideration for
				a "Best of CSCW" recognition. Along with their revised paper,
				authors submit a letter explaining the key changes they have made,
				allowing more interaction between authors and reviewers.</p>

			<p>
				With the resubmission of R&amp;R papers, authors are asked to
				provide a letter explaining how they approached the comments by the
				reviewers and incorporated the changes in the revision. See <a
					href="http://research.microsoft.com/en-us/um/people/merrie/temp/change_log_samples.html"
					target="_blank"> examples of "change summary" documents</a>
				submitted with papers in past CSCWs.
			</p>
			<p>
				This is not an invitation to submit extended abstracts or incomplete
				papers; please submit only work of publishable quality. <strong>Incomplete
					or otherwise inappropriate submissions will be desk-rejected
					without review.</strong> Based on prior years’ experience with this
				process, we anticipate that roughly half of submissions will be
				rejected after the first round of this process. Note that the
				dual-round review process is not inherently tied to any target
				acceptance rates.
			</p>


			<h2>Review Criteria</h2>
			<p>Authors will be able to indicate the primary methodological
				orientation of their paper, when they upload the paper to the PCS
				reviewing system:</p>
			<ul>
				<li>Technical, e.g. building novel systems, algorithms, implementing
					novel features in existing systems, etc.</li>
				<li>Empirical-Qualitative, e.g. ethnography, workplace studies,
					qualitative user studies, etc.</li>
				<li>Empirical-Quantitative, e.g. "big data," quantitative user
					studies, statistical methods, etc.</li>
				<li>Design, e.g. design implications, guidelines, methods,
					techniques, etc.</li>
				<li>Mixed Methods, e.g., combined qualitative and quantitative
					empirical research, design explorations combined with technical
					feature development.</li>
				<li>Theoretical, e.g. conceptual frameworks, theory underpinning
					CSCW studies/domains, theoretical analysis.</li>
			</ul>
			<p>This information will be used to match the paper with a program
				committee member who is experienced with work of that character.
				CSCW values work from a variety of interdisciplinary and
				methodological perspectives - specific evaluation types are not a
				prerequisite for acceptance (Greenberg &amp; Buxton, 2008).</p>

			<p>Greenberg, S., and Buxton, B. "Usability evaluation considered
				harmful (Some of the time)" in: CHI, ACM, Florence, Italy, 2008, pp.
				111-120.</p>

			<h2>"Best of CSCW" Awards</h2>

			<p>CSCW will continue the "Best of CSCW" awards program, in
				accordance with SIGCHI guidelines. Upon acceptance, papers that have
				been nominated as noteworthy by reviewers or Program Committee
				members will receive additional review by the Best Papers Committee,
				who will identify "Honorable Mention" and "Best" awards.
				Approximately 5% of submissions may be nominated and 1% of total
				submissions awarded Best Paper.</p>

			<h2 id="lastingimpact">
				"CSCW Lasting Impact" Award
			</h2>

			<p>The CSCW Lasting Impact award will recognize a paper published at
				the CSCW conference at least 10 years ago (CSCW 2005 or earlier)
				that has been extremely influential since its publication. The
				Lasting Impact Award winner will be determined by a committee
				consisting of past CSCW Papers Chairs, and chaired by this year's
				Papers Chairs. If you would like to nominate a paper for
				consideration, please email the papers chairs by Monday October 19,
				2015, including the paper's title, author list, and year of
				publication, as well as a brief paragraph explaining why the paper
				deserves recognition for "lasting impact".</p>

			<h2>Accepted Papers</h2>

			<p>Authors will be expected to prepare a camera-ready version of
				their paper in accordance with ACM’s Digital Library formatting
				guidelines. Authors may be asked to identify funding sources (to
				assist in compliance with government access mandates). Further
				information will be provided at the time of acceptance.</p>

			<p>
				The CSCW Proceedings is a peer-reviewed archival publication. <strong>AUTHORS
					TAKE NOTE: The official publication date is the date the
					proceedings are made available in the ACM Digital Library. This
					date is two weeks prior to the first day of the conference
					(February 13, 2016).</strong> The official publication date affects
				the deadline for any patent filings related to published work.
			</p>
			<p>At least one author of each accepted paper must register for,
				attend, and present the paper at the CSCW 2016 conference. Failure
				to meet this requirement may result in withdrawal of the work from
				the proceedings published in the ACM Digital Library.</p>
			<p>
				Authors of accepted papers will have to choose whether to pay for
				open-access publication (this decision is made after acceptance and
				will not affect the review decision). Authors also will have to
				choose among three options for rights management: copyright transfer
				(or government copyright), a limited exclusive right to publish, or
				author-retained rights (only for author-paid open access articles).
				All authors of ACM-published articles retain substantial rights, see
				<a href="http://authors.acm.org" target="_blank">http://authors.acm.org</a>
				for more details.
			</p>
			<h2>Program Committee Members</h2>
			<p>Coming soon.</p>
		</article>

	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>