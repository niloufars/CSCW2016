<?php
$pageTitle = "CSCW $year | Program | Lasting Impact Award";
$section = 'program';
$basePath = '..';
include_once ('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Program</h2>
				<ul class="subnav" id="nav_program">
					<li><a href="index.php">Program Overview</a></li>
					<li><a href="keynotes.php">Keynote Speakers</a></li>
					<li><a href="workshops.php">Workshops</a></li>
					<li><a href="lastingimpact.php" class="active">Lasting Impact Award</a></li>
<!-- 					<li><a href="posters.php">Interactive Posters</a></li> -->
<!-- 					<li><a href="panels.php">Panels</a></li> -->
<!-- 					<li><a href="dc.php">Doctoral Colloquium</a></li> -->
<!-- 					<li><a href="demos.php">Demonstrations</a></li> -->
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main" id="content">
			<h1>Lasting Impact Award</h1>
			<p>
				This year’s CSCW Lasting Impact Award will be presented to <strong>Paul
					Dourish</strong> and <strong>Victoria Bellotti</strong> for their
				CSCW 1992 paper, <em>Awareness and Coordination in Shared Workspaces</em>.
			</p>

			<h2>Paul Dourish</h2>
			<img src="<?php echo $basePath; ?>/images/lastingimpact-dourish.jpg"
				alt="Paul Dourish" />
			<p>Paul Dourish is a Professor of Informatics in the Donald Bren
				School of Information and Computer Sciences at UC Irvine, with
				courtesy appointments in Computer Science and Anthropology, and an
				Honorary Senior Fellow in Computing and Information Systems at the
				University of Melbourne. His research focuses primarily on
				understanding information technology as a site of social and
				cultural production; his work combines topics in human-computer
				interaction, ubiquitous computing, and science and technology
				studies. He has published over 100 scholarly articles, and was
				elected to the CHI Academy in 2008 in recognition of his
				contributions to Human-Computer Interaction. He is the author of two
				books: "Where the Action Is: The Foundations of Embodied
				Interaction" (MIT Press, 2001), which explores how phenomenological
				accounts of action can provide an alternative to traditional
				cognitive analysis for understanding the embodied experience of
				interactive and computational systems; and, with Genevieve Bell,
				"Divining a Digital Future: Mess and Mythology in Ubiquitous
				Computing" (MIT Press, 2011), which examines the social and cultural
				aspects of the ubiquitous computing research program.</p>
			<p>Before coming to UCI, he was a Senior Member of Research Staff in
				the Computer Science Laboratory of Xerox PARC; he has also held
				research positions at Apple Computer and at Rank Xerox EuroPARC. He
				holds a Ph.D. in Computer Science from University College, London,
				and a B.Sc. (Hons) in Artificial Intelligence and Computer Science
				from the University of Edinburgh.</p>

			<h2>Victoria Bellotti</h2>
			<img src="<?php echo $basePath; ?>/images/lastingimpact-bellotti.jpg"
				alt="Victoria Bellotti" />
			<p>Victoria Bellotti is a Research Fellow at PARC. When she’s not
				doing research, she consults on new technology-centered business
				ventures and innovations for PARC clients and start-ups. She studies
				people to understand their practices, problems, and requirements for
				future technology, and designs and analyzes human-centered systems,
				focusing on user experience.</p>
			<p>Best known for her research on personal information management and
				task management, Dr. Bellotti has more recently been focusing on
				user-centered design of context- and activity-aware computing
				systems, especially those involved in peer-to-peer marketplaces and
				optimized transportation. Her previous work at London University,
				United Kingdom, The British Government's Department of Trade and
				Industry, EuroPARC, and Apple encompasses domains such as process
				control, computer-mediated communication, co-present and remote
				collaboration, and ubiquitous computing.</p>
			<p>Dr. Bellotti received her Ph.D. in Human Computer Interaction from
				Queen Mary and Westfield College, an M.S. in Ergonomics, and a B.S.
				in Psychology from University College, all within London University
				in the United Kingdom. She is co-author of 20 patents and is an
				author or co-author on over 50 papers and book chapters. She also
				serves as an Adjunct Professor in the Jack Baskin School of Computer
				Engineering at University of California Santa Cruz and Associate
				Editor of the International Journal of HCI. In 2013 she was awarded
				membership of the ACM SIGCHI Academy for her contributions to the
				field and professional community of Human Computer Interaction.</p>

		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>