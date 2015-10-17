<?php 
  $pageTitle = 'Attending CSCW';
  $section = 'attend';
  $basePath = '..';
  include_once('../_inc/header.php');
?>
  <div class="container main">
    <div class="row">
    <aside class="four columns offset-by-one">
        <div class="item">
          <h2>Accessibility</h2>
          <ul class="subnav" id="nav_attend">
            <li><a href="index.php">Overview</a></li>
            <li><a href="reg.php">Conference Registration</a></li>
            <li><a href="hotel.php">Hotel</a></li>
            <li><a href="visas.php" >Visas</a></li>
            <li><a href="travel.php">Travel &amp; Transportation</a></li>
            <li><a href="local.php">Local Attractions</a></li>
            <li><a href="telepresence.php">Telepresence</a></li>
            <li><a href="accessibility.php" class="active">Accessibility</a></li>
          </ul>
        </div>
      </aside>
      <article class="ten columns" role="main">
        <h1>Accessibility</h1>
        
          <p>CSCW aims to be an accessible and inclusive conference. If you have any questions or concerns about accessibility, or any special requests (such as ASL translation, captioning, etc.), please contact the conference accessibility chair at <a class="email" href="mailto:cscw<?php echo $year; ?>accessibility@acm.org">cscw<?php echo $year; ?>accessibility@acm.org</a>, and he will do his best to work with you to address your concerns. Note that some requests may require advance notice, so please be mindful to submit accessibility requests as far in advance of the conference date as possible in order to maximize the chance that we can address them to your satisfaction.</p>
          <p>
          Interested attendees with health or mobility concerns that preclude travel to San Francisco may also find CSCW’s <a href="telepresence.php">telepresence initiative</a> of interest.
          </p>
          <p>CSCW 2016 encourages presenters to consider whether their talks are accessible to all participants. <a href="http://homes.cs.washington.edu/~ladner/MakingYourTalkAccessible.pdf">Here are some suggestions for giving accessible conference talks</a>. CSCW also strongly encourages authors to <a href="http://www.sigaccess.org/welcome-to-sigaccess/resources/accessible-pdf-author-guide/">check that their PDFs are accessible using these guidelines</a>.
          </p>
          
          
          <h3>Accessibility Chair</h3>
        <p>Joshua Hailpern, HP Labs<br />
          <a class="email" href="mailto:cscw<?php echo $year; ?>accessibility@acm.org">cscw<?php echo $year; ?>accessibility@acm.org</a></p>

          </p>

      </article>
      
    </div>  
  </div>
<?php 
  include_once('../_inc/footer.php');
?>