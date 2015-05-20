 <?php 
 $pageTitle = "CSCW $year | Submitting | Demos";
 $section = 'submit';
 $basePath = '..';
 include_once('../_inc/header.php');
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
 					<li><a href="posters.php">Interactive Posters</a></li>
 					<li><a href="panels.php">Panels</a></li>
 					<li><a href="dc.php">Doctoral Colloquium</a></li>
 					<li><a href="demos.php" class="active">Demonstrations</a></li>
 				</ul>
 			</div>
 		</aside>
 		<article class="ten columns" role="main">
 			<h1>Demos</h1>
 			<h2>Important Dates</h2>
 			<ul>
 				<li><strong>Friday, November 6, 2015, 11:59pm&nbsp;PDT</strong>: Submissions due</li>
 				<li><strong>Tuesday, December 15, 2015</strong>: Notification of acceptance</li>
 			</ul>

 			<h2>About Demonstrations</h2>
 			<p>CSCW <?php echo $year; ?> demonstrations present implementations of new CSCW systems and concepts. The curated demonstrations allow conference participants to view novel and noteworthy CSCW systems in action, discuss the systems with those who created them, and try them out. Appropriate demonstrations include applications, technologies, and research prototypes, and may showcase work that has been or is being published at CSCW or elsewhere. Demonstrations can also serve to showcase novel commercial products not previously described in the research literature. However, the demo forum is not an opportunity for marketing or sales presentations. Compelling demonstrations can include (but are not limited to) the following areas:
 			</p>
 			<ul>
	 			<li>Multi-user interactions with large displays 
	 			</li>
	 			<li>Hardware and tangible devices that have the potential for novel cooperative interactions 
	 			</li>
	 			<li>Augmented or immersive environments
	 			</li>
	 			<li>Novel social networking systems 
	 			</li>
	 			<li>Design interventions in MOOCs or other large learning environments 
	 			</li>
	 			<li>Crowdsourcing, communitysourcing, or crowdfunding demonstrations 
	 			</li>
 			</ul>
 			<p>Demonstrations should be interactive and provide attendees a hands-on experience. Presenters must have been directly involved with the development of the system and be able to explain the unique and novel contributions of the system.
 			</p>
 			<p>CSCW demos are non-archival. We encourage the submission of demos that were previously shown at other venues but that will be novel to the CSCW audience, as such demos can serve to build bridges between research communities. Authors should state previous demo venues in their submission and point out differences to previous demos.
 			</p>

 			<h2>Submission Categories</h2>
 			<p>At CSCW <?php echo $year; ?> the primary type of demo is the <strong>Reception Demo </strong>. Reception Demos will be showcased during a special demo reception on <strong>Monday evening, February 29th</strong>. These demonstrations will be spaced around a large room, and will run concurrently during the block of time set aside for demonstrations. Attendees will be free to explore the room and visit demos of interest. This promotes informal interaction and in-depth information exchange among demo presenters and attendees. A demo presentation should be brief so that it can be shown repeatedly to many attendees..
 			</p>
 			<p>Demonstrators may also propose an <strong>Integrated Demo</strong>. Integrated Demos will run throughout the main conference program <strong>(Feb. 29th – March 2nd)</strong>, and should enhance the conference experience for attendees. Integrated demos will also receive space at the demo reception where authors can better explain the nature of the demo and associated research in a focused format.
 			</p>
 			<p>The demo chairs may request additional information or start a dialogue with proposers of integrated demos during the review period to assess feasibility as an integrated demo, as such systems need to be more robust and work without the author’s presence. We will work with authors to determine which format - whether integrated or reception - is most suitable for the proposed demonstration
 			</p>
 			<p>
 			Examples of integrated demos might be systems that enable social networking, or that enable collaborative reflection on conference presentations. Although preparing, deploying, and supporting an integrated demo will require a larger commitment of time and effort, it will also provide the presenter with a unique opportunity to gather data about the use of their CSCW system in a structured environment with a diverse user population. If you intend to gather data about the use of your integrated demo, you are responsible for obtaining the approval of any Institutional Review Board (IRB) and/or Human Subjects panels at your home institution, and will need to provide any required permission/disclosure forms for attendees to sign. Regardless of whether or not your institution has an IRB, you must be sure your data collection adheres to the ACM Code of Ethics.
 			</p>
 			<p>All demonstrations will be advertised and showcased in the conference pack and throughout the conference. In addition, a panel of judges will select one demonstration to receive a <strong>Best Demo Award</strong> during the reception.
 			</p>
 			<h2>Submission Materials</h2>
 			<p>Demonstration submissions consist of two required and one optional component, due on November 6, 2015, at 5 p.m. PDT:
 				<ol>
 					<li>a 4-page extended abstract (required)</li>
 					<li>a demo system summary that describes the logistics of the demonstration (required)</li>
 					<li>a video of the system in action, particularly if it helps illustrate the proposed demonstration (recommended)</li>
 				</ol>
 			</p>
 			<p>The extended abstract is a description of the project goal or research problem, contribution, and value to CSCW attendees of max. 4 pages. It will be published in the ACM Digital Library and distributed to all attendees as part of the Conference Extended Abstracts. The extended abstract details the kind(s) of cooperative work the demonstration is intended to support, the noteworthy and distinguishing ideas or approaches it embodies, a brief description of the system that will be demoed, and a clear statement of the demo’s relevance to the CSCW audience. The extended abstract should be submitted in PDF format. Please submit it in the <strong>SIGCHI
					Extended Abstract Format</strong> (<a href="sigchi-word-extended-abstracts.zip">Word</a>, <a href="sigchi-latex-extended-abstracts.tar.gz">Latex</a>).
 			</p>
 			<p>The demo system summary is a short description of the demo, the team, and the required setup. The system summaries will not be published in the Digital Library. In a separate document, please include answers to the following questions - proposals missing a clear and detailed plan will likely be rejected:
 				<ul>
 					<li>State whether this is intended as a reception or integrated demo.</li>
 					<li>Information about the presenter(s), including their relationship to the project.</li>
 					<li>Demonstration requirements. Provide a detailed description of what you need to make the demonstration work, such as needed space, equipment support, and Internet connectivity. If your submission is an integrated demo, please also describe in detail the logistics of how the conference attendees will get access to and interact with the system throughout the conference, and what added value attendees will receive from this special style of presentation.</li>
 					<li>Please note if this is a demo of a system described in a CSCW paper accepted for this year’s conference or that has appeared at a past CSCW conference. There’s nothing wrong with this, but it’s useful for us to know.  If the system has been demonstrated before, describe if there are any changes for the proposed CSCW demo.</li>
 					<li>Do you plan to gather data about attendees’ interactions with the system? If so, describe what data you plan to gather, and an example of the release form that you would ask attendees to sign. If the demo is accepted, proof of final IRB approval must be submitted by February 16th  (if your home institution has an IRB). CSCW can provide a "letter of cooperation" to assist with your IRB application, if needed. If your institution does not require IRB approval, a letter stating so from the demo presenters must be submitted instead.</li>
 				</ul>
 			</p>
 			<p>Optionally, the demo submission can be supported by a short Video Figure. The video should be at most two minutes long.
 			</p>     
 			<h2>Submission Instructions</h2> 
 			<p>The extended abstract, system summary, and URL for accessing the video should be e-mailed to the Demonstrations Co-Chairs at cscw<?php echo $year; ?>demos@acm.org by November 6, 2015.  Submissions received after the deadline will not be considered. All submissions will be acknowledged by e-mail.</p>
 			<p>Please direct all questions regarding the demo submissions to <a href="mailto:cscw<?php echo $year; ?>demos@acm.org">cscw<?php echo $year; ?>demos@acm.org</a>, We look forward to seeing you in <?php echo $city; ?>!
 			</p>			
 			<h2>Demonstrations Co-Chairs</h2>
 			<p>Björn Hartmann, UC Berkeley<br />
 				Anne Marie Piper, Northwestern University<br />
 				<a href="mailto:cscw<?php echo $year; ?>demos@acm.org">cscw<?php echo $year; ?>demos@acm.org</a></p>
 			</article>

 		</div>	
 	</div>
 	<?php 
 	include_once('../_inc/footer.php');
 	?>