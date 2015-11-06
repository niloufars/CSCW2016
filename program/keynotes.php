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
<!-- 					<li><a href="papers.php">Papers</a></li> -->
<!-- 					<li><a href="accepted_workshops.php">Workshops</a></li> -->
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
			<img src="<?php echo $basePath; ?>/images/keynote-simon-rogers.jpg" alt="Simon Rogers" />
			<p>
				Simon Rogers is a data journalist. He is currently the data editor
				on the Trends team at Google, and previously worked as Twitter’s
				first data editor, telling stories based on millions of tweets. He
				is director of the Data Journalism Awards 2015, and is teaching data
				journalism at Berkeley’s journalism school. Simon edited and created
				<a href="http://guardian.co.uk/data">guardian.co.uk/data</a>, one of
				the world’s most popular data journalism websites, which publishes
				raw datasets and encourages users to visualize and analyze them.
				Simon recently authored <em>Facts are Sacred: the Power of Data</em>.
			</p>

			<h2 id="closing">Closing Keynote: Mike Krieger, Instagram</h2>
			<img src="<?php echo $basePath; ?>/images/keynote-krieger.jpg" alt="Mike Krieger" />
			<p>Mike Krieger is a software engineer and entrepreneur who
				co-founded the social media service Instagram, and still serves as
				the product's CTO. Instagram is an online mobile photo- and
				video-sharing social network, with over 400 million active users.</p>
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>