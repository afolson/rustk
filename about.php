<?php
/* 
 * Phoenix Project - Rustk: Online Runescape Toolkit
 * Copyright 2011 Overno, LLC
 *
 * $Id: about.php 34 2011-04-03 21:43:23Z amanda $
 *
 */
	include "inc/header.inc.php";
?>
    <!-- page title -->
    <h2 class="ribbon blue full">About Rustk</h2>
    <div class="triangle-ribbon blue"></div>
    <br class="cl" />
    <!-- page content -->
    <div id="page-content" class="two-col container_12">
      <div class="grid_12">
        <p>Rustk is an online RuneScape toolkit based on Tiko. Zybez discontinued the Tiko project, and the source code was released in hopes that other users would find it useful. Tiko eventually found a new home, but it was seemingly short lived - the site was taken down and users were left without a replacement.</p>
        <p>Rustk seeks to build on everything Tiko had to offer by improving and tweaking various aspects of the code base. We hope you like the changes that we're working on. Feature requests and feedback are always welcome! </p>
        <p>Taken from the previous Tiko site: <blockquote>Tiko was created in 2006 by Ryan Hoerr / "No1 1000" with help from TheExtremist and the Zybez development team. It was publicly released on Zybez.net on September 17th, 2006, and was operational there until October, 2009. It has since been released by the author under a GPLv3 license for public use and modification.</blockquote></p>
      </div>
      <br />
      <div class="grid_5 suffix_1">
        <h3>The Team</h3>
        <p>As of right now, the Rustk team is comprised of one bored developer that happens to be an avid RuneScaper. Most of the hard stuff is already completed, but there are a few things that need to be cleaned up and updated. Additionally, I'm always looking for dedicated people to help promote the site and maintain the community. If you'd like to get involved, please see the <a href="jobs.php">jobs</a> page.</p>
      </div>
      <div class="grid_5 prefix_1">
        <h3>What We Use</h3>
        <p>Rustk is written in PHP and uses MySQL as a back end. Additionally, Rustk also uses Linode for hosting.</p>
      </div>
      <br class="cl" />
      <br />
    </div>
    
    <!-- page sidebar -->
    <aside>
      <h3>Twitter Feed</h3>
      <ul id="twitter_update_list">
        <li></li>
      </ul>
      <script type="text/javascript" src="http://twitter.com/javascripts/blogger.js"></script> 
      <script type="text/javascript" src="http://twitter.com/statuses/user_timeline/RustkOnline.json?callback=twitterCallback2&amp;count=4"></script> 
      <br class="cl" />
      <br />
    </aside>
    <br class="cl" />
    <br class="cl" />
  </div>
<?php
	include "inc/footer.inc.php";
?>