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
				<h2>Volunteering & Mentorship</h2>
				<ul class="subnav" id="nav_volunteer">
					<li><a href="index.php">Overview</a></li>
					<li><a href="sv.php" class="active">Student Volunteers</a></li>
					<li><a href="mentor.php">Reviewer Mentor Program</a></li>
				</ul>
			</div>
		</aside>
		<article class="ten columns" role="main">
			<h1>Call for Participation Student Volunteers</h1>
			<h2>Important Dates</h2>
			<ul>
				<li><strong>August 3, 2015</strong>: Student volunteer lottery
					registration system will open</li>
				<li><strong>October 9, 2015</strong>: Deadline to register for
					volunteer lottery</li>
				<li><strong>October 12, 2015</strong>: Applicants will be informed
					of their acceptance or waitlist status</li>
			</ul>
			<p>Student volunteers are essential to the success of the CSCW
				conference. In return for help at the conference, student volunteers
				receive a number of benefits.</p>

			<h2>You commit to:</h2>
			<p>Complete 20 hours of volunteer work at the conference during
					<?php echo $datesYear; ?>. In return, you get: (please note: SV benefits
					are still being discussed)</p>
			<ul>
				<li>Free conference registration & reception ticket</li>
				<li>A fabulous t-shirt sure to be the envy of all conference goers</li>
				<li>Daily lunches with faculty mentors</li>
			</ul>

			<p>While the volunteer duties are not always glamorous, they do
				provide a unique opportunity to interact closely with CSCW
				contributors, attendees, and other student volunteers. Volunteering
				provides a structured, cordial environment for students in various
				stages of their research career to become part of the CSCW
				community. Students often report that the 'social networks' they
				build from these meetings are the greatest benefit of being a
				volunteer. Indeed, it is not uncommon for future collaborations,
				internships/jobs, and friendships to be made through the SV
				experience.</p>

			<h2>Qualifications</h2>
			<p>Volunteers must be undergraduate, Master's, or Ph.D. students
				during the Fall semester of the 2015 academic year. All students,
				regardless of discipline, are encouraged to apply. No experience is
				required, but we are looking for enthusiastic, reliable people.</p>

			<h2>Selection Process</h2>
			<p>6 student volunteer spots have been assigned to experienced
				student volunteers to serve as day captains, and the other spots
				(about 30) will be randomly assigned by the lottery system to
				applicants who apply by Oct. 9. Finally, there will be a contest
				for designing the wonderful t-shirt that our SVs wear. The
				waitlisted applicant who submits the best t-shirt design will be
				assigned a SV spot. Further information about the t-shirt design
				contest will be emailed to waitlisted applicants after the initial
				notification deadline.</p>
			<p>Those volunteers initially selected will be notified on October
				12, 2015 so that they can begin making any necessary arrangements
				and get involved in the online student volunteer community. The
				waiting list will consist of applications received by the deadline
				but not initially selected. Applications received after the deadline
				will be placed at the end of the waiting list in the order in which
				they are received.</p>
			<p>Historically, more students apply than can be accepted, so early
				application is encouraged. However, applicants on the waiting list
				are often accepted, so do not be discouraged if you are applying
				close to or after the preliminary deadline. Some volunteers always
				drop out, so we highly encourage students to continue checking the
				waitlist.</p>

			<h2>Student Volunteer Co-Chairs</h2>
			<p>
				Carolina Fuentes, Pontificia Universidad Catolica de Chile<br />
				Elizabeth Murnane, Cornell University<br /> <a
					href="mailto:cscw<?php echo $year; ?>sv@acm.org">cscw<?php echo $year; ?>sv@acm.org</a>
			</p>
		</article>
	</div>
</div>
<?php
include_once ('../_inc/footer.php');
?>