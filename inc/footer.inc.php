<?php
/* 
 * Rustk: Online Runescape Toolkit
 * Copyright 2011 Overno, LLC
 *
 * $Id: footer.inc.php 41 2011-05-28 15:17:17Z amanda $
 *
 */
/*
TODO: Add these back into the template. These are stats for users online/user count
<div class="footerll">Rustk: <span style="color: #288400;">Online</span><br/>
Registered: <?php $registered['ct']?><br/>
Most online: <?php $system['most']?><br/>
Launches: <?php $system['launches'] ?></div>
<div class="footerr">
<h2><?php $onstr?></h2><p>
<?php $users ?>
*/
	if (substr($_SERVER['REQUEST_URI'], 0, 25) == '/inc/footer.inc.php') {
                die("Cannot access this script directly.");
        }
?>
  <!-- Footer Start -->
  <footer>
    <ul class="footer-nav">
      <li><a href="jobs.php">Jobs</a> |</li>
      <li><a href="privacy.php">Privacy Policy</a> |</li>
      <li><a href="tos.php">Terms of Service</a></li>
    </ul>
    <p>Copyright &copy;2011, Rustk Development Team. <a href="http://www.linode.com/?r=3463164d4364c55c68914ebf706f629eb2d98a11"><img src="img/linode.png" /></a></p>
    <br class="cl" />
  </footer>
  <!-- footer end --> 
  
  <!-- Javascript at the bottom for fast page loading --> 
  <!-- Grab Google CDN's jQuery + jQuery UI. fall back to local if necessary --> 
  <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script> 
  <script>!window.jQuery && document.write('<script src="js/jquery-1.4.2.min.js"><\/script>')</script> -->
  <script type="text/javascript" src="js/jquery.tools.min.js"></script> 
  <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script> 
  <script type="text/javascript" src="js/jquery.form.js"></script> 
  <script src="js/cufon-yui.js" type="text/javascript"></script> 
  <script src="js/Aller.font.js" type="text/javascript"></script> 
  <script src="js/jquery.tipsy.js" type="text/javascript"></script> 
  <script src="js/functions.js" type="text/javascript"></script> 
  <!--[if lt IE 7 ]>
    <script src="js/dd_belatedpng.js"></script>
  <![endif]--> 
</div>
</body>
</html>