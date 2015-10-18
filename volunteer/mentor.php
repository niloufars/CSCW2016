<?php
$pageTitle = "CSCW $year | Volunteer";
$section = 'volunteer';
$basePath = '..';
include_once ('../_inc/header.php');
?>
<div class="container main">
	<div class="row">
		<aside class="four columns offset-by-one">
			<div class="item">
				<h2>Volunteering &amp; Mentorship</h2>
				<ul class="subnav" id="nav_volunteer">
					<li><a href="index.php">Overview</a></li>
					<li><a href="sv.php">Student Volunteers</a></li>
					<li><a href="mentor.php" class="active">Reviewer Mentor Program</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main" id="content">

			<h1>Reviewer Mentor Program</h1>
			<p>The CSCW Reviewer Mentor Program is intended to create an
				opportunity for students to participate in the CSCW review process
				while getting guidance from senior reviewers. The idea is that a
				small pool of students within the CSCW field are matched with CSCW
				review mentors, who agree to support the student in writing good
				reviews. This has three purposes. First, PC members who choose a
				student reviewer within the mentor program will know that the
				student will do a good review, since the mentor will see to that.
				Second, students will have the opportunity to get feedback and
				discuss the reviewing process with the mentor and therefore become a
				better reviewer. Third, the students will become more expert
				reviewers for future CSCW conferences!</p>

			<h2>Instructions, Tricks and Trade in making CSCW reviews</h2>
			<p><a href="InstructionsCSCWStudentMentorProgram.pdf">This document</a> contains tricks of the trade in making CSCW reviews,
				including overall structure, possible relevant links, and so on. The
				document is created with the aim of assisting and supporting new
				CSCW reviewers to the field but can also be used by others.</p>
			<p>Other helpful resources are Dan Cosley's blog post <a href="http://blogs.cornell.edu/danco/2014/06/12/how-i-review-papers/">"How I review
				papers"</a> and Dave Randall's <a href="DaveRandallReviewingforCSCW.pdf">reflections on reviewing for CSCW</a>.</p>
			<p>If you have any additional interesting tricks of the trade you
				would like to share, please email the student reviewing chair, and
				if applicable it will be included in the instructions.</p>
				
			<h2>
				How do I sign up as a Student Reviewer?<br /> (Deadline May 8, 2015)
			</h2>
			<p><strong>Already have a mentor?</strong> Make an agreement with a senior reviewer
				(could be your supervisor or other local people in your department), 
				and then send an email to <a href="mailto:cscw<?php echo $year;?>reviewingmentor@acm.org">cscw<?php echo $year;?>reviewingmentor@acm.org</a> with
				the following information:</p>
			<ul>
				<li>Basic information: Student review mentee name, affiliation,
					email, 5 topic keywords</li>
				<li>Your review mentor name, affiliation, and email</li>
				<li>Sign-up as a reviewer in the PCS-system</li>
			</ul>
			<p><strong>Do not have a mentor?</strong> If you do not have a formal agreement with a
				senior reviewer, you can sign-up for one by emailing the following
				information to <a href="mailto:cscw<?php echo $year;?>reviewingmentor@acm.org">cscw<?php echo $year;?>reviewingmentor@acm.org</a>:</p>
			<ul>
				<li>Basic information: Student review mentee name, affiliation,
					email, 5 topic keywords – a short bio (5 sentences), including why
					you are signing up, and what your expectations are</li>
			</ul>

			<h2>
				How do I sign up to be a review mentor?<br /> (Deadline May 8, 2015)
			</h2>
			<p>For this to be a success we really need mentors! To sign-up as
				volunteer to be a review mentor, please email
				<a href="mailto:cscw<?php echo $year;?>reviewingmentor@acm.org">cscw<?php echo $year;?>reviewingmentor@acm.org</a> the following:</p>
			<ul>
				<li>Name, affiliation, email, how many students you volunteer to
					mentor (probably no more than five) and up to 5 areas of expertise
					to help match you with a student.</li>
			</ul>
			<p>We will match mentors and mentees based upon student requests
				(maturity, engagement, and motivation) and mentor areas of
				expertise.</p>

			<h2>How will program committee members assign student reviewers</h2>
			<p>We will complete a table of student reviewers and mentees, which
				will be circulated to the CSCW PC, who can use the list to find and
				assign reviewers for their papers.</p>
			<p>All mentors and students will be acknowledged at the CSCW2016
				conference.</p>

			<h2>Why a mentoring review program?</h2>
			<p>The increasing numbers of submission for CSCW as well as the
				revise &amp; resubmit process entails that we are dependent on a large
				number of good reviewers who are willing to provide expert feedback
				and engage with authors on their work.</p>
			<p>In former CSCW surveys, students have stated that despite
				volunteering to review for CSCW they are not often chosen by PC
				members for reviewing tasks. We feel that reviewing can help student
				authors to write better papers by seeing the review process and the
				related discussions from the “other side."</p>
			<p>Questions can be directed to John Thomas, Chair for the Student
				Review Mentoring at <a href="mailto:cscw<?php echo $year;?>reviewingmentor@acm.org">cscw<?php echo $year;?>reviewingmentor@acm.org</a></p>

			<h2>Student Review Mentoring Chair</h2>
			<p>
				John Thomas, !Problem Solving International<br />
				<a href="mailto:cscw<?php echo $year;?>reviewingmentor@acm.org">cscw<?php echo $year;?>reviewingmentor@acm.org</a>
			</p>


		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>