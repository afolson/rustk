<?php
/* 
 * Phoenix Project - Rustk: Online Runescape Toolkit
 * Copyright 2011 Overno, LLC
 *
 * $Id: news.php 25 2011-04-02 23:54:22Z amanda $
 *
 */
	include "inc/header.inc.php";
	$sql = mysql_connect("localhost", "rustk", "vvtd74F9cxNz6tz6") or die("Database failure");
	mysql_select_db('rustk');
?>
    <!-- page title -->
    <h2 class="ribbon full">Latest News</h2>
    <div class="triangle-ribbon"></div>
    <br class="cl" />
    <!-- page content -->
    <div id="page-content" class="container_12">
<?php
	$query = mysql_query('SELECT news.title, UNIX_TIMESTAMP(news.time) AS time, news.body, users.username FROM news, users WHERE users.mid = news.mid ORDER BY news.time DESC LIMIT 3') or die("Query failed with error: ".mysql_error());

	while($row = mysql_fetch_array($query)) {
		echo "<h4>" . $row['title'] . " Posted by " . $row['username'] . " on " .  gmdate("M d Y H:i:s", $row['time']) . "</h4>";
		echo "<p>" . $row['body'] . "</p>";

}
?>
	</div>
    <br class="cl" />
    <br class="cl" />
  </div>
<?php
	include "inc/footer.inc.php";
?>