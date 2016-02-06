<?php
//--------------------------------------------------\\
//	'News'-post module -- somewhat broken due to	\\
//		injection protections						\\
//==================================================\\

if(!defined('IN_TIKO') || $_SESSION['perm'] < 9) { // Root-only
  require('die.php');
}

// Print form
$form = <<<BLK
<form action="index.php?a=adminnews&subm=1" method="post">
<input type="hidden" name="mid" value="{$_SESSION['mid']}" />
<input type="text" name="name" size="40" value="{$_SESSION['username']}" disabled="disabled" />
<input type="text" name="title" size="40" value="Title" />
&nbsp;<input type="submit" value="Post" /><br />
<textarea cols="26" rows="18" name="body">Body -- Raw HTML</textarea><br />
</form>
BLK;

if ($_GET['subm'] == 1 && $_POST['title'] != null && $_POST['body'] != null) {
// Submit
$db->query("INSERT INTO news SET mid=".$_POST['mid'].", time=NOW(), title='".$_POST['title']."', body='".addslashes(html_entity_decode($_POST['body']))."'");
$form = 'Posted! =]';
}

$TMPL['content'] = $form;
$TMPL['head'] = <<<BLK
<style type="text/css">
body {
	margin: 5px;
	line-height: 1.93em;
	}
</style>
BLK;
$pagetitle = 'News Post';

?>