<?php
$pageTitle = "CSCW $year | Program | Keynote Speakers";
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
					<li><a href="keynotes.php" class="active">Keynote Speakers</a></li>
					<li><a href="detailedprogram.php">Detailed Program</a></li>
					<li><a href="workshops.php">Workshops</a></li>
					<li><a href="lastingimpact.php">Lasting Impact Award</a></li>
<!-- 					<li><a href="posters.php">Interactive Posters</a></li> -->
<!-- 					<li><a href="panels.php">Panels</a></li> -->
<!-- 					<li><a href="dc.php">Doctoral Colloquium</a></li> -->
<!-- 					<li><a href="demos.php">Demonstrations</a></li> -->
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main" id="content">
			<h1>Keynote Speakers</h1>
			<h2 id="opening">Opening Keynote: Simon Rogers, Google</h2>
			<img src="<?php echo $basePath; ?>/images/keynote-simon-rogers.jpg"
				alt="Simon Rogers" /> 
			<p>
				<strong>Title:</strong> Beyond the Social Media Echo Chamber: Data Journalism with Search Data
			</p>
			<p>
				<strong>Abstract:</strong> How do you tell stories
				with one of the world's biggest publicly available datasets? Where
				are the insights in such a nuanced set of information, and how can
				they be relayed in ways that are visually interesting and tell us
				real lessons about the way we live today? Can that data be used to
				predict elections, reveal what we really think about the world's big
				issues, or even how to analyze roadkill figures?
			</p>
			<p>
				<strong>Bio:</strong> Simon Rogers is a data journalist. He is
				currently the data editor on the Trends team at Google, and
				previously worked as Twitter’s first data editor, telling stories
				based on millions of tweets. He is director of the Data Journalism
				Awards 2015, and is teaching data journalism at Berkeley’s
				journalism school. Simon edited and created <a
					href="http://guardian.co.uk/data">guardian.co.uk/data</a>, one of
				the world’s most popular data journalism websites, which publishes
				raw datasets and encourages users to visualize and analyze them.
				Simon recently authored <em>Facts are Sacred: the Power of Data</em>.
			</p>

			<h2 id="closing">Closing Keynote: Mike Krieger, Instagram</h2>
			<img src="<?php echo $basePath; ?>/images/keynote-krieger.jpg"
				alt="Mike Krieger" />
			<p>
				<strong>Title:</strong> How design decisions have shaped Instagram's
				community, and vice-versa
			</p>
			<p>
				<strong>Abstract:</strong> CSCW research is rich with examples of
				how the design, defaults, and social norms of digital systems affect
				behavior, be it in shared calendars or on social sites. How does
				this play out at a scale of 400 million users? In this talk,
				Instagram co-founder Mike Krieger will walk through how design
				decisions at Instagram -- large and small -- have influenced user
				behavior in the first five years of the product. For example, how
				has Instagram's asymmetric “follow” model shaped the connections its
				users have formed? Mike will also discuss examples of emergent norms
				that have arisen unexpectedly on Instagram, but can be traced to
				specific design decisions in the product.
			</p>
			<p>
				<strong>Bio:</strong> Mike Krieger is a software engineer and
				entrepreneur who co-founded the social media service Instagram, and
				still serves as the product's CTO. Instagram is an online mobile
				photo- and video-sharing social network, with over 400 million
				active users.
			</p>
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>